<?php

namespace App\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ViaCepTest extends WebTestCase
{
    public function testCepValido()
    {
        self::bootKernel();
        $container = self::$container;
        $objViaCep = $container->get('viacep');
//         $container = self::$container;
        //viacep
//         $objLogger = new \Monolog\Logger("Teste");
//         $objViaCep = new ViaCep($objLogger);
        $cep = $objViaCep->search("94440190");
        $this->assertInternalType('array', $cep);
        $this->assertCount(9, $cep);
    }
    
    public function testCepNaoExiste()
    {
        self::bootKernel();
        $container = self::$container;
        $objViaCep = $container->get('viacep');
        $cep = $objViaCep->search("99999999");
        $this->assertInternalType('array', $cep);
        $this->assertArrayHasKey('erro', $cep);
    }
    
    public function testCepInvalido()
    {
        self::bootKernel();
        $container = self::$container;
        $objViaCep = $container->get('viacep');
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(412);
        $this->expectExceptionMessage("CEP inválido");
        $objViaCep->search("999999");
    }
}










