<?php

class UserService
{
    private $db;

    public function __construct()
    {
        $this->db = new mysqli("localhost", getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME')); // add database credentials
        if ($this->db->connect_error) {
            throw new Exception("Database connection failed: " . $this->db->connect_error);
        }
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);

        if (!$result) {
            throw new Exception("Failed to fetch users: " . $this->db->error);
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
