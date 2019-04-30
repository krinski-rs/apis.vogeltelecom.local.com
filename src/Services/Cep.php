<?php
namespace App\Services;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Request;
// use App\Service\PontoVenda\Create;
// use App\Service\PontoVenda\Listing;
use Monolog\Logger;
use App\Services\Cep\Listing;
// use App\Service\PontoVenda\View;
// use App\Entity\Nutri\PontoVenda;

class Cep
{
    private $objEntityManager   = NULL;
    private $objLogger          = NULL;
    
    public function __construct(Registry $objRegistry, Logger $objLogger)
    {
        $this->objEntityManager = $objRegistry->getManager('cep');
        $this->objLogger = $objLogger;
    }
    
    public function get(int $cep)
    {
        try {
            $objListing = new Listing($this->objEntityManager, $this->objLogger);
            return $objListing->get($cep);
//             $objPontoVenda = $objPdvsPdvView->get($idPdv);
//             if($objPontoVenda instanceof PontoVenda){
//                 return [
//                     'id' => $objPontoVenda->getId(),
//                     'nome' => $objPontoVenda->getNome(),
//                     'ativo' => $objPontoVenda->getAtivo(),
//                     'removido' => $objPontoVenda->getRemovido(),
//                     'dataCadastro' => ($objPontoVenda->getDataCadastro()?$objPontoVenda->getDataCadastro()->format(\DateTime::RFC3339):NULL)
//                 ];
//             }
            return $objListing;
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    public function search(int $cep)
    {
        try {
            $objListing = new Listing($this->objEntityManager, $this->objLogger);
            return $objListing->search($cep);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

