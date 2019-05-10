<?php

namespace App\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Services\ViaCep;

class CepTest extends WebTestCase
{    
    public function testSearch()
    {
        self::bootKernel();
        $container = self::$container;
        $objCep = $container->get('cep');
        $cep = $objCep->search('94440190');
        $this->assertInternalType('array', $cep);
        $this->assertEquals(1, count($cep));
        $this->assertArrayHasKey(0, $cep);
        $this->assertEquals(6, count($cep[0]));
        $this->assertArrayHasKey('logTipoLogradouro', $cep[0]);
        $this->assertArrayHasKey('logradouro', $cep[0]);
        $this->assertArrayHasKey('bairro', $cep[0]);
        $this->assertArrayHasKey('localidade', $cep[0]);
        $this->assertArrayHasKey('estado', $cep[0]);
        $this->assertArrayHasKey('cep', $cep[0]);
    }
    
    public function testSearchNotFound()
    {        
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage("CEP não encontrado.");
        
        self::bootKernel();
        $container = self::$container;
        $objCep = $container->get('cep');
        $cep = $objCep->search('99999999');
    }
    
    public function testSearchInvalido()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(412);
        $this->expectExceptionMessage("CEP inválido.");
        
        self::bootKernel();
        $container = self::$container;
        $objCep = $container->get('cep');
        $cep = $objCep->search('944401');
    }
}










