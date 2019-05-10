<?php

namespace App\Tests\Services\Geolocation;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Services\ViaCep;
use App\Services\Geolocation\Address;

class AddressTest extends WebTestCase
{
    public function testAddressToLatLon()
    {
        self::bootKernel();
        $container = self::$container;
        $objAddress = new Address($container->get('logger'), $container->getParameter('geolocation'));
        $latLon = $objAddress->addressToLatLon("rua lubisco 112, viamão, rio grande do sul, brasil");
        $this->assertInternalType('array', $latLon);
        $this->assertCount(2, $latLon);
        $this->assertArrayHasKey('latitude', $latLon);
        $this->assertArrayHasKey('longitude', $latLon);
    }
    
    public function testLatLonToAddress()
    {
        self::bootKernel();
        $container = self::$container;
        $objAddress = new Address($container->get('logger'), $container->getParameter('geolocation'));
        $address = $objAddress->latLonToAddress(-29.982719, -51.187956);
        $this->assertInternalType('array', $address);
        $this->assertGreaterThanOrEqual(6, count($address));
        $this->assertLessThanOrEqual(7, count($address));
        $this->assertArrayHasKey('logradouro', $address);
        $this->assertArrayHasKey('bairro', $address);
        $this->assertArrayHasKey('localidade', $address);
        $this->assertArrayHasKey('estado', $address);
        $this->assertArrayHasKey('pais', $address);
        $this->assertArrayHasKey('cep', $address);
        if(count($address) == 7){
            $this->assertArrayHasKey('endereco', $address);
        }
    }
}










