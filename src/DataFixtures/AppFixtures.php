<?php
/**
 * Created by PhpStorm.
 * User: Evgeny
 * Date: 28.06.2018
 * Time: 0:39
 */

namespace App\DataFixtures;


use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product
                ->setName('product_' . $i)
                ->setPrice(10)
                ->setDescription('Test fixture product...')
            ;
            $manager->persist($product);
        }

        $manager->flush();
    }
}