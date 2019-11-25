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


    public function testIndexProduct()
    {
        //<======ENTRA EN EL INDICE=====>
        $client = static::createClient();
        print("<======Entrando en el Indice======>\n\n");
        $client->request('GET', $this->index);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        print("<======Entrada con exito======>\n\n");
    }

    public function testShowProduct()
    {
        //<==========MUESTRA UN PRODUCTO========>
            $client = static::createClient();
            print("<========Entrado en Mostrar Producto=====>\n\n");
            $crawler = $client-> request('GET', $this->index);
            print("<==========Buscando Link a la página de mostrar===========>\n\n");
            $link = $crawler->filter('a.showProduct')->last()->link();
            print("<==========Haciendo click en el enlace===========>\n\n");
            $crawler = $client->click($link);
            print("<=======Mostrando==========>\n\n");
            $this->assertEquals(200, $client->getResponse()->getStatusCode());
            print("<======Fin de Mostrar Producto=======>\n\n");
    }

      public function testCreateProduct()
      {
          //<=========CREA UN PRODUCTO======>
           print("<==============Inicio de Cración============>\n\n");
           $client = static::createClient();
           $crawler = $client->request('GET', $this->index);
           print("<==========Buscando Link a la página de creación===========>\n\n");
           $link = $crawler->filter('a')->last()->link();
           print("<==========Haciendo click en el enlace===========>\n\n");
           $crawler = $client->click($link);
           print("<=========Añadiendo datos en el formulario==========>\n\n");
           $form = $crawler->filter('form')->form();
           $form['product[nameProduct]'] = 'newProduct';
           $form['product[ref_product]'] = '#1111';
           print("<==========Creando=========>\n\n");
           $crawler = $client->submit($form);
           $crawler = $client->request('GET', $this->index);
           $message = $crawler->filter('td:contains("newProduct")');
           $this->assertEquals("newProduct", $message->text());
           print("<=====Creación realizada======>\n\n");
      }

     public function testEditProduct()
     {
         //<==========EDITA UN PRODUCTO=====>
         print("<==============Inicio de Actualización============>\n\n");
         $client = static::createClient();
         $crawler = $client->request('GET', $this->index);
         print("<==========Buscando Link a la página de actualización de producto===========>\n\n");
         $link = $crawler->filter('a.editProduct')->last()->link();
         print("<==========Haciendo click en el enlace===========>\n\n");
         $crawler = $client->click($link);
         $form = $crawler->filter('form')->form();
         print("<=========Añadiendo datos en el formulario==========>\n\n");
         $form['product_edit[nameProduct]'] = 'PepeJose';
         print("<==========Editando=========>\n\n");
         $crawler = $client->submit($form);
         $crawler = $client->request('GET', $this->index);
         $message = $crawler->filter('td:contains("PepeJose")');
         $this->assertEquals("PepeJose", $message->text());
         print("<========Producto actualizado==========>\n\n");
     }

     public function testDeleteProduct(){
         //<==========ELIMINA UN PRODUCTO=====>
            $client = static::createClient();
            print("<==============Inicio de Eliminación============>\n\n");
            $crawler = $client->request('GET', $this->index);
            print("<==========Buscando Link a la página de eliminación de producto===========>\n\n");
            $link = $crawler->filter('a.deleteProduct')->last()->link();
            $crawler = $client->click($link);
            print("<==========Eliminando Producto===========>\n\n");
            $crawler = $client->request('GET', $this->index);
            $message = $crawler->filter('td:contains("PepeJose")');
            $this->assertIsNotString($message);
            print("<==========Producto Eliminado=========>\n\n");
     }
    
}
