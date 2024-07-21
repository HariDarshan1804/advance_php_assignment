<?php

class user {
    private $id, $name,$email,$password,$is_admin;
 

    public function __construct($id,$name, $email,$password,$is_admin) {
        $this->id = $id;
        $this->name = $name;
    $this->email = $email;
        $this->password = $password;
        $this->is_admin = $is_admin;
    }

    public function getid() {
        return $this->id;
    }
    public function getname() {
        return $this->name;
    }

    public function getemail() {
        return $this->email;
    }

    public function getpassword() {
        return $this->password;
    }

    public function getadmin() {
        return $this->password;
    }
   
}

?>