<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'My Course');
define('PAGE', 'mycourse');
include('./stuInclude/header.php'); 
include_once('../dbConnection.php');

 if(isset($_SESSION['is_login'])){
  $stuLogEmail = $_SESSION['stuLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
?>




<div class="container">
     <h2 class="text-center my-4">Type your Email ID, and get your order id</h2>
     <form method="post" action="">
     <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Type your Email ID: </label>
        <div>
          <input class="form-control mx-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off">
        </div>
        <div>
          <input class="btn btn-primary mx-4" value="View" type="submit" 	onclick="">
        </div>
      </div>
     </form>
    </div>
    <div class="container">
    <?php
      if (isset($_POST['ORDER_ID']))
      { 
        $sql = "SELECT * FROM courseorder INNER JOIN course on course.course_id=courseorder.course_id";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          if($_POST["ORDER_ID"] == $row["stu_email"]){ ?>
            <div class="row justify-content-center">
              <div class="col-auto">
               
                <table class="table table-bordered">
                  <tbody>
                      <tr >
                      <tr >
                        <td><label>Course Name</label></td>
                        <td><?php if (isset($row["course_name"]))  echo $row["course_name"]  ?>
                        <td><label>Order Id</label></td>
                        <td><?php if (isset($row["order_id"]))  echo $row["order_id"]  ?>
                        <td><?php if (isset($row["order_date"]))  echo $row["order_date"]  ?>
                        <td><?php if (isset($row["amount"]))  echo $row["amount"]  ?>
                    
                    

                      </td>
                      </tr>
                    </tbody>
                  </table>      
                </div>
              </div>
      <?php
      } } } ?>

  






<div class="container">
     <h2 class="text-center my-4">Type your Order ID, and get the Download Link</h2>
     <form method="post" action="">
     <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Type your Order ID: </label>
        <div>
          <input class="form-control mx-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off">
        </div>
        <div>
          <input class="btn btn-primary mx-4" value="View" type="submit" 	onclick="">
        </div>
      </div>
     </form>
    </div>
    <div class="container">
    <?php
      if (isset($_POST['ORDER_ID']))
      { 
        $sql = "SELECT * FROM courseorder INNER JOIN course on course.course_id=courseorder.course_id";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          $course_purchase_link = $row["course_purchase_link"];
          if($_POST["ORDER_ID"] == $row["order_id"]){ ?>
            <div class="row justify-content-center">
              <div class="col-auto">
                <h2 class="text-center">Find Download Link</h2>
                <table class="table table-bordered">
                  <tbody>
                      <tr >
                        
                      <tr >
                        <td><label>Course_Name</label></td>
                        <td><?php if (isset($row["course_name"]))  echo $row["course_name"]  ?>
                        <td><label>Download Link</label></td>
                        <td><?php if (isset($row["course_purchase_link"]))  echo $row["course_purchase_link"]  ?>
                        
                    </td>
                     
                


                      </tr>
                    </tbody>
                  </table>      
                </div>
              </div>
      <?php
      } } } ?>



 
    <hr/>
   </div>
  </div>
 </div>
  </div>
 </div> <!-- Close Row Div from header file -->
 <?php
include('./stuInclude/footer.php'); 
?>