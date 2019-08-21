<?php
/**
 * Classe de Cliente.
 * 
 * Classe que fornece os serviços da api de cliente.
 */
namespace App\Services;
use \Monolog\Logger;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/**
 * Class Cliente
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Cliente
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager   = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de log.
     * 
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger          = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de Pedido.
     * 
     * @access  private
     * @var     Pedido
     */
    private $objPedido          = NULL;
        
    /**
     * Retorna a instância do objeto.
     *
     * @access  public
     * @param   Registry $objRegistry'
     * @param   \Monolog\Logger   $objLogger
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, Pedido $objPedido)
    {
        $this->objEntityManager = $objRegistry->getManager('cobranca');
        $this->objLogger        = $objLogger;
        $this->objPedido        = $objPedido;
    }
    
    /**
     * Retorna os dados de um cliente.
     *
     * @access  public
     * @param   int $idCliente
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getCliente(int $idCliente)
    {
        try {
            return ['getCliente'];
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Retorna uma lista de clientes.
     *
     * @access  public
     * @param   array $params
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getClientes(array $params)
    {
        try {
            return ['getClientes'];
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Retorna um pedido de um cliente.
     *
     * @access  public
     * @param   int $idCliente
     * @param   int $idPedido
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getClientePedido(int $idCliente, int $idPedido)
    {
        try {
            $objRequest = new Request();
            $objRequest->attributes->add(['idCliente' => $idCliente, 'statusInvoice' => 2006]);
            $pedido = $this->objPedido->getPedido($idPedido);
            if(!array_key_exists('custumer', $pedido) || ((integer)$pedido['custumer'] !== $idCliente)){
                throw new NotFoundHttpException('Pedido não Encontrado.');
            }
            return $pedido;
        } catch (NotFoundHttpException $e){
            throw $e;
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Retorna uma lista de pedidos de um cliente.
     *
     * @access  public
     * @param   int     $idCliente
     * @param   Request $objRequest
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getClientePedidos(int $idCliente, Request $objRequest)
    {
        try {
            $objRequest->attributes->add(['idCliente' => $idCliente, 'statusInvoice' => 2006]);
            return $this->objPedido->getPedidos($objRequest);
        } catch (NotFoundHttpException $e) {
            throw $e;
        }catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}