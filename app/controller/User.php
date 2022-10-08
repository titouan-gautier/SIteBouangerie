<?php
    class User {
        private UserRepositoryInterface $repository;
        public function __construct() {
            $this->repository = new UserRepository();
        }

        function login() {
            require "view".DIRECTORY_SEPARATOR."login.php";
        }

        function loginCheck() {
            $pseudo = $_POST['pseudo'];
            $password = $_POST ['password'];
            $user = $this->repository->findByPseudo($pseudo);

            if ($user !=null && $user->isValidPassword($password)) {
                header('Location: /~E217657J/td2/app/Home');
            }
            else {
                echo "Non valide";
            }
        }
        
        function logout(){
            
        }
}