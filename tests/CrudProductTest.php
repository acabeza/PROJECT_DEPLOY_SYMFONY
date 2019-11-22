<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;



class CrudProductTest extends WebTestCase
{
    private $index = "/";
    private $edit = "/product/1/edit";
    private $create = "/product/new";
    private $delete = "/product/1/delete";
    private $show = "/product/5"; 

    public function testIndex()
    {
        $client = static::createClient();
        //Entrada al indice
        $client->request('GET', $this->index);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testShow()
    {
        $client = static::createClient();
        $client-> request('GET', $this->show);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
