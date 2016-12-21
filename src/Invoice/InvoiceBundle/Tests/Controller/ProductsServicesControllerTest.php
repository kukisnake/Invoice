<?php

namespace Invoice\InvoiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductsServicesControllerTest extends WebTestCase
{
    public function testShowps()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showPS');
    }

    public function testAddps()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addPS');
    }

    public function testEditps()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editPS');
    }

    public function testDeleteps()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletePS');
    }

}
