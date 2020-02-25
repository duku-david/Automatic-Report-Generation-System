 <?php include('staff_auth.php'); ?>
 <?php include('../../service/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff Page</title>
    <meta charset="utf-8">
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script src="jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
  <!-- <script src="../bootstrap/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

      <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/dataTables.bootstrap.min.css"> -->
        <script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery.dataTables.min.js"></script>


<style type="text/css">
 .input-group-addon{
      color: white;
      background-color: #17a2b8;
      border-color: #4cae4c;
    }
  .input-group{
      margin-left: 5px;
    }
    .form2 label{
      margin-left: 5px;
    }

    
  body{
  margin: 0px;
  padding: 0px;
   /*background-color: #ddd;*/
  
}

nav {
   background-color:#ECECFA;
}
nav .topnav1 {
   display: inline-block;
   margin-left: 10px;
     height: 42px;
}
nav .topnav1 a {
    /*color: #337AB7;*/ 
    color: #fff;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    padding: 6px;
}
nav .topnav1 a:hover {
    background-color: #ffffff;
    color: red;
    font-size: 17px;
}
.float-right1{
  float: right;
  margin-right: 5px;
}
.float-right1 a{
   
   color: #fff; 
    text-align: center;
    text-decoration: none;
    font-size: 17px;
     padding: 6px;
}
.float-right1 a:hover
{
  color: red;
  background: white;
  font-size: 17px;
}

.main-container{
      margin-top: 0px;
      border-radius: 0px 0px 10px 10px;
      border: 1px solid #ccc;
     }

    .left-float{
      background-color: #ddd;
    }
     
     .left-float .side-navi a{
       text-decoration: none;
       background-color: #ECECFA;
       display: block;
       border-bottom: 3px solid #A7A7AD;
       color: #337AB7;
       cursor: move; 
        text-align: center;
        padding: 8px 0px;
        text-decoration: none;
        font-size: 20px;

    }
    
    .left-float .side-navi a:hover{
           cursor:pointer;
          background-color:#fff;
          font-size:20px;
          color:red;

    }
  .left-float .image1{
      border:1px solid #ccc;
      background-color: #fff;
      padding:5px;
    }
.left-float .image1 img{

  height: 250px;
  width: 250px;
}
   .main-wrapping1{
      background-color: white;
      padding: 20px;
      border: 1px solid #ccc;
       border-left: 2px solid black;
      padding-bottom: 330px;
      width: 100%;
 
}
    .main-wrapping{
      background-color: white;
      border-top: none;
     /* width: 98%;*/
      border: 1px solid #ccc;
}

 .main-wrappings{
      border-top: none;
      margin-top: 0px;
      padding-top: 25px;
      margin-bottom: 10px;
      margin-right: 10px;
      margin-left: 10px;
      border: 1px solid #ccc;
    background-color:white;
 
}
.main-wrapping h1 {
  font-size: 30px;
  margin: 0px auto;
  text-align: center;
  color: #337AB7;
  margin-top: 5px;
  width: 390px;
  border-radius: 10px;
  background-color: #ECECFA;
  margin-bottom: 5px;
  
  
}
.main-wrapping h2 {
  font-size: 25px;
  margin: 0px auto;
  text-align: center;
  color: #337AB7;
  margin-top: 5px;
  width: 590px;
  border-radius: 5px 5px 5px 5px;
  background-color: #ECECFA;
  margin-bottom: 5px;
  
  
}

 .side-wrapping{
     margin: 0px auto 0px;
  width: 820px;
  border: 1px solid #ccc;
  background-color: #fff;
  margin-top: 5px;
  margin-bottom: 5px;

}

.side-container{
  display: inline-flex;
     margin: 0px auto 0px;
  margin-top: 5px;
    margin-left: 5px;
  width: 400px;
  border: 1px solid #ccc;
  border-radius: 10px 10px 10px 10px;
  background-color: #fff;
  margin-bottom: 5px;

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
  width: 450px;
  border: 1px solid #ccc;
  border-radius: 10px 10px 10px 10px;
  background-color: #ECECFA;
  margin-bottom: 20px;
  
  
}
label
  {
    color:steelblue;
  }

.formheadera{
      font-size: 31px;
      background:#ECECFA;
      text-align:center;
      color:#337AB7;
      margin-top: 10px;
      margin-right: 10px;
      margin-left: 10px;
      height: 40px;

        }

        .formheaderb{
      font-size: 20px;
      background:#ECECFA;
      text-align:center;
      color: #337AB7;
     margin: 10px;

        }

.form2{

  margin: 0px auto 0px;
  border-radius: 10px 10px 10px 10px;
  background-color: #ECECFA;
  border:1px solid #ccc;
  
  
}

/*footer*/
#footer{

background-color:#ECECFA;
color: #337AB7;
text-align: center;
font-size: 30px;
line-height:32px;
}
#footer a{

text-decoration: none;
}


/*service.php table style*/
#myTable {
    
     margin-top: 20px;
     margin-bottom: 20px;
      background: #ECECFA;
      width: 100%;
    border-collapse: collapse; /* Collapse borders*/
    border: 2px solid #E0FFFF; /* Add a grey border */
    font-size: 18px; /* Increase font-size */*/
}
#myTable th {
    text-align: left; 
    padding: 2px; /* Add padding */
    background-color:#ECECFA;
    color: #337AB7;
     border-left: 2px solid #E0FFFF;
}
#myTable td {
    text-align: left; /* Left-align text */
    padding: 2px; /* Add padding */
    border-left: 2px solid #E0FFFF;
}



