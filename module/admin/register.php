
<!DOCTYPE html>
<html>
<head>
    <title>PAGRINYA PSS</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    
       <style type="text/css">
        header .header2{
  background-color: #fff;
  margin: 0px auto;
  width:60%;
}
 
 header .header2 .image-wrapping img{
 
  width:99%;
}
       
       .input-group-addon{
      color: white;
      background-color:#17a2b8;
      border-color: #4cae4c;
    }
  .input-group{
      margin-left: 5px;
    }
    .form1 label{
      margin-left: 5px;
    }

       </style>


   
</head>
<body>
    <style type="text/css">
     
        .main-container h1{
      margin-top: 50px;
      color: blue;
      text-align: center;
      font-size: 40px;
     }  
     .main-container h2{
      color: red;
      text-align: center;
      font-size: 30px;
     }
     .main-container h3{
      text-align: center;
     }


    </style>

  <div class="main-container">
  	             <h1>PAGRINYA PROGRESSIVE SECONDARY SCHOOL</h1>
              <h2>ADJUMANI</h2>
              <h3>Report Generation System</h3>

	  	        <div class="form1">
	  	        	 <div class="formheader"><marquee direction="right">Staff Registration Form</marquee></div>
	  	        	<form method="post" action="register.inc.php" enctype="multipart/form-data" onsubmit="return Validate()">
	  	        		<?php global $msg; echo $msg; ?>
	  	        		<div>
	  	        			 <label>First Name</label>
	  	        			<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  	        				<input type="text" name="firstname" id="firstname" placeholder="First Name" onblur="Validate_firstname()">
	  	        			</div>
	  	        			<p id="firstname_error" style="color: red; text-align: center;" ></p>
	  	        		</div>
	  	        		<div>
	  	        			 <label>Other Name</label>
	  	        			<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  	        				<input type="text" name="othername" id="othername" placeholder="Other Name" onblur="Validate_othername()">
	  	        			</div>
	  	        			<p id="othername_error" style="color: red; text-align: center;" ></p>
	  	        		</div>
	  	        		<div>
	  	        			 <label>username</label>
	  	        			<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  	        				<input type="text" name="username" id="username" placeholder="username" onblur="Validate_name()">
	  	        			</div>
	  	        			<p id="username_error" style="color: red; text-align: center;" ></p>
	  	        		</div>

	  	        		<div>
	  	        			 <label>Gender</label>
	  	        			<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	  	        				<select name ="gender" id="gender" onblur="Validate_gender()">
				                    <option value="000">Select gender</option>
		                            <option value="male">male</option>
		                            <option value="female">female</option>
			                    
			                    </select>
	  	        			</div>
	  	        			<p id="gender_error" style="color: red; text-align: center;" ></p>
	  	        		</div>
	                    
	                    <div>

	  	        		<div>
	  	        			 <label>password</label>
	  	        			<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	  	        				<input type="password" name="password_1" id="password_1" placeholder="Enter password" onblur="Validate_password()">
	  	        			</div>
	  	        			<p id="password_error" style="color: red; text-align: center;" ></p>
	  	        		</div>
	  	        		<div>
	  	        			 <label>Retype password</label>
	  	        			<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	  	        				<input type="password" name="password_2" id="password_2" placeholder="confirm password" onblur="Confirm_password()">
	  	        			</div>
	  	        			<p id="confirmpassword_error" style="color: red; text-align: center;" ></p>
	  	        		</div>
	  	        		<div>     
	                    <label> Select Your Picture</label><br>
	                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
	                      <input type="file" style="margin-left: 0px; border: 0.5px solid gray;" name="picture" id="picture" accept="image/" onchange="Validate_image()" >
	                    
	                     </div>
	                    <p id="picture_error" style="color: red; text-align: center;" ></p> 
                          <a href="login.php" style="text-decoration: none;">Already a Member</a>
          </div>
	  	        		<div class="button-group">
	  	        			<button class="btn btn-warning" type="submit" name="register">Register<i class="glyphicon glyphicon-send"></i></button>
	  	        		</div>
	  	        		
	  	        		
	  	        	</form>
	  	        	
	  	    </div>
        </div>
  </div>
     
     <script type="text/javascript" src="javascript/Gen_Validation.js">
        
    </script>
     
<?php include('footer.php')?>

