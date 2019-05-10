<?php

namespace App\Tests\Controller\Geolocation;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GeolocationControllerTest extends WebTestCase
{
    public function testGetLatLon()
    {
        $client = static::createClient();
        $client->request('GET', '/geo/latlon/rua%20lubisco%20112,%20viamão,%20rio%20asd%20fhalsdfjhdj%20do%20sul,%20brasil');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testGetAddress()
    {
        $client = static::createClient();
        $client->request('GET', '/geo/address/-30.085,-51.0463427');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
