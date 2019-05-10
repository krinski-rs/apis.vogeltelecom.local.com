<?php

namespace App\Tests\Controller\Cep;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CepControllerTest extends WebTestCase
{
    public function testSearchCep()
    {
        $client = static::createClient();
        $client->request('GET', '/cep/search/94440190');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testSearchCepNotFound()
    {
        $client = static::createClient();
        $client->request('GET', '/cep/search/99999999');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
    
    public function testSearchCepInvalido()
    {
        $client = static::createClient();
        $client->request('GET', '/cep/search/944401');
        $this->assertEquals(412, $client->getResponse()->getStatusCode());
    }
}
