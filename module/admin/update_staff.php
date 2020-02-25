
  <?php include('admin_header.php'); ?>

           <div class="main-wrappings">
             <div class="formheader">Staff Update Form</div>
              <div class="form1">
                
                <form method="post" action="update_staff.inc.php" enctype="multipart/form-data" onsubmit="return Validate()">
                  <?php global $msg; echo $msg; ?>
                   <?php 
              // if(isset($_GET['update'])){
                include('connection.php');
                $uid = $_GET['update'];
                $result = mysqli_query($conn,"SELECT * FROM staff WHERE staff_id='".$uid."'");
                while ($row = mysqli_fetch_assoc($result)) {
                  
              ?>

                  <div>
                     <label>First Name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname'];?>" onblur="Validate_firstname()">
                    </div>
                    <p id="firstname_error" style="color: red; text-align: center;" ></p>
                  </div>
                  <div>
                     <label>Other Name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="othername" id="othername" value="<?php echo $row['othername'];?>" onblur="Validate_othername()">
                    </div>
                    <p id="othername_error" style="color: red; text-align: center;" ></p>
                  </div>
                  <div>
                     <label>username</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="username" id="username" value="<?php echo $row['username'];?>" onblur="Validate_name()">
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
                     <label>Privilliage</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name="privillage" id="privillage" onblur="Validate_privillage()">
                         <option value="000">Select privilliage</option>  
                               <option value="standard">standard</option>
                               <option value="administrator">administrator</option>
                              

                        </select>
                     
                    </div>
                    <p id="privilliage_error" style="color: red; text-align: center;" ></p>
                  </div>
                  <div>
                        <label>Initials</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                          <input type="text" name="initials" id="Initials" value="<?php echo $row['initials'];?>" onblur="initials()">
                             
                        </div>
                        <p id="initial_error" style="color: red; text-align: center;" ></p>
                    </div>

                 <div>     
                              <label> Select Your Picture</label><br>
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                <input type="file" style="margin-left: 0px; border: 0.5px solid gray;" name="picture" id="picture" accept="image/" onchange="Validate_image()" >
                               </div>
                              <p id="picture_error" style=" text-align: center; margin-top: 3px;" >(Only jpg,jpeg,png,jif image format allowed!)</p> 

                    </div>
                  <div  style="display: inline-block;">
                    <button class="btn btn-warning" type="submit" name="updates">Update<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                  <div style="float: right; margin-right: 50px;">
                      <a href="view_staff.php" class="btn btn-primary">Back</a>
                  </div>
                  <input type="hidden" name="id"  value="<?php echo $row['staff_id'];?>">
                </form>
              <?php     
                }
              // }
          ?>
                
   
</div>
     
     <script type="text/javascript" src="javascript/Gen_Validation.js">
        
    </script>
     
<?php include('footer.php');?>
