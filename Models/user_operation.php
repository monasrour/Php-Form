<?php


function get_all_users() {

$users=false;
if(file_exists('../users.txt')){
    $users=file('../users.txt'); //read file into an array
    // var_dump($users);
    $users=array_filter($users);
}
return $users;
}


function get_specific_user($id)
{
    $users=get_all_users();

    foreach($users as $index=>$user){
        $user_data=trim($user,'\n');
        $user_data=explode(':',$user_data);
        if($user_data[0]==$id){
            return [$index=>$user_data];

        }

    }
    return false;
}

// var_dump(get_specific_user(15));
 function delete_user($id){
    $users=get_all_users();
   
    $users=array_filter($users);
    $user = get_specific_user($id);
    
    if($user){
        $user_index=array_keys($user)[0];

        //delete user from all users array 
        unset($users[$user_index]);

        //write user to file
        save_all_users($users);
    }
 }

 function save_all_users($users){
    $users=array_filter($users);
    $fileobject=fopen('../users.txt','w');

    
    foreach($users as $user){
        $user=trim($user,"\n");
        
        $user=$user.PHP_EOL;
        fwrite($fileobject,$user);
    }
    fclose($fileobject);
 }

 function edit_user($id,$newdata){
    $users=get_all_users();
    $user = get_specific_user($id);
    if($user){
        $user_index=array_keys($user)[0];

       
        $users[$user_index]=$newdata;


        //write user to file
        save_all_users($users);
    }


 }