<?php

    class DbProductRepository implements ProductRepositoryInterface {

        private $connexion;

        public function __construct()
        {
            $dsn = "sqlite:".CFG["db"]["host"].CFG["db"]["database"]; //Le chemain de connexion
            $this->connexion = SPDO::getInstance($dsn,CFG["db"]["login"],CFG["db"]["password"],CFG["db"]["options"],CFG["db"]["exec"])
                ->getConnexion(); //obtention de la connexion avec un singleton
        }
    
        public function findAll(): array //renvoie un tableau de produit
        {
            $statement = $this->connexion->prepare("SELECT * FROM product");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, "ProductEntity");
        }

        public function findId($param) : ?ProductEntity
        {
            $id = intval($param);
            
            $display = $this->connexion->prepare("SELECT * FROM product WHERE id = :id");
            $display->bindParam('id',$id);
            $display->execute();
            $data = $display->fetch(PDO::FETCH_ASSOC);

            if ($data != false) {
                $p = new ProductEntity;
                $p -> setId($data["id"]);
                $p -> setName($data["name"]);
                $p -> setPrice($data["price"]);
                $p -> setQuantity($data["quantity"]);

                return $p;
            } else {
                return null;
            }

            

        }

        public function addProductDb($product) : ?ProductEntity
        {
            

            $id = $product->getId();
            $name = $product->getName();
            $price = $product->getPrice();
            $quantity = $product->getQuantity();
            

            $sql = "INSERT INTO product (id, name, price, quantity) VALUES (:id, :name, :price, :quantity)";

            $add = $this->connexion->prepare($sql);

            $add->bindValue('id',$id);
            $add->bindValue('name',$name);
            $add->bindValue('price',$price);
            $add->bindValue('quantity',$quantity);

            $add->execute();
            
            $new = $this->findId($id);

            return $new;

        }

        public function modifyProduct($p) {

            $id = $p->getId();
            $name = $p->getName();
            $price = $p->getPrice();
            $quantity = $p->getQuantity();

            $data = [

                'id' => $id,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity

            ];
            
            $update = $this->connexion->prepare('UPDATE product SET name = :name, price = :price, quantity = :quantity WHERE id = :id');

            $update->execute($data);

            return $this->findId($id);

        }

        public function deleteProduct($id) {


            $delete = $this->connexion->prepare('DELETE FROM product WHERE id = :id');

            $id = intval($id);

            $delete->bindParam('id',$id);

            $delete->execute();

        }

    }

?>