<?php

    class Product {

        private ProductRepositoryInterface $display;

        public function __construct(){
            $this-> display = new DbProductRepository();
            $this-> add = new DbProductRepository();
            $this-> modify = new DbProductRepository();
            $this-> modifyProduct = new DbProductRepository();
            $this-> delete = new DbProductRepository();
            
        }

        function display($param) {

            $data = $this->display->findId($param[0]);

            if ($data == null) {
                require('view/displayProductNo.php');
            } else {
                require('view/displayProduct.php');
            }

            
        }

        function add() {
            require('view/fromAdd.php');
            
        }

        function addProduct() {
            $product = new ProductEntity;

            $product->setId($_POST['id']);
            $product->setName($_POST['name']);
            $product->setPrice($_POST['price']);
            $product->setQuantity($_POST['quantity']);

            $data = $this->add->addProductDb($product);

            require('view/displayProduct.php');
        }

        function update($id) {

            $product = $this->modify->findId($id[0]);

            require('view/modifyProduct.php');
        }

        function updateProduct() {
            $product1 = new ProductEntity;

            $product1->setId($_POST['id']);
            $product1->setName($_POST['name']);
            $product1->setPrice($_POST['price']);
            $product1->setQuantity($_POST['quantity']);

            $data = $this->modifyProduct->modifyProduct($product1);

            require('view/displayProduct.php');

        }

        function delete($id) {
            
            $this->delete->deleteProduct($id[0]);

            require('view/deleteView.php');
        }



    }


?>  