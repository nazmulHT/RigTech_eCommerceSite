<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$snameErr = $pnameErr = $cnameErr = $qtyErr = $dateErr = $totalErr = "";
$sname = $pname = $cname = $qty = $date = $total = "";
//$usernamelength= strlen($username);
//$namelength = strlen($name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sname"])) {
    $snameErr = "Supplier Name is required";
  } else {
    $sname = test_input($_POST["sname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-', ]*$/",$sname)) {
      $snameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["pname"])) {
    $pnameErr = "Product Names is required";
  } else {
    $pname = test_input($_POST["pname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-', ]*$/",$pname)) {
      $pnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["cname"])) {
    $cnameErr = "Company Name is required";
  } else {
    $sname = test_input($_POST["cname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-', ]*$/",$sname)) {
      $cnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["qty"])) {
    $qtyErr = "Product Quantity is required";
  } else {
    $qty = test_input($_POST["qty"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[1-9][0-9]*$/", $qty)) {
      $qtyErr = "Invalid Quantity format";
    }
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
    // check if e-mail address is well-formed
    if (!preg_match("/(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2}/",$date)) {
      $dateErr = "Invalid date format";
    }
  }

  if (empty($_POST["total"])) {
    $totalErr = "Total Amount is required";
  } else {
    $total = test_input($_POST["total"]);
    }
  }





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Supplier Order History</h2>
<p><span class="error">* required field0</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Supplier Name: <input type="text" name="sname" value="<?php echo $sname;?>">
  <span class="error">* <?php echo $snameErr;?></span>
  <br><br>
  Product Name: <input type="text" name="pname" value="<?php echo $pname;?>">
  <span class="error">* <?php echo $pnameErr;?></span>
  <br><br>
  Company Name: <input type="text" name="cname" value="<?php echo $cname;?>">
  <span class="error">* <?php echo $cnameErr;?></span>
  <br><br>
  Quantity: <input type="number" name="qty" value="<?php echo $qty;?>">
  <span class="error">* <?php echo $qtyErr;?></span>
  <br><br>
  Date: <input type="date" name="date" value="<?php echo $date;?>">
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>
  Total: <input type="number" name="total" value="<?php echo $total;?>">
  <span class="error">* <?php echo $totalErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <a href="index.php" class="logout_btn">Back</a>


</form>


</body>
</html>
