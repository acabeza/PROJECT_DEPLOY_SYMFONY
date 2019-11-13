<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Controller\ProductController;

class TestControllerProductTest extends TestCase
{
    public function testadd()
    {
        $product = new ProductController();

        $product->new('POST', '/new');

        $this->assertEquals(200, $product->getResponse()->getStatusCode());
    }
}
