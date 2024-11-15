<?php
require_once 'connection.php';

class User {
    public $id, $name, $email, $address;

    public function __construct($id, $name, $email, $address) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public static function create($name, $email, $address, $password) {
        global $connection;
        $stmt = $connection->prepare("INSERT INTO user (name, email, address, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $address, $password]);
        return new User($connection->lastInsertId(), $name, $email, $address);
    }

    public static function authenticate($email, $password) {
        global $connection;
        $stmt = $connection->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && password_verify($password, $row['password'])) {
            return new User($row['id'], $row['name'], $row['email'], $row['address']);
        } else {
            return null;
        }
    }
}
?>