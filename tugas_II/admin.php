<?php
require_once 'User.php';

class Admin extends User {
    public function createUser($username, $password, $role) {
        // Code to create a new user
    }

    public function deleteUser($id_user) {
        // Code to delete a user
    }

    public function assignRole($id_user, $role) {
        // Code to assign a role to a user
    }
}
?>
