<?php

include '../Models/user_operation.php';

var_dump($_GET);
if(isset($_GET['id'])){
    $user=get_specific_user($_GET['id']);
    var_dump($user);
    
}