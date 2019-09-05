<?php
/**
 * Classe de Integração
 *
 * Classe responsável pelas integrações com o Protheus.
 */

namespace App\Services;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Monolog\Logger;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\Cobranca\Pedido\Listing;
use App\Entity\Cobranca\Invoice;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Pedido
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Pedido
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager   = NULL;
    
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManagerCobranca   = NULL;
    
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
     * @param   Registry $objRegistry
     * @param   \Monolog\Logger   $objLogger
     */
    public function __construct(Registry $objRegistry, Logger $objLogger)
    {
        $this->objEntityManager         = $objRegistry->getManager('mysql');
        $this->objEntityManagerCobranca = $objRegistry->getManager('cobranca');
        $this->objLogger                = $objLogger;
    }
    
    /**
     * Retorna os dados de um pedido se ele existir.
     *
     * @access  public
     * @param   int $idPedido
     * @return  Pedido|NULL
     * @throws  NotFoundHttpException|\RuntimeException|\Exception
     */
    public function getPedido(int $idPedido)
    {
        try {
            $objListing = new Listing($this->objEntityManagerCobranca, $this->objLogger);
            $objInvoice = $objListing->get($idPedido);
            if(!($objInvoice instanceof Invoice)){
                throw new NotFoundHttpException('Pedido não Encontrado.');
            }
            $defaultContext = [
                AbstractNormalizer::CALLBACKS => [
                    'dateRecord' => function ($dateTime) {
                    return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateFirst' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateLast' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateValit' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'deliveryInvoice' => function ($objDeliveryInvoice) {
                        $retorno = [];
                        if(!$objDeliveryInvoice->count()){
                            return $retorno;
                        }
                        $objDeliveryInvoice->first();
                        while ($obj = $objDeliveryInvoice->current()){
                            $retorno[] = $obj->getId();
                            $objDeliveryInvoice->next();
                        }
                        return $retorno;
                    },
                    'cc' => function ($objCc) {
                        $retorno = [];
                        if(!$objCc->count()){
                            return $retorno;
                        }
                        $objCc->first();
                        while ($obj = $objCc->current()){
                            $retorno[] = $obj->getCcCodigoid();
                            $objCc->next();
                        }
                        return $retorno;
                    },
                    'invoiceInformationLog' => function ($objInvoiceInformationLog) {
                        $retorno = [];
                        if(!$objInvoiceInformationLog->count()){
                            return $retorno;
                        }
                        $objInvoiceInformationLog->first();
                        while ($obj = $objInvoiceInformationLog->current()){
                            $retorno[] = [
                                'id' => $obj->getIdInvoiceInformationLog(),
                                'nf' => $obj->getInvoiceNumero(),
                                'status' => $obj->getStatus()
                            ];
                            $objInvoiceInformationLog->next();
                        }
                        return $retorno;
                    },
                    'invoiceItem' => function ($objInvoiceItem) {
                        $retorno = [];
                        if(!$objInvoiceItem->count()){
                            return $retorno;
                        }
                        $objInvoiceItem->first();
                        while ($obj = $objInvoiceItem->current()){
                            $retorno[] = $obj->getInvoiceRegistros();
                            $objInvoiceItem->next();
                        }
                        return $retorno;
                    },
                ],
            ];
            
            $objGetSetMethodNormalizer = new GetSetMethodNormalizer(null, null, null, null, null, $defaultContext);
            $objSerializer = new Serializer([$objGetSetMethodNormalizer]);
            return $objSerializer->normalize($objInvoice);
            
        } catch (NotFoundHttpException $e){
            throw $e;
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Retorna uma lista de pedidos.
     *
     * @access  public
     * @param   Request $objRequest
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getPedidos(Request $objRequest)
    {
        try {
            $objListing = new Listing($this->objEntityManagerCobranca, $this->objLogger);
            $arrayInvoice = $objListing->list($objRequest);
            if(!count($arrayInvoice)){
                throw new NotFoundHttpException("Not Found");
            }
            
            $defaultContext = [
                AbstractNormalizer::CALLBACKS => [
                    'dateRecord' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateFirst' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateLast' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateValit' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'deliveryInvoice' => function ($objDeliveryInvoice) {
                        $retorno = [];
                        if(!$objDeliveryInvoice->count()){
                            return $retorno;
                        }
                        $objDeliveryInvoice->first();
                        while ($obj = $objDeliveryInvoice->current()){
                            $retorno[] = $obj->getId();
                            $objDeliveryInvoice->next();
                        }
                        return $retorno;
                    },
                    'cc' => function ($objCc) {
                        $retorno = [];
                        if(!$objCc->count()){
                            return $retorno;
                        }
                        $objCc->first();
                        while ($obj = $objCc->current()){
                            $retorno[] = $obj->getCcCodigoid();
                            $objCc->next();
                        }
                        return $retorno;
                    },
                    'invoiceInformationLog' => function ($objInvoiceInformationLog) {
                        $retorno = [];
                        if(!$objInvoiceInformationLog->count()){
                            return $retorno;
                        }
                        $objInvoiceInformationLog->first();
                        while ($obj = $objInvoiceInformationLog->current()){
                            $retorno[] = [
                                'id' => $obj->getIdInvoiceInformationLog(),
                                'nf' => $obj->getInvoiceNumero(),
                                'status' => $obj->getStatus()
                            ];
                            $objInvoiceInformationLog->next();
                        }
                        return $retorno;
                    },
                    'invoiceItem' => function ($objInvoiceItem) {
                        $retorno = [];
                        if(!$objInvoiceItem->count()){
                            return $retorno;
                        }
                        $objInvoiceItem->first();
                        while ($obj = $objInvoiceItem->current()){
                            $retorno[] = $obj->getInvoiceRegistros();
                            $objInvoiceItem->next();
                        }
                        return $retorno;
                    },
                ],
            ];
            
            $objGetSetMethodNormalizer = new GetSetMethodNormalizer(null, null, null, null, null, $defaultContext);
            $objSerializer = new Serializer([$objGetSetMethodNormalizer]);
            return $objSerializer->normalize($arrayInvoice);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Retorna uma lista de pedidos com status faturado no salesforce.
     *
     * @access  public
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getStatusPedidoSalesforce()
    {
        try {
            $objListing = new Listing($this->objEntityManagerCobranca, $this->objLogger);
            $arrayInvoice = $objListing->getStatusPedidoSalesforce();
            if(!count($arrayInvoice)){
                throw new NotFoundHttpException("Not Found");
            }
            
            $defaultContext = [
                AbstractNormalizer::CALLBACKS => [
                    'dateRecord' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateFirst' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateLast' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'dateValit' => function ($dateTime) {
                        return $dateTime instanceof \DateTime ? $dateTime->format(\DateTime::ISO8601) : NULL;
                    },
                    'deliveryInvoice' => function ($objDeliveryInvoice) {
                        $retorno = [];
                        if(!$objDeliveryInvoice->count()){
                            return $retorno;
                        }
                        $objDeliveryInvoice->first();
                        while ($obj = $objDeliveryInvoice->current()){
                            $retorno[] = $obj->getId();
                            $objDeliveryInvoice->next();
                        }
                        return $retorno;
                    },
                    'cc' => function ($objCc) {
                        $retorno = [];
                        if(!$objCc->count()){
                            return $retorno;
                        }
                        $objCc->first();
                        while ($obj = $objCc->current()){
                            $retorno[] = $obj->getCcCodigoid();
                            $objCc->next();
                        }
                        return $retorno;
                    },
                    'invoiceInformationLog' => function ($objInvoiceInformationLog) {
                        $retorno = [];
                        if(!$objInvoiceInformationLog->count()){
                            return $retorno;
                        }
                        $objInvoiceInformationLog->first();
                        while ($obj = $objInvoiceInformationLog->current()){
                            $retorno[] = [
                                'id' => $obj->getIdInvoiceInformationLog(),
                                'nf' => $obj->getInvoiceNumero(),
                                'status' => $obj->getStatus()
                            ];
                            $objInvoiceInformationLog->next();
                        }
                        return $retorno;
                    },
                    'invoiceItem' => function ($objInvoiceItem) {
                        $retorno = [];
                        if(!$objInvoiceItem->count()){
                            return $retorno;
                        }
                        $objInvoiceItem->first();
                        while ($obj = $objInvoiceItem->current()){
                            $retorno[] = $obj->getInvoiceRegistros();
                            $objInvoiceItem->next();
                        }
                        return $retorno;
                    },
                ],
            ];
            
            $objGetSetMethodNormalizer = new GetSetMethodNormalizer(null, null, null, null, null, $defaultContext);
            $objSerializer = new Serializer([$objGetSetMethodNormalizer]);
            return $objSerializer->normalize($arrayInvoice);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * atualiza o campo status_pagamento_salesforce para true de todos os id's presentes em $pedidos.
     *
     * @access  public
     * @param   Request
     * @return  void
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function updateStatusPagamentoSalesforce(Request $objRequest)
    {
        try {
            $objListing = new Listing($this->objEntityManagerCobranca, $this->objLogger);
            $arrayInvoice = $objListing->list($objRequest);
            if(!count($arrayInvoice['data'])){
                throw new NotFoundHttpException("Not Found");
            }            
            reset($arrayInvoice['data']);
            $arrayNotas = $objRequest->attributes->get('notas');
            while ($objInvoice = current($arrayInvoice['data'])){
                if($objInvoice instanceof Invoice){
                    $objInvoice->setStatusPagamentoSalesforce(true);
                    $objInvoice->setNumeroNota($arrayNotas[$objInvoice->getIdInvoice()]);
                    $this->objEntityManagerCobranca->merge($objInvoice);
                }
                $this->objEntityManagerCobranca->flush();
                next($arrayInvoice['data']);
            }
            $this->objEntityManagerCobranca->flush();
        } catch (NotFoundHttpException $e){
            throw $e;
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

