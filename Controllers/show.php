<?php

include '../Models/user_operation.php';

echo "<h1>User Data</h1>";
var_dump($_GET);

if(isset($_GET['id'])&&!empty($_GET['id'])){
    $user=get_specific_user($_GET['id']);
     var_dump($user);
}