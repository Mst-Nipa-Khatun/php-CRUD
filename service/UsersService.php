<?php
require_once __DIR__ . '/../connection/Database.php';

class UsersService
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }


    public function createUser($firstname, $lastname, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO Users (firstName, lastName,email,password) VALUES (:firstName, :lastName, :email, :password)";
        $executableQuery = $this->conn->prepare($sql);
        $executableQuery->bindParam(':firstName', $firstname);
        $executableQuery->bindParam(':lastName', $lastname);
        $executableQuery->bindParam(':email', $email);
        $executableQuery->bindParam(':password', $hashedPassword);
        return $executableQuery->execute();
    }
    public function getAllUsers()
    {
        $sql = "SELECT firstName,lastName,email FROM Users";
        $executableQuery= $this->conn->query($sql);
        return $executableQuery->fetchAll(PDO::FETCH_ASSOC);
    }


}
?>
