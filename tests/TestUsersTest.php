<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Users;

class TestUsersTest extends TestCase
{
    public function testAdd()
    {
        $users = new Users();
        $users->setName("Manolo");
        $result = $users->getName();
        $this->assertEquals("Manolo",$result);

        $users->setEmail("acabeza@gmail.com");
        $result = $users->getEmail();
        $this->assertEquals("acabeza@gmail.com",$result);

        $users->setCP(41013);
        $result = $users->getCP();
        $this->assertEquals(41013,$result);
    }
}
