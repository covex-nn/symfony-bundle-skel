<?php

namespace Tests\Controller;

use Apnet\FunctionalTestBundle\Framework\WebTestCase;

/**
 * Class DefaultControllerTest
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Test access to index page
     *
     * @return null
     */
    public function testLegacyIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
