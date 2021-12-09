<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
			.ashab{text-align:left;
			      padding: 5px
				  margin : 10px;
			     }
			
			</style>
  </head>
  <body>
  <script type = "text/javascript">
   <!--
     
      function validate() {
      
        if( document.myForm.fname.value == "" ) {
            alert( "Please provide First name!" );
            document.myForm.fname.focus() ;
            return false;
         }
         if( document.myForm.lname.value == "" ) {
            alert( "Please provide last name!" );
            document.myForm.pname.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide product price!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.password.value == "" ) {
            alert( "Please provide product price!" );
            document.myForm.password.focus() ;
            return false;
         }
         
         
         return( true );
      }
   //-->
</script>
 
  <form method="post" name = "myForm" onsubmit = "return(validate());">  
  <fieldset class="form-wrapper">
	
				<h1>Profile Picture:</h1>
				<input type="file" name="mypic">
				<input type="submit" name="picturesubmit" value="Change profile picture">
				
				<h3>First Name</h3>
				<input type="text" name="fname" value="" />
				<input type="submit" name="firstname" value="Change first name"/>					
				<h3>Last Name </h3>
				<input type="text" name="lname" value="" /></td>
			    <input type="submit" name="lastname" value="Change last name"/>
	`			<h3>Email Address</h3>
				<input type="text" name="email" value=""><div id="email" class="val"></div>
				<br>
					<input type="submit" name="email" value="Change email"> 
					<h3> Password</h3>
					<input type="password" name="password" value="" /><div id="password" class="val"></div></td>
					<br>
					<input type="submit" name="password" value="Change password" />
					
					
					
				
			</form>
      </fieldset>
		



		
	
			<?php include_once("Includer/Header.php")?>
    
   
    </div>
    
    <?php include_once("Includer/Sidebar.php")?>
   

    <div class="content">
      <div class="card">
        <h1></h1>
      </div>
      
    </div>

    

  </body>
</html>