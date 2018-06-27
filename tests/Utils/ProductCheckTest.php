<?php
/**
 * Created by PhpStorm.
 * User: Evgeny
 * Date: 28.06.2018
 * Time: 1:30
 */

namespace App\Tests\Utils;


use App\Entity\Product;
use App\Utils\ProductCheckService;
use Doctrine\Common\Persistence\ObjectRepository;
use PHPUnit\Framework\TestCase;

class ProductCheckTest extends TestCase
{
    public function test()
    {
        $product = new Product();
        $product->setPrice(10);
        $prodChecker = new ProductCheckService();
        $this->assertTrue($prodChecker->check($product));
    }
}