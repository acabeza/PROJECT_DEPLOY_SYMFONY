<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CrudUsersTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEqueals(200, $client->getResponse()->getStatusCode());
    }
}
