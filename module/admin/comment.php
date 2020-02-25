<?php include('header.php');?>

<div class="main-container">
        <div class="main-wrapping">
              <div class="form1">
                 <div class="formheader"><marquee direction="right">Comment</marquee></div>
                 <?php global $error; echo $error;?>
                <form method="post" action="comment_action.php" onsubmit=" return Validate_comment()">
                  <label>Name<input style="padding: 7px; width: 360px; margin-left: 8px;" type="text" id="names" name="names" onblur="uid_validate()" ></label>
                  <p id="name_error" style="color: red;"></p>
                   <label>Message<textarea type="text" cols="45" rows="10" style="margin-left: 8px;" id="comment" name="comment" onblur="comment_validate()"></textarea></label>
                   <p id="comment_error" style="color: red;"></p>
                 
                  <div class="button-group">
                    <button class="btn btn-warning" type="submit" name="save_comment">comment<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                </form>
                
          </div>
        </div>
  </div>
     
     <script type="text/javascript" src="javascript/comment_val.js">
        
    </script>
    
     
<?php include('footer.php');?>
