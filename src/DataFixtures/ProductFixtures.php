<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;
use Symfony\Component\Validator\Constraints\DateTime;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for($i = 1; $i <= 15; $i++) {  

            $product = new Product();

            $product->setName("product name-$i")
                    ->setPrice(mt_rand(100, 3000))
                    ->setDescription("this is product description-n-$i")
                    ->setImg("http://placehold.it/1000:300")
                    ->setCreatedAt(new \DateTime())
                    ->setUpdatedAt(new \DateTime("now"))
                ;
            $manager->persist($product);
        }

        $manager->flush();
    }
}
