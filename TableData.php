<?php
include "filehandeler.php";

$users=getAllUsers();






?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


<div class="container">
 <table class="table">
    <h1>All Users</h1>
    <tr class="table-active">
        <td>ID</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Adress</td>
        <td>Password</td>
        <td>Department</td>
        <td>Gender</td>
        <td>Operation</td>

        <?php 
            foreach($users as $user){
                echo "<tr>";
                $userdata=trim($user , ' /n');
                $userdata=explode(":",$userdata);
                foreach($userdata as $field){
                    echo "<td>{$field}</td>";
                }
                echo "<td><a href='Controllers/show.php?id=$userdata[0]' class='btn btn-Info'>Show</a></td>
                    <td><a href='Controllers/edit.php?id=$userdata[0]' class='btn btn-warning'>Edit</a></td>
                    <td><a href='Controllers/delete.php?id=$userdata[0]'  class='btn btn-danger'>Delete</a></td>

                ";
                
                echo "</tr>";
            }
        ?>
    </tr>
 </table>

</div>
