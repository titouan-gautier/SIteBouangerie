<?php

    class MemoryProductRepository implements ProductRepositoryInterface {

        function findAll() :array {
            $products[] = new ProductEntity();

            $products[0]->setId(1);
            $products[0]->setName('Pomme');
            $products[0]->setPrice(5.0);
            $products[0]->setQuantity(20);

            return $products;
        }

    }

?>