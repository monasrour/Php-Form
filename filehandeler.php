<?php
  

 function getAllUsers() {


    try{
        $users=file("users.txt");
        return $users;

    } catch(Exception $e){
        return false;
    }
    

}

function getNewId(){
    $users=getAllUsers();
    if($users){
        $last_user=end($users);
        $userdata=explode(":" ,$last_user);
        $id= (int) $userdata[0];
        return $id+1;
    }
    return 1;
}
// var_dump(getNewId());

function saveUser($userdata) {


    try{
        $fileobject=fopen("users.txt", "a");
        if($fileobject){
        fwrite($fileobject,$userdata);
        fclose($fileobject);
        return true;
        }

    } catch(Exception $e){
        return false;
    }
    

}





//////////////////////////////********* */


