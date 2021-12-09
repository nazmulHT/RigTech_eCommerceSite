
<?php require_once("../resource/DB.php"); ?>
<?php include_once("Includer/Header.php")?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<?php require_once("cart.php"); ?>









    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
  <h4 class="text-center bg-danger"><?php display_message(); ?></h4>

      <h1>Checkout</h1>

<form action="https://www.sandboxpaypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="nazmul@gmail.com">

    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <?php cart(); ?>
        </tbody>
    </table>
    <?php echo show_paypalButtoon(); ?>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount">
  <?php 

  echo isset($_SESSION['item']) ? $_SESSION['item'] : $_SESSION['item'] = "0 item!"; 

  ?>
</span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#2547;<?php echo isset($_SESSION['total_item_price']) ? $_SESSION['total_item_price'] : $_SESSION['total_item_price'] = "0"; ?>
</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->

</div>

<?php include_once("Includer/Footer.php")?>



