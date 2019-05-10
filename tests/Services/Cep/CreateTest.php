<?php

namespace App\Tests\Services\Cep;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Services\Cep\Create;

class CreateTest extends WebTestCase
{
    public function testInsert()
    {
        self::bootKernel();
        $container = self::$container;
        $objManager = $container->get('doctrine')->getManager('default');
        $objCreate = new Create($objManager, $container->get('logger'));
        
        
        $cep = $objCreate->insert([]);
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

    public function testInsertInvalido()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(412);
        $this->expectExceptionMessage("CEP inválido.");
        
        self::bootKernel();
        $container = self::$container;
        $objManager = $container->get('doctrine')->getManager('default');
        $objCreate = new Create($objManager, $container->get('logger'));
        $cep = $objCreate->insert([]);
    }
}










