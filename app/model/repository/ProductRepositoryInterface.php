<?php

    Interface ProductRepositoryInterface {
        public function findAll(): array;
        public function findId($param): ?ProductEntity;
        public function addProductDb($product);
    }

?>