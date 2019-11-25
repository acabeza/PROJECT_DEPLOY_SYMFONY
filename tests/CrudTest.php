<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\tests\CrudProductTest;
use App\tests\CrudUsersTest;



class CrudTest extends WebTestCase
{
    

    public function testAll()
    {
        $users = new CrudUsersTest();
        $products = new CrudProductTest();

        $products->testIndexProduct();
        $products->testCreateProduct();
        $users->testIndexProduct();
        $users->testCreateUser();
        $products->testShowProduct();
        $users->testShowUser();
        $products->testEditProduct();
        $users->TestEditUser();
        $users->testDeleteUser();
        $products->testDeleteProduct();
    }
}
