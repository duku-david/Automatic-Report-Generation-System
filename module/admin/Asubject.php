<?php include('admin_header.php'); ?>
      <style type="text/css">
      	.con input{
      		margin: 2px;
 
      		padding: 1px;
      	}
      	.con {

      	}

      </style>  
<div class="formheadera" ><a href="OAsubject.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
  Teacher's Subject Selection
</div>
<div class="main-wrappings">

  
  <div class="form1 con" >
                 <div class="formheader">A Level Subject</div>
                <form method="POST" action="Asubject.inc.php" enctype="multipart/form-data" onsubmit="return Validate_Olevel()">
                  <?php global $msg; echo $msg; ?>
                  <div class="form-group">
                     <label>Teacher</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <select  name="Reg_no" id="Reg_no" class="form-control"> 
                       <option value="000">Choose Teacher</option>
                  <?php    $sqls ="SELECT * FROM teacher ORDER BY firstname";
                $results =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
                
                      while($row =mysqli_fetch_assoc($results)){
                   
            ?>
                           
                            <option value="<?php echo $row['initials'];?>"><?php echo $row['firstname'];?> <?php echo $row['othername'];?></option>
                            <?php 
                          }
                          ?> 
                      </select>
                    </div>
                    <p id="firstname_error" style="color: red; text-align: center;" ></p>
                  </div>
                 
             <div class="form-group">
                 <label>Subject</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select  name="option" id="Reg_no" class="form-control"> 
                 <option value="000">Select Subject</option>
                  <?php
                $sql ="SELECT * FROM asubject ORDER BY name";
                $result =mysqli_query($conn,$sql);
                
                   while($row =mysqli_fetch_assoc($result))
                  {   
            ?>   
                <option value="<?php echo $row['sub_cod'];?>"><?php echo $row['name'];?> </option> 
		            <?php 
		          }
		          ?> 
               </select>
                  </div>
                    <p id="subject_error" style="color: red; text-align: center;"></p>
              </div>
              
              
               <div class="form-group">
                 <label>Class</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <select   name="term" id="form" onblur="form()" class="form-control">
                        <option value="000">Select Term</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        
                      </select>
                  </div>
                  <p id="form_error" style="color: red; text-align: center;"></p>
              </div>

                  
                  <div class="button-group">
                    <button class="btn btn-warning" type="submit" name="save">Save<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                  
                  
                </form>
                
          </div>
      </div>
         
<script type="text/javascript" src="javascript/Class_Sld_Valid.js">
        
    </script>
 

<?php include('../../footer.php');?>