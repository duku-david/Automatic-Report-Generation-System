
  <!DOCTYPE html>
<html>
<head>
    <title>PAGRINYA P S S</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <!-- <link rel="stylesheet" type="text/css" href="./module/admin/style.css"> -->
       <link rel="stylesheet" type="text/css" href="./module/bootstrap/css/bootstrap.css">
        <script src="./module/admin/jquery.min.js"></script>
      <script src="./module/admin/js/bootstrap.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
       <style type="text/css">
      .main-container{
      margin-top: 0px;
      border-radius: 0px 0px 10px 10px;
      border: 1px solid #ddd;
     }

  .formheader{
      /*margin-top: 10px;*/
      font-size: 28px;
      background:#ECECFA;
      text-align:center;
      color: #337AB7;
      margin: 10px;
        }
.form1 {

  margin: 0px auto;
  padding-left: 10px;
  margin-top: 25px;
  width:450px;
  border: 1px solid #ccc;
  border-radius: 10px 10px 10px 10px;
  background-color: #ECECFA;
  margin-bottom: 20px;
  padding-bottom: 20px;
  
}
.form1 label{
  
  color:#337AB7; 
}
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
       .input-group-addon{
      color: white;
     background-color: #17a2b8;
      border-color: #4cae4c;
    }
  .input-group{
      margin-left: 5px;
    }
    .form1 label{
      margin-left: 5px;
    }



/*footer*/
#footer{

background-color:#ECECFA;
color: #337AB7;
text-align: center;
font-size: 30px;
height: 100%;
line-height:32px;
}
#footer a{

text-decoration: none;
}
.btn
{
  margin-left: 10px;
}

</style>

</head>
<body>
 
     <div class="container main-container" style="width: 97%">
              <h1>PAGIRINYA SECONDARY SCHOOL</h1>
              <h2>ADJUMANI</h2>
              <h3>Report Generation System</h3>

              <div class="container form1">
                <div class="formheader">Staff Login</div>
                <form method="post" action="login_action.php" onsubmit="return Login_Validate()">
                  <?php if(isset($_GET['logout'])){
                    echo '<div class="alert alert-success">
                        <button class="close" data-dismiss="alert" >&times;</button>
                        <p>Successful logged out!</p>
                        </div>';
                  }?>
                  <?php if(isset($_GET['pass_change'])){
                        echo'<div class="alert alert-success">
                        <button class="close" data-dismiss="alert" >&times;</button>
                         <p>Password Successfully Changed! You Can Login Again</p>
                        </div>';
                  }?>
                  <div id="output"></div>
                  <div class="form-group">
                     <label>username</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="username" id="username" placeholder="username" class="form-control" oninput="Validate_name()">
                    </div>
                    <p id="username_error" style="color: red; text-align: center;"></p>
                  </div>

                  <div class="form-group">
                     <label>Year</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name ="year"  id="year" class="form-control" onblur="Validate_year()">
                            <option value="000">Select Year</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2026</option>
                            <option value="2026">2027</option>
                            <option value="2027">2028</option>
                            <option value="2028">2029</option>
                            <option value="2029">2030</option>
                            <option value="2031">2031</option>
                          
                          </select>
                    </div>
                     <p id="year_error" align="center"></p>
                  </div>
                      
                      <div class="form-group">
                     <label>Term</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name="term" id="term" class="form-control" onblur="Validate_term()">
                           <option value="000">Select Term</option>  
                           <option value="I">I</option>
                           <option value="II">II</option>
                           <option value="III">III</option>

                        </select>
                     
                    </div>
                    <p id="term_error" align="center"></p>
                  </div>

                  <div  class="form-group">
                     <label>password</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" oninput="Validate_password()">
                    </div>
                    <p id="password_error" align="center"></p>
                  </div>
                    
                    <button class="btn btn-warning" type="submit" name="login">Login<i class="glyphicon glyphicon-send"></i></button>
                 
                </form>
                
          </div>
     
  </div>
     
     <script type="text/javascript" src="./module/admin/javascript/Valids_login.js"></script>
     
<?php include('footer.php');?>

    <script type="text/javascript">
       $(document).ready(function(){
         $(document).on("submit","form",function(e) {
             e.preventDefault();
             var username=$("#username").val();
             var password=$("#password").val();
             var year    =$("#year").val();
             var term    =$("#term").val();
             if(Login_Validate()==false){
               return false;
             }else{
                $.ajax({
               url:"./service/login_action.php",
               type:"POST",
               data:{
                  login:1,
                  username:username,
                  password:password,
                  term:term,
                  year:year
               },
               success:function(data)
               {
                $("#output").html(data);

               }
             });
             }
             
          
         })
       });
    </script>
