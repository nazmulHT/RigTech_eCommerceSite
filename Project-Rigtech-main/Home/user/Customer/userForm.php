<?php require_once("../../../resource/DB.php"); ?>

<?php add_user(); ?>

<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:Antiquewhite;">

<?php
// define variables and set to empty values
$f_nameErr = $l_nameErr = $u_nameErr = $emailErr = $cityErr = $addressErr = $passwordErr = "";
$f_name = $l_name = $u_name = $email = $city = $address = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["f_name"])) {
    $f_nameErr = "First Name is required";
  } else {
    $f_name = test_input($_POST["f_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$f_name)) {
      $f_nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["l_name"])) {
    $l_nameErr = "Last Name is required";
  } else {
    $l_name = test_input($_POST["l_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {
      $l_nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["u_name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["u_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$u_name)) {
      $nameErr = "Only letters and white space allowed";
    }
  } 

  

  

  if (empty($_POST["city"])) {
    $cityErr = "Must select a city";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required" ;
  } else {
    $password = test_input($_POST["password"]);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $passwordErr = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
  }
  }


  



}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Customer Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  First Name: <input type="text" name="f_name" value="<?php echo $f_name;?>">
  <span class="error">* <?php echo $f_nameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="l_name" value="<?php echo $l_name;?>">
  <span class="error">* <?php echo $l_nameErr;?></span>
  <br><br>
  User Name: <input type="text" name="u_name" value="<?php echo $u_name;?>">
  <span class="error">* <?php echo $u_nameErr;?></span>
  <br><br>
  
  City:
  <select id="" name="city">
  <option value = "">Choose your city</option> 
  <option value="dhaka">Dhaka</option>
  <option value="chattogram">Chattogram</option>
  <option value="rajshahi">Rajshahi</option>
  <option value="Khulna">Khulna</option>
  <option value="sylhet">Sylhet</option>
  <option value="barishal">Barishal</option>
  <option value="rangpur">Rangpur</option>
  <span class="error">* <?php echo $cityErr;?></span>
  </select>
  <br><br>
  Address: <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>
