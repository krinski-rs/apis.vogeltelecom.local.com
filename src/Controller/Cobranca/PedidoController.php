<?php
/**
 * Classe de roteamento dos serviços de pedido.
 * 
 * Contém os endpoints dos serviços do pedido.
 */
namespace App\Controller\Cobranca;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\IntegracaoProtheus;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\Pedido;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PedidoController
 *
 * @package     \App\Controller
 * @subpackage  Protheus
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class PedidoController extends AbstractController
{
    /**
     * Variável que irá guardar a referência do serviço de Pedido.
     *
     * @access  private
     * @var     Pedido
     */
    private $objPedido = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de integraços com o PROTHEUS.
     *
     * @access  private
     * @var     IntegracaoProtheus
     */
    private $objIntegracaoProtheus = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   Pedido $objPedido
     * @param   IntegracaoProtheus $objIntegracaoProtheus
     */
    public function __construct(Pedido $objPedido, IntegracaoProtheus $objIntegracaoProtheus){
        $this->objPedido        = $objPedido;
        $this->objIntegracaoProtheus    = $objIntegracaoProtheus;
    }
    
    /**
     * Chama o serviço que irá retornar o PDF de um Pedido.
     * 
     * @access  public
     * @param   int $idPedido
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPedidoPdf(int $idPedido)
    {
        try {
            if(!$this->objPedido instanceof Pedido){
                return new JsonResponse(['message'=> 'Service "Pedido" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $pedido = $this->objPedido->getPedido($idPedido);
            $file = $this->objIntegracaoProtheus->getPedidoPdf($pedido['idInvoice'], $pedido['banco']['cobrador']['cnpj']);
            $objBinaryFileResponse = new BinaryFileResponse($file);
            $objBinaryFileResponse->headers->set('Content-Type', 'application/pdf');
            $objBinaryFileResponse->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE, //ResponseHeaderBag::DISPOSITION_ATTACHMENT salva o arquivo
                "Pedido_{$idPedido}.pdf"
            );
            
            return $objBinaryFileResponse;
        } catch (NotFoundHttpException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getStatusCode());
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá retornar os dados de um Pedido.
     * 
     * @access  public
     * @param   int $idPedido
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPedido(int $idPedido)
    {
        try {
            if(!$this->objPedido instanceof Pedido){
                return new JsonResponse(['message'=> 'Service "Pedido" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $pedido = $this->objPedido->getPedido($idPedido);
            return new JsonResponse($pedido, Response::HTTP_OK);
            
        } catch (NotFoundHttpException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getStatusCode());
        }catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá retornar a lista de pedidos.
     * 
     * @access  public
     * @param   int $idPedido
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPedidos(Request $objRequest)
    {
        try {
            if(!$this->objPedido instanceof Pedido){
                return new JsonResponse(['message'=> 'Service "Pedido" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $pedidos = $this->objPedido->getPedidos($objRequest);
            return new JsonResponse($pedidos, Response::HTTP_OK);
            
        } catch (NotFoundHttpException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getStatusCode());
        }catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

