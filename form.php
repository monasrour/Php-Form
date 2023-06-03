<?php


/// take data from the post and save it into file 
include "filehandeler.php";
 $errors=[];
//  $oldData=[];
$old_data=[];

$firstName =trim( $_POST["first-name"]);
$lastName = trim( $_POST["last-name"]);
$username = trim ($_POST["username"]);
$password = trim( $_POST["password"]);

if(isset($firstName) && !empty($firstName)){
  $old_data['first-name']=$firstName;
}
else
{
  $errors["first-name"] = "Please enter a first name";
}

if(isset($lastName) && !empty($lastName)){
  $old_data['last-name']=$lastName;

}
else
{
  $errors["last-name"] = "Please enter a last name";
}

if(isset($username) && !empty($username)){
  $old_data['username']=$username;
}else
{
  $errors["username"] = "Please enter a user name";
}

if(isset($password) && !empty($password)){
  $old_data['password']=$password;
}
else{
  $errors["password"] = "Please enter a password";
}

if(count($errors)){
  $string_error=json_encode($errors);
  $url="Location:formStyle.php?errors={$string_error }";

  if(count($old_data)){
    $old_data_string=json_encode($old_data);
    $url.="&old={$old_data_string}";
  }

  header($url);
}else{



// $fileobject = fopen("users.txt","a");
// if($fileobject){
          $username = $_POST["username"];
          $password = $_POST["password"];
          $department = $_POST["department"];
          $firstName = $_POST["first-name"];
          $lastName = $_POST["last-name"];
          $address = $_POST["address"];
          $country = $_POST["country"];
          $gender = $_POST["gender"];
          $skills = $_POST["skills"];
         
          $id=getNewId();
          
          $usersdata="{$id}:{$firstName}:{$lastName}:{$address}:{$password}:{$department}:{$gender}\n";
          echo $usersdata;

          // save data into the file users. txt

          $Saved=saveUser($usersdata);
          // var_dump($Saved);
          header("location:TableData.php");

          
}
// }

        ?>

        

