<?php
/**
 * Classe de Integração
 *
 * Classe responsável pelas integrações com o salesforce.
 */

namespace App\Services\Cobranca\Pedido;

use Monolog\Logger;
use App\Entity\Cobranca\Invoice;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use \Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Listing
 *
 * @package \App\Services\Cobranca
 * @subpackage Pedido
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Listing
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
    private $objLogger  = NULL;    
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   EntityManager   $objEntityManager
     * @param   \Monolog\Logger $objLogger
     */
    public function __construct(EntityManager $objEntityManager, Logger $objLogger)
    {
        $this->objEntityManager     = $objEntityManager;
        $this->objLogger            = $objLogger;
    }
    
    /**
     * Retorna os dados de uma invoice se ela existir.
     *
     * @access  public
     * @param   int $idPedido
     * @return  Invoice|NULL
     * @throws  NotFoundHttpException|\RuntimeException|\Exception
     */
    public function get(int $idPedido)
    {
        try {
            $objInvoice = $this->objEntityManager->getRepository('AppEntity:Cobranca\Invoice')->find($idPedido);
            return $objInvoice;
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    public function getStatusPedidoSalesforce()
    {
        try {
            $objRepositoryInvoice = $this->objEntityManager->getRepository('AppEntity:Cobranca\Invoice');
            $criteria = [];
            
            $objQueryBuilder = $objRepositoryInvoice->createQueryBuilder('invo');
            
            $objExprIsNotNull = $objQueryBuilder->expr()->isNotNull('invo.idSalesforce');
            $objQueryBuilder->andWhere($objExprIsNotNull);
            
            $objExprEq = $objQueryBuilder->expr()->eq('invo.statusPagamentoSalesforce', ':statusPagamentoSalesforce');
            $objQueryBuilder->andWhere($objExprEq);
            $objExprEq = $objQueryBuilder->expr()->eq('invo.statusInvoice', ':statusInvoice');
            $objQueryBuilder->andWhere($objExprEq);
            $criteria['statusPagamentoSalesforce'] = false;
            $criteria['statusInvoice'] = 2006;
            $objQueryBuilder->setParameters($criteria);
            
            $objCriteriaOrderBy = Criteria::create()->orderBy(['invo.idInvoice'=>'ASC']);
            $objQueryBuilder->addCriteria($objCriteriaOrderBy);
            $objQueryBuilder->groupBy('invo.idInvoice');
            $objQueryBuilder->setMaxResults(300);
            
            return $objQueryBuilder->getQuery()->getResult();
        }catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }

    public function getPedidoStatusSalesforce()
    {
        try {
            $criteria = [];
            $objRepositoryInvoice = $this->objEntityManager->getRepository('AppEntity:Cobranca\Invoice');
            $objQueryBuilder = $objRepositoryInvoice->createQueryBuilder('invo');

            $objExprIsNotNull = $objQueryBuilder->expr()->isNotNull('invo.idSalesforce');
            $objQueryBuilder->andWhere($objExprIsNotNull);

            $objExprEq = $objQueryBuilder->expr()->eq('invo.statusInvoice', ':statusInvoice');
            $objQueryBuilder->andWhere($objExprEq);

            $ultimosTresMeses = new \DateTime('-3 month');
            $ultimosTresMeses = $ultimosTresMeses->format('Y-m-d');
            $objExprGt = $objQueryBuilder->expr()->gte('invo.dateValit', ':filtroData');
            $objQueryBuilder->andWhere($objExprGt);

            $criteria['statusInvoice'] = 2006;
            $criteria['filtroData'] = $ultimosTresMeses;
            $objQueryBuilder->setParameters($criteria);

            $objCriteriaOrderBy = Criteria::create()->orderBy(['invo.idInvoice'=>'ASC']);
            $objQueryBuilder->addCriteria($objCriteriaOrderBy);
            $objQueryBuilder->groupBy('invo.idInvoice');

            return $objQueryBuilder->getQuery()->getResult();
        }catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }

    public function list(Request $objRequest)
    {
        try {
            $objRepositoryInvoice = $this->objEntityManager->getRepository('AppEntity:Cobranca\Invoice');
            $criteria = [];
            
            $objQueryBuilder = $objRepositoryInvoice->createQueryBuilder('invo');
            
            $objQueryBuilder->innerJoin('invo.statusInvoice', 'statusInvoice')
                            ->innerJoin('invo.invoiceType', 'invoiceType')
                            ->innerJoin('invo.invoiceItem', 'invoiceItem')
                            ->leftJoin('invo.cc', 'cc')
                            ->leftJoin('cc.ccOperacao', 'ccOperacao')
                            ->leftJoin('invo.deliveryInvoice', 'deliveryInvoice')
                            ->leftJoin('deliveryInvoice.delivery', 'delivery')
                            ->orderBy('invo.dateValit', 'DESC');
            
            if($objRequest->get('idCliente', false)){
                $objExprEq = $objQueryBuilder->expr()->eq('invo.custumer', ':custumer');
                $objQueryBuilder->andWhere($objExprEq);
                $criteria['custumer'] = $objRequest->get('idCliente', null);
            }
            
            if($objRequest->get('statusInvoice', false)){
                $objExprEq = $objQueryBuilder->expr()->eq('statusInvoice.idStatusInvoice', ':statusInvoice');
                $objQueryBuilder->andWhere($objExprEq);
                $criteria['statusInvoice'] = $objRequest->get('statusInvoice', null);
            }
            
            if($objRequest->get('ids', false)){
                $objExprIn = $objQueryBuilder->expr()->in('invo.idInvoice', ':ids');
                $objQueryBuilder->andWhere($objExprIn);
                $criteria['ids'] = $objRequest->get('ids', null);
            }
            
            if(count($criteria)){
                $objQueryBuilder->setParameters($criteria);
            }
            
            $limit = (integer)$objRequest->get('limit',50);
            $offset = ((integer)$objRequest->get('offset',0) * $limit);
            
            $objQueryBuilder->setFirstResult($offset);
            $objQueryBuilder->setMaxResults($limit);
            
            $objCriteriaOrderBy = Criteria::create()->orderBy(['invo.idInvoice'=>'ASC']);
            $objQueryBuilder->addCriteria($objCriteriaOrderBy);
            $objQueryBuilder->groupBy('invo.idInvoice');
            
            $arrayPedido = [];
            
            $arrayPedido['data'] = $objQueryBuilder->getQuery()->getResult();
            $objQueryBuilder->resetDQLParts(['groupBy', 'orderBy']);
            $objQueryBuilder->select('count(DISTINCT invo.idInvoice) AS total');
            $objQueryBuilder->setFirstResult(0);
            $objQueryBuilder->setMaxResults(1);
            $resultSet = $objQueryBuilder->getQuery()->getResult();
            $arrayPedido['total'] = $resultSet[0]['total'];
            $arrayPedido['offset'] = (integer)$objRequest->get('offset',0);
            $arrayPedido['limit'] = (integer)$objRequest->get('limit',50);
            
            return $arrayPedido;
        }catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

