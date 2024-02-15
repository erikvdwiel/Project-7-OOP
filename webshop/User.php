<?php

require_once 'database.php';
class User extends Database
{
    public $username;
    private $pwd;
    private $role;

    public function registerUser($username, $pwd, $role)
    {
        echo "Registeer user<br>";

        $this->$username = $username;
        $this->$pwd = $pwd;
        $this->$role = $role;
    }

}
