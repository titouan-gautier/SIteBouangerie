<?php

    class Home {

        private ProductRepositoryInterface $repository;

        public function __construct(){
            $this-> repository = new DbProductRepository();
            
        }

        function index() {
            
            $data = $this->repository->findAll();
            require ("view/view.php");
        }

    }


?>  