<?php
class User {
    protected $conn;
    protected $table_name = "users";

    public $id_user;
    public $username;
    public $password;
    public $role;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login() {
        // Code for user login
    }

    public function logout() {
        // Code for user logout
    }
}
?>