#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 2px solid #E0FFFF; 
   /*background-color: #FFE4B4;*/

   background-color: #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #FFB6C1;
}

.section1{
  width:20vw;
}
    .submenu{
  background-color:#ececfa;
  display:block;
  padding:4% 4%;
  border-bottom:1px solid #a7a7ad;
  padding-left:4%;
}
.submenu:hover{
  cursor:pointer;
  background-color:#ffffff;
  font-size:24px;
  color:red;
}

section{
  display:flex;
 
}
  </style>

</head>
<body>
    <?php
      include_once('../../service/connection.php');
       $sql ="SELECT * FROM teacher WHERE initials=(SELECT initials FROM login WHERE username='".$_SESSION['username']."')";
       $query =mysqli_query($conn,$sql); 
    ?>
      <nav>
         <div class="topnav1" >
              <a href="index.php"  title="Home" class="btn btn-info" role="button">Home<i class="glyphicon glyphicon-home"></i></a>
                    <a href="mark_page.php"  title="View Marks" class="btn btn-info" role="button">View Mark<i class="glyphicon glyphicon-list-alt"></i></a>
                    <a href="view_student.php" title="Student" class="btn btn-info" role="button">View Student<i class="glyphicon glyphicon-user"></i></a>
                     <!-- <a href="view_staff.php" title="Staff" class="btn btn-info" role="button">Profile<i class="glyphicon glyphicon-user"></i></a> --> 
         </div>
          <div class="float-right1">
          <?php
               ; 
                while( $res =mysqli_fetch_assoc($query)){   
                         echo "welcome ".strtoupper($_SESSION['username'])."";  
                         echo "<img src='../".$res['picture']."' width='30px' height='30px' style='border-radius:30px;'>"; 
                }
                      ?>
          <?php  echo "" .strtoupper($_SESSION['term'])." ".strtoupper($_SESSION['year']).""; ?>
           <a href="logout.php" title="Logout" class="btn btn-info">Logout</a>

         </div>

      </nav>
  <section>
      <div class="col-md5">
         <div class="left-float">
            <div class="image1">
               <img src="../image/pp.png" align="not found">
            </div>
              <div class="side-navi">
                 <a href="profile.php">Change Profile</a>
              </div>
               <div class="side-navi">
                 <a href="view_profile.php">View Profile</a>
              </div>
              <div class="side-navi">
                 <a href="change_pass.php">Change Password</a>
              </div>
              
          </div> 
      
     </div>
    
            <div class="main-wrapping1">
               
              <div class="main-wrapping">                   

<script type="text/javascript">
  $(document).ready(function(){
     validateI();
  
  });



   function validateI(){
      $("#search").on("blur",function(){
          var input_R =$("#search").val();
          
          if(input_R.trim()==""){
              $("#search_output").html("Please submit a search term").css("color","red");
              $("#search").css("border","0.5px solid red");
              $(".modal-footer").html("");
              $("#myModal").modal("show");
              return false;
          }else{
                $("#search").css("border","0.5px solid green");
              var input_R =$("#search").val();
              var term_id =$("#term_id").val();
              var year =$("#year").val();
               $.ajax({
                    url:"search1.php",
                    type:"POST",
                    data:{
                      search:input_R,
                      term_id:term_id,
                      year:year
                    },
                    success:function(d){
                      $("#search_output").html(d).css("color","");
                      $(".modal-footer").html("");
                      $("#myModal").modal("show");
                    }
               });
          }
      })
    }

    $(document).ready(function(){
      $(document).on("click","#logout",function(){
         window.location=("logout.php");
      })
    });
</script>

















    <!-- <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> -->
      <!-- online boootstrap -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css"> -->
      <!-- offline bootstrap -->
      
       <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
       <script type="text/javascript" src="js/bootstrap.js"></script> -->
       
      
  <!-- <style type="text/css">
   
.input-group-addon{
      color: white;
      background-color: #17a2b8;
      border-color: #4cae4c;
    }
   
  .input-group{
      margin-left: 5px;
    }
    .form2 label{
      margin-left: 5px;
    }
  </style>
</head>
<body>

    <header>
      
    </header>

     <nav>
         <div class="topnav" style="margin-left: 10px;">
              <a href="index.php"  title="Home" class="btn btn-info" role="button">Home<i class="glyphicon glyphicon-home"></i></a>
                    <a href="mark_page.php"  title="View Marks" class="btn btn-info" role="button">View Mark<i class="glyphicon glyphicon-list-alt"></i></a>
                    <a href="view_staff.php" title="Staff" class="btn btn-info" role="button">View Staff<i class="glyphicon glyphicon-user"></i></a>
         </div>
         <div class="float-right">
          <?php
                    
                         echo "welcome ".strtoupper($_SESSION['username'])."";  
                         echo "<img src=".$_SESSION['picture']." width='30px' height='30px' style='border-radius:30px;'>"; 
                      ?>
          <?php  echo "" .strtoupper($_SESSION['term'])." ".strtoupper($_SESSION['year']).""; ?>
           <a href="logout.php" style="padding: 4px; margin-right: 10px;" title="Logout" class="btn btn-info" role="button">Logout<i class="glyphicon glyphicon-lock" style="color:#ffc107;"></i></a>
         </div>
     </nav>
</head> -->
  