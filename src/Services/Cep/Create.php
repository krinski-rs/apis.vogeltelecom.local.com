<?php
namespace App\Services\Cep;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\ConstraintViolationList;
use Doctrine\ORM\EntityManager;
use Monolog\Logger;
use App\Entity\Cep\LogLogradouro;
use App\Entity\Cep\LogBairro;
use App\Entity\Cep\LogLocalidade;

/**
 * Class Create
 *
 * @package     \App\Services
 * @subpackage  Cep
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class Create
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
     * @param   \Doctrine\ORM\EntityManager $objEntityManager
     * @param   \Monolog\Logger $objLogger
     */
    public function __construct(EntityManager $objEntityManager, Logger $objLogger)
    {
        $this->objEntityManager = $objEntityManager;
        $this->objLogger = $objLogger;
    }
    
    /**
     * Insere os dados do CEP na base de dados.
     * 
     * @access  public
     * @param   array $params
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  array
     */
    public function insert(array $params)
    {
        try {
            $this->validate($params);
            $objLogLocalidadeRepository = $this->objEntityManager->getRepository('App\Entity\Cep\LogLocalidade');
            $objLogLocalidade = $objLogLocalidadeRepository->findOneBy(['ufeSg' => $params['uf'], 'locNo' => $params['localidade'], 'locInTipoLocalidade' => 'M']);
            if(!($objLogLocalidade instanceof LogLocalidade)){
                throw new \RuntimeException('Localidade não encontrada.', Response::HTTP_NOT_FOUND);
            }
            
            $objLogLogBairroRepository = $this->objEntityManager->getRepository('App\Entity\Cep\LogBairro');
            $objLogBairro = $objLogLogBairroRepository->findOneBy(['ufeSg' => $params['uf'], 'baiNo' => $params['bairro'], 'logLocalidade' => $objLogLocalidade]);
            if(!($objLogBairro instanceof LogBairro)){
                $objLogBairro = new LogBairro();
                $objLogBairro->setBaiNo(trim($params['bairro']));
                $objLogBairro->setBaiNoAbrev(trim($params['bairro']));
                $objLogBairro->setLogLocalidade($objLogLocalidade);
                $objLogBairro->setUfeSg($params['uf']);
            }
            $objLogBairro = $objLogBairro;
            $objLogLogradouro = new LogLogradouro();
            $objLogLogradouro->setCep($params['cep']);
            $objLogLogradouro->setIndGru('N');
            $objLogLogradouro->setIndUop('N');
            $objLogLogradouro->setLogBairro($objLogBairro);
            $objLogLogradouro->setLogComplemento();
            $objLogLogradouro->setLogLocalidade($objLogLocalidade);
            $objLogLogradouro->setLogNo(trim($params['logNo']));
            $objLogLogradouro->setLogNome(trim($params['logradouro']));
            $objLogLogradouro->setLogNoSemAcento($this->removeAcentos(trim($params['logNo'])));
            $objLogLogradouro->setLogStatusTipoLog('S');
            $objLogLogradouro->setLogTipoLogradouro($params['tipoLogradouro']);
            $objLogLogradouro->setUfeSg($params['uf']);
            $objLogBairro->addLogLogradouro($objLogLogradouro);
            $objLogLocalidade->addLogBairro($objLogBairro);
            
            
            
            $this->objEntityManager->merge($objLogLocalidade);
            $this->objEntityManager->flush();
            return [
                'cep' => $objLogLogradouro->getCep(),
                'tipoLogradouro' => $objLogLogradouro->getLogTipoLogradouro(),
                'logradouro' => $objLogLogradouro->getLogNome(),
                'bairro' => $objLogLogradouro->getLogBairro()->getBaiNo(),
                'localidade' => $objLogLogradouro->getLogLocalidade()->getLocNo(),
                'uf' => $objLogLogradouro->getUfeSg()
            ];
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Valida os dado que serão inseridos na base de dados.
     * 
     * @access  public
     * @param   array $params
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  void
     */
    public function validate(array $params)
    {
        try {
            $objNotNull = new Assert\NotNull();
            $objNotNull->message = 'Esse valor não deve ser nulo.';
            $objNotBlank = new Assert\NotBlank();
            $objNotBlank->message = 'Esse valor não deve estar em branco.';
            $objLength = new Assert\Length([
                'max' => 8,
                'maxMessage' => "Este valor é muito longo. Deve ter {{ limit }} caracteres ou menos."
            ]);
                        
            $objValidation = Validation::createValidator();
            $objCollection = new Assert\Collection(
                [
                    'fields' => [
                        'localidade' => new Assert\Required(
                            [
                                $objNotNull,
                                $objNotBlank
                            ]
                        ),
                        'bairro' => new Assert\Required(
                            [
                                $objNotNull,
                                $objNotBlank
                            ]
                        ),
                        'logradouro' => new Assert\Required(
                            [
                                $objNotNull,
                                $objNotBlank
                            ]
                        ),
                        'tipoLogradouro' => new Assert\Required(
                            [
                                $objNotNull,
                                $objNotBlank
                            ]
                        ),
                        'cep' => new Assert\Required(
                            [
                                $objNotNull,
                                $objNotBlank,
                                $objLength
                            ]
                        ),
                        'uf' => new Assert\Required(
                            [
                                $objNotNull,
                                $objNotBlank
                            ]
                        )
                    ]
                ]
                );
            $objConstraintViolationList = $objValidation->validate($params, $objCollection);
            $this->getErrors($objConstraintViolationList);
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Verifica se existe algum erro e formata a mensagem se existir e lança uma exception.
     * 
     * @access  private
     * @param   \Symfony\Component\Validator\ConstraintViolationList $objConstraintViolationList
     * @throws  \RuntimeException
     * @return  void
     */
    private function getErrors(ConstraintViolationList $objConstraintViolationList){
        if($objConstraintViolationList->count()){
            $objArrayIterator = $objConstraintViolationList->getIterator();
            $objArrayIterator->rewind();
            $mensagem = '';
            while($objArrayIterator->valid()){
                if($objArrayIterator->key()){
                    $mensagem.= "\n";
                }
                $mensagem.= $objArrayIterator->current()->getPropertyPath().': '.$objArrayIterator->current()->getMessage();
                $objArrayIterator->next();
            }
            throw new \RuntimeException($mensagem, Response::HTTP_PRECONDITION_FAILED);
        }
    }
    
    /**
     * Remove os acentos de uma string.
     * 
     * @param string $string
     * @return string
     */
    private function removeAcentos(string $string){
        return preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $string ) );
    }
}

