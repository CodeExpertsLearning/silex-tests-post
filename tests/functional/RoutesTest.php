<?php

use Silex\WebTestCase;

class RoutesTest extends WebTestCase
{
    public function createApplication()
    {
        return require ROOT_DIR . '/app.php';
    }

    public function testIndexRoute()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertCount(1, $crawler->filter('h1:contains("Testando")'));
    }

    public function testNewsRouteWithDynamicParameter()
    {
        $slug = 'noticia-teste';

        $client = $this->createClient();
        $crawler = $client->request('GET', '/noticia/' . $slug);

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertCount(1, $crawler->filter('h1:contains("Noticia: ' . $slug . '")'));
    }
}