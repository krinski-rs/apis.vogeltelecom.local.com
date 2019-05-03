<?php
namespace App\Controller\Cep;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Services\Cep;
// use Symfony\Component\Serializer\Serializer;
// use Symfony\Component\Serializer\Encoder\XmlEncoder;
// use Symfony\Component\Serializer\Encoder\JsonEncoder;
// use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CepController extends AbstractController
{    
    private $objCep = NULL;
    
    public function __construct(Cep $objCep){
        $this->objCep = $objCep;
    }
    
    public function getCep(int $cep)
    {
        try {
            if(!$this->objCep instanceof Cep){
                return new JsonResponse(['message'=> 'Class "App\Services\Cep" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            
            $cep = $this->objCep->get($cep);
            return new JsonResponse($cep, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_PRECONDITION_FAILED);
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function searchCep(int $cep)
    {
        try {
            if(!$this->objCep instanceof Cep){
                return new JsonResponse(['message'=> 'Class "App\Services\Cep" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            
            $cep = $this->objCep->search($cep);
            return new JsonResponse($cep, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_PRECONDITION_FAILED);
        } catch (\Exception $e) {
            \Doctrine\Common\Util\Debug::dump($e);
            exit();
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
//     public function getPdvs(Request $objRequest)
//     {
//         try {
//             if(!$this->objPdv instanceof Pdv){
//                 return new JsonResponse(['message'=> 'Class "App\Service\Pdv not found."'], Response::HTTP_INTERNAL_SERVER_ERROR);
//             }
            
//             $arrayPontoVenda = $this->objPdv->list($objRequest);
//             $encoders = array(new XmlEncoder(), new JsonEncoder());
            
//             $objObjectNormalizer = new ObjectNormalizer();
//             $objObjectNormalizer->setCircularReferenceHandler(function (PontoVenda $objPontoVenda) {
//                 return $objPontoVenda->getId();
//             });
            
//             $callbackDateTime = function ($dateTime) {
//                 return $dateTime instanceof \DateTime
//                 ? $dateTime->format(\DateTime::ISO8601)
//                 : '';
//             };
//             $objObjectNormalizer->setCallbacks(array('dataCadastro' => $callbackDateTime));
//             $objObjectNormalizer->setCircularReferenceLimit(1);
//             $normalizers = array($objObjectNormalizer);
            
            
//             $objSerializer = new Serializer($normalizers, $encoders);
//             return new JsonResponse($objSerializer->normalize($arrayPontoVenda, 'json'), Response::HTTP_OK);
// //             return new JsonResponse([1231, 456465], Response::HTTP_OK);
//         } catch (\RuntimeException $e) {
//             return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_PRECONDITION_FAILED);
//         } catch (\Exception $e) {
//             return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
//         }
//     }
    
//     public function deletePdv(int $idPdv)
//     {
//         return new JsonResponse(['id'=>['deletePdv']], Response::HTTP_OK);
//     }
    
//     public function putPdv(int $idPdv)
//     {
//         return new JsonResponse(['id'=>['putPdv']], Response::HTTP_OK);
//     }
    
//     public function patchPdv(int $idPdv)
//     {
//         return new JsonResponse(['id'=>['patchPdv']], Response::HTTP_OK);
//     }
    
}

