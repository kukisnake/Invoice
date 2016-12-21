<?php

namespace Invoice\InvoiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SellerControllerTest extends WebTestCase
{
    public function testSellerlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sellerList');
    }

    public function testSellershow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sellerShow/{id}');
    }

    public function testSellerform()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sellerForm/{id}');
    }

}
