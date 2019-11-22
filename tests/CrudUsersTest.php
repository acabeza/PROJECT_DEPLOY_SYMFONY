<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CrudUsersTest extends WebTestCase
{
    private $index = "/";
    private $edit = "/users/1/edit";
    private $create = "/users/new";
    private $delete = "/users/1/delete";
    private $show = "/users/5";

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

    public function testCreate()
      {
         $client = static::createClient();
         $crawler = $client->request('GET', $this->index);
         $link = $crawler->filter('a.createUsers')->last()->link();
         $crawler = $client->click($link);
         $form = $crawler->filter('form.customForm')->form();
         $form['users[name]'] = 'Menganito';
         $form['users[surname]'] = 'Mileniars DragonHearth';
         $form['users[ref_product]'] = $crawler->filter('option')->first()->text();
         $form['users[city]'] = 'Sevilla';
         $form['users[cp]'] = '42223';
         $form['users[email]'] = 'menganito@gmail.com';
         $crawler = $client->submit($form);
         //var_dump($crawler);
      }
}
