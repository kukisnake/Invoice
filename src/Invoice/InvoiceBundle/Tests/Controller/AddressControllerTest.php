<?php

namespace Invoice\InvoiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddressControllerTest extends WebTestCase
{
    public function testAddresslist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addressList');
    }

    public function testAddressshow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addressShow');
    }

    public function testAddressform()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addressForm');
    }

}
