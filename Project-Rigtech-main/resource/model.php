<?php


/***********************helper function***********/

function set_message($msg) {
    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
    }
    else {
        $msg = "";
    }
}

function display_message() {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']); 
    }
}

function redirect($location) {
    header("Location: $location");
}


function query($sql) {
    global $connection ;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;
    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    }
}

function escape_string($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}


function fetch_array($result) {
    return mysqli_fetch_array($result);
}


function get_products_in_user_profile() {
    $query = query("SELECT * FROM users");
    confirm($query);
    while ($row = fetch_array($query)) {
        //$category = show_product_category_title($row['cat_id']);

        $datas = <<<DELIMETER

        <h1>My Profile</h1>
        <h4>ID :{$row['u_id']}</h4>
        <h4>Full Name :{$row['f_name']}</h4>
        <h4>Username :{$row['u_name']}</h4>
        <h4>Email : {$row['email']}</h4>
        <h4>Address :{$row['address']}</h4>
        <h4>Gender :</h4>

        DELIMETER;
        echo $datas;

    } 
}






/*************************************Front End Function**************************************************/









function get_prodcuts() {
    $query = query("SELECT * FROM product");
    confirm($query);
    while ($row = fetch_array($query)) {
        $product = <<<DELIMETER
        <div class="col-md-4" >
            <div class="card" style="width: 22rem;">
              <a href="item.php?id={$row['p_id']}"><img src="{$row['p_image']}" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="item.php?id={$row['p_id']}">{$row['p_title']}</a></h5>
                <ul>
                <li>{$row['short_desc']}</li>
                </ul>
                <p>&#2547;{$row['p_price']}</p> 
                <a href="cart.php?add={$row['p_id']}" class="btn btn-success">ADD TO CART</a>
              </div>
            </div>
        </div>

        DELIMETER;
        echo $product;

    }
}



function login_user() {

    if(isset($_POST['submit'])){
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0) {
            set_message("Your username or password was incorrect!");
            redirect("login.php");
        }
        else {
            redirect("Public");
        }
    }

}

function login_admin() {

    if(isset($_POST['submit'])){
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0) {
            set_message("Your username or password was incorrect!");
            redirect("login.php");
        }
        else {
            redirect("Admin");
        }
    }

}

function login_super_admin() {

    if(isset($_POST['submit'])){
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM super_admin WHERE username = '{$username}' AND password = '{$password}' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0) {
            set_message("Your username or password was incorrect!");
            redirect("login.php");
        }
        else {
            redirect("Admin");
        }
    }

}



function add_user() {

    if(isset($_POST['submit'])) {
        $f_name = escape_string($_POST['f_name']);
        $l_name = escape_string($_POST['l_name']);
        $u_name = escape_string($_POST['u_name']);
        $city = escape_string($_POST['city']);
        $address = escape_string($_POST['address']);
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

        $query = query("INSERT INTO users (f_name, l_name, u_name, city, address, email, password) VALUES ('{$f_name}', '{$l_name}','{$u_name}', '{$city}', '{$address}', '{$email}', '{$password}')");
        confirm($query);
        set_message("Account Created");
        redirect("login.php");





    }

    







}


function add_product() {
 

    if(isset($_POST['submit'])){


        $p_title                   = escape_string($_POST['p_title']);
        //$cat_id                    = escape_string($_POST['cat_id']);
        $p_price                   = escape_string($_POST['p_price']);
        $p_quantity                = escape_string($_POST['p_quantity']);
        $p_description             = escape_string($_POST['p_description']);
        $short_desc                = escape_string($_POST['short_desc']);

        $p_image = basename($_FILES["file"]["name"]);
        $target_dir = "../public/upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        }else {
            echo "Sorry, there was an error uploading your file.";
  }

        $query = query("INSERT INTO product (p_title, p_price, p_quantity, p_description, short_desc, p_image) VALUES ('{$p_title}', '{$p_price}', '{$short_desc}', '{$p_image}')");
        confirm($query);
        set_message("New Products added");
        redirect("Admin");




    }
}



function add_admin() {

    if(isset($_POST['Continue'])) {
        $f_name = escape_string($_POST['f_name']);
        $lastname = escape_string($_POST['lastname']);
        $username = escape_string($_POST['username']);
        $email = escape_string($_POST['email']);
        $telephone = escape_string($_POST['telephone']);
        $dob = escape_string($_POST['dob']);
        $gender = escape_string($_POST['gender']);
        $address = escape_string($_POST['address']);
        $presentaddress = escape_string($_POST['presentaddress']);
        $city = escape_string($_POST['city']);
        $country = escape_string($_POST['country']);
        $region = escape_string($_POST['region']);
        $pass = escape_string($_POST['pass']);
        $confirmpassword = escape_string($_POST['confirmpassword']);




        $query = query("INSERT INTO admin (f_name, lastname, username, email, telephone, dob, gender, address, presentaddress, city, country, region, pass, confirmpassword) VALUES ('{$f_name}', '{$lastname}', '{$username}', '{$email}', '{$telephone}', '{$dob}', '{$gender}', '{$address}', '{$presentaddress}', '{$city}', '{$country}', '{$region}', '{$pass}', '{$confirmpassword}')");
        confirm($query);
        set_message("Account Created");
        redirect("Admin");





    }

    
}

























































































































?>
