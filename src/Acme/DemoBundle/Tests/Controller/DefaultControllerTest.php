<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testRoutingIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("GPS Products | Home")')->count() > 0);
    }

    public function testRoutingAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');

        $this->assertTrue($crawler->filter('html:contains("About GPS Products")')->count() > 0);
    }

    public function testRoutingProducts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/products');

        $this->assertTrue($crawler->filter('html:contains("GPS Products | What We Sell")')->count() > 0);
    }

    public function testRoutingContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');

        $this->assertTrue($crawler->filter('html:contains("Contact GPS Products")')->count() > 0);
    }

    // Note: !!! Nee to add products
}
