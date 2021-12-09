<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<?php require_once("../resource/DB.php"); ?>
<?php include_once("Includer/Header.php")?>

<?php



if(isset($_GET['add'])) {


    $query = query("SELECT * FROM product WHERE p_id=" . escape_string($_GET['add']) . "" );
    confirm($query);

    while ($row = fetch_array($query)) {

        if($row['p_quantity'] != $_SESSION['p_' . $_GET['add']]) {
            $_SESSION['p_' . $_GET['add']] += 1;
            redirect("checkout.php");
        }
        else {
            set_message("We only have " . $row['p_quantity'] . " " . $row['p_title'] . " available in the Stock");
            redirect("checkout.php");
        }
        
    }
}


if(isset($_GET['remove'])) {

    $_SESSION['p_' . $_GET['remove']]--;
    if($_SESSION['p_' . $_GET['remove']] < 1) {

        unset($_SESSION['item']);
        unset($_SESSION['total_item_price']);

        redirect("checkout.php");
    }
    else {
        redirect("checkout.php");
    }
}


if(isset($_GET['delete'])) {
    $_SESSION['p_' . $_GET['delete']] = '0';

    unset($_SESSION['item']);
    unset($_SESSION['total_item_price']);

    redirect("checkout.php");
}


function cart() {

    $total = '0';
    $total_item = '0';




    foreach ($_SESSION as $name => $value) {
        if($value > 0) {
            if(substr($name, 0, 2) == "p_") {
                $length = strlen((int)$name - (int)2);
                $id = substr($name, 2, $length);

            $query = query("SELECT * FROM product WHERE p_id = " . escape_string($id) . " " );
            confirm($query);

    while ($row = fetch_array($query)) {
        $subtotal = $row['p_price'] * $value;

        $product  = <<<DELIMETER

        <tr>
        <td>{$row['p_title']}</td>
        <td>&#2547;{$row['p_price']}</td>
        <td>$value</td>
        <td>&#2547;$subtotal</td>
        <td><a class='btn btn-warning' href="cart.php?remove={$row['p_id']}"><span class='glyphicon glyphicon-minus'></span></a>
        <a class='btn btn-success' href="cart.php?add={$row['p_id']}"><span class='glyphicon glyphicon-plus'></span></a>
        <a class='btn btn-danger' href="cart.php?delete={$row['p_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
        </tr>



        DELIMETER;
        echo $product;
    }

    $_SESSION['total_item_price'] = $total += $subtotal;
    $_SESSION['item'] = $total_item += $value;

   }

  }
     
 }

}

function show_paypalButtoon() {
    if(isset($_SESSION['item']) && $_SESSION['item'] >= 1) {
        $paypal_button = <<<DELIMETER

        <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal">
        DELIMETER;

        return $paypal_button;
    }
}






?>