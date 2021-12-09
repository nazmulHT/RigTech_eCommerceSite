<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  
    
<fieldset class="form-wrapper">

<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }

         if( document.myForm.username.value == "" ) {
            alert( "Please provide your username!" );
            document.myForm.username.focus() ;
            return false;
         }

         if( document.myForm.password.value == "" ) {
            alert( "Please provide your password!" );
            document.myForm.password.focus() ;
            return false;
         }

         if( document.myForm.cpassword.value == "" ) {
            alert( "Please provide your confirm password!" );
            document.myForm.cpassword.focus() ;
            return false;
         }

         if( document.myForm.dob.value == "" ) {
            alert( "Please provide your DOB!" );
            document.myForm.dob.focus() ;
            return false;
         }

         if( document.myForm.gender.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.gender.focus() ;
            return false;
         }

         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {
            
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }
   //-->
</script>

<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post"  name = "myForm" onsubmit = "return(validate());" >  
  <b>NAME:</b> <input type="text" name="name">
  <span class="error"></span>
  <br><br>
  <b>E-MAIL:</b> <input type="text" name="email">
  <span class="error"></span>
  <br><br>
  
  <b>Username:</b> <input type="text" name="username">
  <span class="error"></span>
  <br><br>
  
  <b>Password:</b> <input type="text" name="password">
  <span class="error"></span>
  <br><br>
  
  <b>Confirm Password:</b> <input type="text" name="cpassword">
  <span class="error"></span>
  <br><br>
  
  <b>DOB:</b> <input type="date" name="dob">
  <span class="error"></span>
  <br><br>
  
  <b>GENDER:</b>
  <br><br>
  <input type="radio" name="gender" >Female
  <input type="radio" name="gender" >Male
  <input type="radio" name="gender" >Other  
  <span class="error"></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="submit">  
</form>


</fieldset>
  

    <input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>WELCOME <span></span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
   
   
    
    <div class="sidebar">
      <div class="profile_info">
        <img src="rig.png" class="profile_image" alt="">
        <h4>###</h4>
      </div>
	  <a href="mypro.php"><i class="fas fa-table"></i><span>My profile</span></a>
      <a href="index.php"><i class="fas fa-desktop"></i><span>Pruduct</span></a>
      <a href="product.php"><i class="fas fa-cogs"></i><span>ADD Pruduct</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Create Admin</span></a>
	  <a href="editpro.php"><i class="fas fa-table"></i><span>Edit profile</span></a>
	  	  <a href="cradmin.php"><i class="fas fa-table"></i><span>Supplier</span></a>
      
    </div>
	
   

 </body>
</html>