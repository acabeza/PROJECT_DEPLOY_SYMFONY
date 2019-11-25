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

    public function testIndexProduct()
    {
        $client = static::createClient();
        //<=====ENTRA EN EL INDICE==========>
        $client->request('GET', $this->index);
        print("<======Entrando en el Indice======>\n\n");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        print("<======Entrada con exito======>\n\n");
    }

    public function testShowUser()
    {
        //<=====MUESTRA UN USUARIO==========>
        $client = static::createClient();
        print("<========Entrado en mostrar un Usuario=====>\n\n");
        $crawler = $client-> request('GET', $this->index);
        print("<==========Buscando Link a la página de mostrar===========>\n\n");
        $link = $crawler->filter('a.showUsers')->last()->link();
        print("<==========Haciendo click en el enlace===========>\n\n");
        $crawler = $client->click($link);
        print("<=======Mostrando==========>\n\n");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        print("<======Fin de Mostrar un Usuario=======>\n\n");
    }

     public function testCreateUser()
       {
        //<=======CREA UN  USUARIO========>
        print("<==============Inicio de Cración============>\n\n");
          $client = static::createClient();
          $crawler = $client->request('GET', $this->index);
          print("<==========Buscando Link a la página de creación===========>\n\n");
          $link = $crawler->filter('a.createUsers')->last()->link();
          print("<==========Haciendo click en el enlace===========>\n\n");
          $crawler = $client->click($link);
          print("<=========Añadiendo datos en el formulario==========>\n\n");
          $form = $crawler->filter('form')->form();
          $form['users[name]'] = 'newName';
          $form['users[surname]'] = 'newSurname';
          $form['users[ref_product]'] = $crawler->filter('option')->first()->text();
          $form['users[city]'] = 'newCity';
          $form['users[cp]'] = '99999';
          $form['users[email]'] = 'newemail@gmail.com';
          print("<==========Creando=========>\n\n");
         $crawler = $client->submit($form);
         $crawler = $client->request('GET', $this->index);
         $message = $crawler->filter('td:contains("newName")');
         $this->assertEquals("newName", $message->text());
         print("<=====Creación realizada======>\n\n");
       }

      public function testEditUser()
      {
        //<========EDITA UN USUARIO=========>
        print("<==============Inicio de Actualización============>\n\n");
         $client = static::createClient();
         $crawler = $client->request('GET', $this->index);
         print("<==========Buscando Link a la página de actualización de usuario===========>\n\n");
         $link = $crawler->filter('a.editUsers')->last()->link();
         print("<==========Haciendo click en el enlace===========>\n\n");
         $crawler = $client->click($link);
         $form = $crawler->filter('form')->form();
         print("<=========Añadiendo datos en el formulario==========>\n\n");
         $form['users_edit[name]'] = 'newName2';
         $form['users_edit[surname]'] = 'newSurname2';
         $form['users_edit[city]'] = 'newCity2';
         $form['users_edit[cp]'] = '99988';
         $form['users_edit[email]'] = 'newemail@gmail.com2';
         print("<==========Editando=========>\n\n");
         $crawler = $client->submit($form);
         $crawler = $client->request('GET', $this->index);
         $message = $crawler->filter('td:contains("newName2")');
         $this->assertEquals("newName2", $message->text());
         print("<========Usuario actualizado==========>\n\n");
      }

       public function testDeleteUser(){
         //<==========ELIMINA UN USUARIO=====>
            $client = static::createClient();
            print("<==============Inicio de Eliminación============>\n\n");
           $crawler = $client->request('GET', $this->index);
           print("<==========Buscando Link a la página de eliminación de usuario===========>\n\n");
           $link = $crawler->filter('a.deleteUsers')->last()->link();
           $crawler = $client->click($link);
           print("<==========Eliminando Usuario===========>\n\n");
           $crawler = $client->request('GET', $this->index);
           $message = $crawler->filter('td:contains("newName2")');
           $this->assertIsNotString($message);
     }
}
