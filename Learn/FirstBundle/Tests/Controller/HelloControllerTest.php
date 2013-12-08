<?php

namespace Learn\FirstBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testTemplate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/template');
    }

    public function testHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/{name}');
    }

}
