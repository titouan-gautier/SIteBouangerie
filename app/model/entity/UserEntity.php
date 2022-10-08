<?php
class UserEntity
{
    private string $pseudo;
    private string $password;
    private string $status;

    public function isValidPassword(string $password):bool {
        return password_verify($password, $this->password);
    }

    /**
    * @return string
    */
    public function getPseudo(): string {
        return $this->pseudo;
    }

    /**
    * @param string $pseudo
    */
    public function setPseudo(string $pseudo): void {
        $this->pseudo = $pseudo;
    }

    /**
    * @return false|string|null
    */
    public function getPassword(): string{
        return $this->password;
    }

    /**
    * @param false|string|null $password
    */
    public function setPassword(string $password): void {
        $this->password =password_hash($password, PASSWORD_DEFAULT);
    }

    /**
    * @param false|string|null $password
    */
    public function setEncryptedPassword(string $password): void {
        $this->password = $password;
    }

    /**
    * @return string
    */
    public function getStatus(): string {
        return $this->status;
    }
    
    /**
    * @param string $status
    */
    public function setStatus(string $status): void {
        $this->status = $status;
    }
}