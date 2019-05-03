<?php

namespace App\Repository\Cep;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Cep\LogLocalidade;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Parameter;

class LogLocalidadeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LogLocalidade::class);
    }
    
    /**
     * @param int $cep
     * @return array
     */
    public function search(int $cep): array
    {
        try {
            $objQueryBuilder = $this->createQueryBuilder('logLoc');
            $objExpr = $objQueryBuilder->expr();
            $objOrx = $objExpr->orX();
            $objOrx->add($objExpr->like('logLoc.cep', ':cep'))
                    ->add($objExpr->like('logLog.cep', ':cep'))
                    ->add($objExpr->like('logGra.cep', ':cep'));
            $fields = [
                'logLog.logTipoLogradouro',
                'logLog.logNo',
                'logBai.baiNo',
                'logLoc.locNo',
                'LogUf.ufeNo',
                'logLog.cep AS cepLog',
                'logLoc.cep AS cepLoc',
                'logGra.cep AS cepGra'
            ];
            $objQueryBuilder
                            ->select(implode(",", $fields))
                            ->leftJoin('logLoc.ufeSg', 'LogUf')
                            ->leftJoin('logLoc.logBairro', 'logBai')
                            ->leftJoin('logBai.logLogradouro', 'logLog')
                            ->leftJoin('logLoc.logGrandeUsuario', 'logGra', 'WITH', 'logGra.logLogradouro = logLog.logNuSequencial AND logGra.logBairro = logBai.baiNuSequencial')
                            ->where($objOrx);
            $objQueryBuilder->setParameters(new ArrayCollection([new Parameter('cep', $cep)]));
//             echo  '<pre>';
//             \Doctrine\Common\Util\Debug::dump($objQueryBuilder->getQuery()->getSQL(), 2);
//             exit();
            
            return $objQueryBuilder->getQuery()->execute();
            
        } catch (\Exception $e) {
            throw $e;
        }
    }
}