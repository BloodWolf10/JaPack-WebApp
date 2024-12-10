<?php

class UserModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=japackdb', 'php_docker', 'RootSQL1010');
    }

    public function getAllUsers()
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (fullname, age, gender, contact, address, email, password) VALUES (:fullname, :age, :gender, :contact, :address, :email, :password)");
        return $stmt->execute($data);
    }

    public function updateUser($data)
    {
        $sql = "UPDATE users SET fullname = :fullname, age = :age, gender = :gender, contact = :contact, address = :address, email = :email";
        if (isset($data['password'])) {
            $sql .= ", password = :password";
        }
        $sql .= " WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function deleteUser($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function getUserByEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE username = :username LIMIT 1';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['username' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
?>