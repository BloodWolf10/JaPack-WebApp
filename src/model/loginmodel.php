<?php
class UserModel
{
    private $pdo;

    public function __construct()
    {
        // Initialize PDO connection
        $this->pdo = new PDO('mysql:host=db;dbname=japackdb', 'php_docker', 'RootSQL1010');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Get user by username
    public function getUserByEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email = :email LIMIT 1';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
?>