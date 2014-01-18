<?php

namespace Acme\HelloBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Nate');

        $this->assertTrue($crawler->filter('html:contains("Hello Nate")')->count() > 0);
    }
}
