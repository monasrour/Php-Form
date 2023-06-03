<?php

// include "forms.php";
$errors=[];
$old_data=[];
  $password_err=$username_err=$lastName_err=$firstName_err=$old_firstname=$old_lastname=$old_username="";

  if (isset($_GET) && !empty($_GET)){
    // var_dump($_GET);
    $errors=json_decode(($_GET["errors"]),1);
  }
  if(in_array('first-name',array_flip($errors))){
      $firstName_err=$errors['first-name'];
  }

  if(in_array('last-name',array_flip($errors))){
    $lastName_err=$errors['last-name'];
}
if(in_array('username',array_flip($errors))){
  $username_err=$errors['username'];
}

if(in_array('password',array_flip($errors))){
  $password_err=$errors['password'];
}

if(isset($_GET["old"])){
  $old_data=json_decode($_GET["old"],1);
  // var_dump($old_data);
  if(isset($old_data['first-name'])){
    $old_firstname=$old_data['first-name'];
  }
  if(isset($old_data['last-name'])){
    $old_lastname=$old_data['last-name'];
  }
  if(isset($old_data['username'])){
    $old_username=$old_data['username'];
  }

}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <form action="form.php" method="post">
   

      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" class="form-control" id="first-name" name="first-name" value="<?php echo $old_firstname; ?>">
        <span class="text-danger"><?php echo $firstName_err ?></span>
      </div>

      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" class="form-control" id="last-name" name="last-name" value="<?php echo $old_lastname; ?>">
        <span class="text-danger"><?php echo $lastName_err ?></span>

      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address">
      </div>

      <div class="form-group">
        <label for="country">Country:</label>
        <select class="form-control" id="country" name="country">
          <option value="USA">Egypt</option>
          <option value="USA">United States</option>
          <option value="UK">United Kingdom</option>
          <option value="Canada">Canada</option>
          <option value="Australia">Australia</option>
          <!-- Add more countries here -->
        </select>
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="skills">Skills:</label><br>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="php" name="skills[]" value="php">
          <label class="form-check-label" for="php">PHP</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="css" name="skills[]" value="css">
          <label class="form-check-label" for="css">CSS</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="mysql" name="skills[]" value="mysql">
          <label class="form-check-label" for="mysql">MySQL</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="laravel" name="skills[]" value="laravel">
          <label class="form-check-label" for="laravel">Laravel</label>
        </div>
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $old_username; ?>">
        <span class="text-danger"><?php echo $username_err ?></span>

      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password"  name="password">
        <span class="text-danger"><?php echo $password_err ?></span>

      </div>

      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department" >
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
