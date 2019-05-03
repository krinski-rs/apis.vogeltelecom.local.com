<?php
namespace App\Services\Cep;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use App\Entity\Cep\LogLocalidade;
use Monolog\Logger;

class Listing
{
    private $objEntityManager = NULL;
    private $objLogger = NULL;
    
    public function __construct(EntityManager $objEntityManager, Logger $objLogger)
    {
        $this->objEntityManager = $objEntityManager;
        $this->objLogger = $objLogger;
    }
    
    public function get(int $cep)
    {
        try {
            $objRepositoryLogLocalidade = $this->objEntityManager->getRepository('App\Entity\Cep\LogLocalidade');
            $objLogLocalidade = $objRepositoryLogLocalidade->findOneBy(['cep' => $cep]);
            if(!($objLogLocalidade instanceof LogLocalidade)){
                return [];
            }
            return [
                'cep' => $objLogLocalidade->getCep()
            ];
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    public function search(int $cep)
    {
        try {
            if(strlen($cep) != 8){
                throw new \RuntimeException("Quantidade de caracteres inválida.", 412);
            }
            $objRepositoryLogLocalidade = $this->objEntityManager->getRepository('\App\Entity\Cep\LogLocalidade');
            
            $objLogLocalidade = $objRepositoryLogLocalidade->search($cep);
            
//             if(!($objLogLocalidade instanceof LogLocalidade)){
//                 return [];
//             }
            return $objLogLocalidade;
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

