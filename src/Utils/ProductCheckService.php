<?php
/**
 * Created by PhpStorm.
 * User: Evgeny
 * Date: 28.06.2018
 * Time: 1:25
 */

namespace App\Utils;


use App\Entity\Product;

class ProductCheckService
{

    /**
     * @param Product $product
     * @return bool
     */
    public function check(Product $product)
    {
        return $product->getPrice() <= 10;
    }
}