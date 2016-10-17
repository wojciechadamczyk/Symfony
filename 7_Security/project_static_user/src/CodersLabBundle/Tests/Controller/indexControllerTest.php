<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class indexControllerTest extends WebTestCase
{
    public function testAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'all');
    }

    public function testRestricted()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/restricted');
    }

}
