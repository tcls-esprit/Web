<?php

namespace BaseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PaymentControllerTest extends WebTestCase
{
    public function testCharge()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/charge');
    }

}
