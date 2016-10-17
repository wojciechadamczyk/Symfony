<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookControllerTest extends WebTestCase
{
    public function testNewbook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newBook');
    }

}
