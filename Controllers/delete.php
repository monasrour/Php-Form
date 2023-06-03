<?php


include '../Models/user_operation.php';

echo "<h1>Delete User</h1>";
// var_dump($_GET);

if(isset($_GET['id']) && !empty($_GET['id'])){
    delete_user($_GET['id']);

    header("Location:../TableData.php");
}