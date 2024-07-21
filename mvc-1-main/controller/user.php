<?php
require_once("../utiles/db.php");
require_once("../model/user.php");

$userData=executequery("SELECT * FROM user");


$userArray=array();


while($row=$userData->fetch_assoc()){
   
    array_push($userArray,new User($row["id"],$row["name"],$row["email"],$row["password"],$row["is_admin"]));

}


require("../view/user.php");

?>