<?php
/**
 * Classe de integração.
 *
 * Classe responsável pela pesquisa de pedidos no database do protheus.
 */

namespace App\Services\IntegracaoProtheus\Pedido;

use Monolog\Logger;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;

/**
 * Class PedidosProtheus
 *
 * @package     \App\Services\IntegracaoSalesforce
 * @subpackage  Pedido
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class PedidosProtheus
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
        
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   Registry $objRegistry
     * @param   \Monolog\Logger $objLogger
     */
    public function __construct(EntityManager $objEntityManager, Logger $objLogger)
    {
        $this->objEntityManager = $objEntityManager;
        $this->objLogger                = $objLogger;
    }
    
    /**
     * Função que busca o status do pedido vogel no protheus
     *
     * @access  public
     * @param   int $pedido
     * @throws  \Exception
     * @return  object
     */
    public function getStatusPedido(int $pedido)
    {
        try {
            $query = <<<SQL
SELECT
	 E1_NUM AS			'titulo'
	,RTRIM(E1_P_REF) AS	'pedido'
	,E1_NUMBOR AS		'bordero'
	,E1_PORTADO AS		'Portador(banco)'
	,E1_PREFIXO AS		'Prefixo'
	,Convert(varchar(10),cast(E1_BAIXA as date),103) AS		'baixa(Protheus)'
	,Convert(varchar(10),cast(E1_VENCORI as date),103) AS  'Data_vencimento_origem(Protheus)'
	,Convert(varchar(10),cast(E1_VENCTO as date),103) AS 		'Data_vencimento(Protheus)'
	,E1_DESCONT AS		'Desconto'
	,F2.F2_DOC
	
FROM  SE1V50 AS E1

INNER JOIN SF2V50 AS F2 ON E1.E1_P_REF = F2.F2_P_REF
WHERE E1_P_REF <> '' AND RTRIM(E1_P_REF) = '{$pedido}';
SQL;
            $objConnection = $this->objEntityManager->getConnection();
            $a = $objConnection->executeQuery($query);
            return $a->fetchAll();
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Função que busca o status dos pedidos vogel no protheus
     *
     * @access  public
     * @param   array $pedido
     * @throws  \Exception
     * @return  object
     */
    public function getStatusPedidos(array $pedidos)
    {
        try {
            $a = implode(",", $pedidos);
            $query = <<<SQL
SELECT
	E1_NUM AS			'titulo'
	,RTRIM(E1_P_REF) AS	'pedido'
	,E1_NUMBOR AS		'bordero'
	,E1_PORTADO AS		'Portador(banco)'
	,E1_PREFIXO AS		'Prefixo'
    ,CASE WHEN E1_BAIXA <> '' THEN Convert(varchar(10),cast(E1_BAIXA as date),103) ELSE NULL END AS 'baixa(Protheus)'
	,Convert(varchar(10),cast(E1_VENCORI as date),103) AS  'Data_vencimento_origem(Protheus)'
	,Convert(varchar(10),cast(E1_VENCTO as date),103) AS 		'Data_vencimento(Protheus)'
	,E1_DESCONT AS		'Desconto'
	,F2.F2_DOC


FROM  SE1V50 AS E1

INNER JOIN SF2V50 AS F2 ON E1.E1_P_REF = F2.F2_P_REF
WHERE E1_P_REF <> '' AND RTRIM(E1_P_REF) IN ({$a}) ORDER BY RTRIM(E1_P_REF);
SQL;
            $objConnection = $this->objEntityManager->getConnection();
            $a = $objConnection->executeQuery($query);
            return $a->fetchAll();
        } catch (\Exception $e){
            throw $e;
        }
    }
}

