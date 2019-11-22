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

    //  public function testCreate()
    //  {
    //      //<=========CREA UN PRODUCTO======>
    //       $client = static::createClient();
    //       $crawler = $client->request('GET', $this->index);
    //       $link = $crawler->filter('a')->last()->link();
    //       $crawler = $client->click($link);
    //       $form = $crawler->filter('form')->form();
    //       $form['product[nameProduct]'] = 'newProduct';
    //       $form['product[ref_product]'] = '#1111';
    //       $crawler = $client->submit($form);
    //  }

    // public function testEdit()
    // {
    //     //<==========EDITA UN PRODUCTO=====>
    //     $client = static::createClient();
    //     $crawler = $client->request('GET', $this->index);
    //     $link = $crawler->filter('a.editProduct')->last()->link();
    //     $crawler = $client->click($link);
    //     $form = $crawler->filter('form')->form();
    //     $form['product_edit[nameProduct]'] = 'PepeJose';
    //     $crawler = $client->submit($form);
    // }

    // public function testDelete(){
    //     //<==========ELIMINA UN PRODUCTO=====>
    //        $client = static::createClient();
    //        $crawler = $client->request('GET', $this->index);
    //        $link = $crawler->filter('a.deleteProduct')->last()->link();
    //        $crawler = $client->click($link);
    // }
    
}
