<?php

namespace Invoice\InvoiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContractorControllerTest extends WebTestCase
{
    public function testContractorlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contractorList');
    }

    public function testContractorshow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contractorShow');
    }

    public function testContractorform()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contractorForm');
    }

}
