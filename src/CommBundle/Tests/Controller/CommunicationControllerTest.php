<?php

namespace CommBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommunicationControllerTest extends WebTestCase
{
    public function testReadreclamation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/readReclamation');
    }

    public function testAddreclmation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addReclmation');
    }

    public function testUpdatereclamation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateReclamation');
    }

    public function testDeletereclamation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteReclamation');
    }

}
