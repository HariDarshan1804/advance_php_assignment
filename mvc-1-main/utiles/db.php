<?php


$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "vidhi";


function executequery($sql){

    global $localhost;
    global $db_username;
    global $db_password;
    global $db_name;
   
    $db=new mysqli("localhost","root","","vidhi");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $result=$db->query($sql);
    $db->close();
    return $result;
}

?>