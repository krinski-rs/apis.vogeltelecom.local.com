<?php
/**
 * Classe de roteamento dos serviços de geolocalização.
 * 
 * Contém os endpoints dos serviços de geolocalização.
 */
namespace App\Controller\Cliente;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Services\Cliente;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use App\Services\IntegracaoProtheus;
/**
 * Class ClienteController
 *
 * @package     \App\Controller
 * @subpackage  Cliente
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class ClienteController extends AbstractController
{
    /**
     * Variável que irá guardar a referência do serviço Cliente.
     * 
     * @access  private
     * @var     \App\Services\Cliente
     */
    private $objCliente = NULL;
    
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
     * @param   \App\Services\Cliente $objCliente
     */
    public function __construct(Cliente $objCliente, IntegracaoProtheus $objIntegracaoProtheus){
        $this->objCliente               = $objCliente;
        $this->objIntegracaoProtheus    = $objIntegracaoProtheus;
    }
    
    /**
     * Chama o serviço que irá retornar um cliente.
     * 
     * @access  public
     * @param   int $idCliente
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getCliente(int $idCliente)
    {
        try {
            if(!$this->objCliente instanceof Cliente){
                return new JsonResponse(['message'=> 'Class "App\Services\Cliente" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $arrayCliente = $this->objCliente->getCliente($idCliente);
            return new JsonResponse($arrayCliente, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá retornar uma lista de clientes.
     * 
     * @access  public
     * @param   Request $objRequest
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getClientes(Request $objRequest)
    {
        try {
            if(!$this->objCliente instanceof Cliente){
                return new JsonResponse(['message'=> 'Class "App\Services\Cliente" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $arrayClientes = $this->objCliente->getClientes($objRequest->attributes->all());
            return new JsonResponse($arrayClientes, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá retornar um pedido de um cliente.
     * 
     * @access  public
     * @param   int $idCliente
     * @param   int $idPedido
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getClientePedido(int $idCliente, int $idPedido)
    {
        try {
            if(!$this->objCliente instanceof Cliente){
                return new JsonResponse(['message'=> 'Class "App\Services\Cliente" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $arrayPedido = $this->objCliente->getClientePedido($idCliente, $idPedido);
            return new JsonResponse($arrayPedido, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá retornar o pdf do pedido.
     * 
     * @access  public
     * @param   int $idCliente
     * @param   int $idPedido
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getClientePedidoPdf(int $idCliente, int $idPedido)
    {
        try {
            if(!$this->objCliente instanceof Cliente){
                return new JsonResponse(['message'=> 'Class "App\Services\Cliente" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $pedido = $this->objCliente->getClientePedido($idCliente, $idPedido);
            $path = $this->objIntegracaoProtheus->getPedidoPdf($pedido['idInvoice'], (strlen($pedido['cnpjCobrador'])==14?$pedido['cnpjCobrador']:$pedido['banco']['cobrador']['cnpj']));
            $objBinaryFileResponse = new BinaryFileResponse($path);
            $objBinaryFileResponse->headers->set('Content-Type', 'application/pdf');
            $objBinaryFileResponse->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE, //ResponseHeaderBag::DISPOSITION_ATTACHMENT salva o arquivo
                "{$idPedido}.pdf"
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
     * Chama o serviço que irá retornar uma lista de pedidos de um cliente.
     * 
     * @access  public
     * @param   int $idCliente
     * @param   Request $objRequest
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getClientePedidos(int $idCliente, Request $objRequest)
    {
        try {
            if(!$this->objCliente instanceof Cliente){
                return new JsonResponse(['message'=> 'Class "App\Services\Cliente" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $arrayPedidos = $this->objCliente->getClientePedidos($idCliente, $objRequest);
            return new JsonResponse($arrayPedidos, Response::HTTP_OK);
        } catch (NotFoundHttpException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getStatusCode());
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}