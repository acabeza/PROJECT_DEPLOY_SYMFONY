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

    public function testShowUser()
    {
        //<=====
        $client = static::createClient();
        $client-> request('GET', $this->show);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    // public function testCreateUser()
    //   {
    //      $client = static::createClient();
    //      $crawler = $client->request('GET', $this->index);
    //      $link = $crawler->filter('a.createUsers')->last()->link();
    //      $crawler = $client->click($link);
    //      $form = $crawler->filter('form.customForm')->form();
    //      $form['users[name]'] = 'newName';
    //      $form['users[surname]'] = 'newSurname';
    //      $form['users[ref_product]'] = '#1111';
    //      //$crawler->filter('option')->first()->text();
    //      $form['users[city]'] = 'newCity';
    //      $form['users[cp]'] = '99999';
    //      $form['users[email]'] = 'newemail@gmail.com';
    //     $crawler = $client->submit($form);
    //     var_dump($form); 
    //     var_dump($crawler);
    //   }

      public function testEditUser()
      {
         $client = static::createClient();
         $crawler = $client->request('GET', $this->index);
         $link = $crawler->filter('a.editUsers')->last()->link();
         $crawler = $client->click($link);
         $form = $crawler->filter('form')->form();
         var_dump($form['users_edit[name]']);
        //  $form['users_edit[name]'] = 'newName2';
        //  $form['users_edit[surname]'] = 'newSurname2';
        //  $form['users_edit[city]'] = 'newCity2';
        //  $form['users_edit[cp]'] = 99988;
        //  $form['users_edit[email]'] = 'newemail@gmail.com2';
         $crawler = $client->submit($form);
      }
}
