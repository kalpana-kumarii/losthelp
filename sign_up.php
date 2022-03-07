<?php
session_start();
$showAlert = false; 
$showError = false; 
// $exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'include/connection.php';   
    
    $username = mysqli_real_escape_string($conn,  $_POST["username"]); 
    $useremail =mysqli_real_escape_string($conn,   $_POST["useremail"]); 
    $usermobno = mysqli_real_escape_string($conn,  $_POST["usermobno"]); 
    $password = mysqli_real_escape_string($conn,  $_POST["password"]); 
    $cpassword =mysqli_real_escape_string($conn, $_POST['password']);
    $gender=mysqli_real_escape_string($conn, $_POST["gender"]);
    $country=mysqli_real_escape_string($conn,  $_POST["country"]);
   
            
    
  // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE user_email = '$useremail'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Email Already Exists";
    }
    else{
        // $exists = false; 
        if($password == $cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO `users` ( `user_name`,`user_email`,`user_mob_no`,`country`,`password`,`gender`, `date`)
            VALUES ('$username','$useremail','$usermobno','$country', '$hash','$gender', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result){
             
             
                $showAlert = true;
            }
           
        }
        else{
            $showError = "Passwords do not match";
            echo "Failed".mysql_error();
        }
    }

}

 

    
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  width: 100%;
/* display: flex;
 justify-content: center;*/
  margin: auto;

  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 100px ;
} 

/* style inputs and link buttons */

 .btn1{
 
  font-size: 30px;
  border-radius: 40px;
  width: 50px;
  padding: 10px;
  margin-left: 5px;
  text-decoration: none;
   display: flex;
   justify-content: center;
   float: left;

 }
input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}


</style>
</head>
<body>

      


  <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can 
        <a href="login.php" class="btn btn-primary btn-sm">login</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>


 <div class="container">
   <center><img src="img/img_avatar2.png"  alt="Logo" style="width: 100px; height: 100px; border-radius: 50%;" ></center>
      <h2 style="text-align:center">Sign Up with Social Media or Manually</h2>
   <br>

 </div>
<div class="container mb-3 ">
     <form  action="sign_up.php" method="POST">

   <div class="row">

     <div class="col-sm-6">

         
            <label for="InputName"> Your Name</label>
            <input type="text" class="form-control"  name="username" placeholder="Enter name" required="">
           
         
       
     </div>

     <div class="col-sm-6">
        
         
            <label for="InputEmail">Email address</label>
            <input type="email" class="form-control"  name="useremail" placeholder="Enter email" required="">
           
        
       
     </div>
   </div>

   <div class="row">
       <div class="col-sm-6">
        
            <label for="InputMobileNumer">Mobile Number</label>
            <input type="text" class="form-control" name="usermobno" placeholder="Enter mobile number" >
           
         
         
       
     </div>
      <div class="col-sm-6">
        <br>
              <label for="InputGender ">Select Your Gender</label>
  
        
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="gender"  value="male" >
            <label class="form-check-label" for="inlineRadio1">male</label>
          </div>
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="gender"  value="female" >
            <label class="form-check-label" for="inlineRadio1">female</label>
          </div>
         

                 
     </div>
   </div>

   <div class="row">
       <div class="col-sm-6">
            <label for="InputCountry">Your ountry</label>
         <select class="form-control" name="country"  >
           
           
            <option>india</option>
             <option>usa</option>

          </select>
          <!--   <label for="exampleInputEmail1">Your country</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
           
     
       
     </div>
       <div class="col-sm-6">
              <label for="InputState">Your State</label>
         <select class="form-control" required="">
           
           
            <option>Bihar</option>
             <option>usa</option>

          </select>
        
           <!--  <label for="exampleInputEmail1">state</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
           
       
       
     </div>
   </div>
   <div class="row">
           <div class="col-sm-6">
               <label for="exampleInputEmail1">Enter Password</label>
            <input type="password" class="form-control"  name="password" placeholder="Enter new password" required="">

           </div>
             <div class="col-sm-6">
               <label for="exampleInputEmail1">Confirm Password</label>
            <input type="password" class="form-control"  name="cpassword" placeholder="Enter confirm password" required="">

           </div>
     
   </div>
    <div class="row mt-4">
        <div class="col-sm-12">
          <center>  <input type="submit" class="btn btn-success" name="sign_up" value="Sign Up">  </center>
     
     </div>
    </div>


   <div class="row">
        <div class="col-sm-6" style="">

           <br>
         <div class="row">
          <div class="col-sm-6">
            <h4>sign up with social acccont</h4>
          </div>
           <div class="col-sm-6">
               <a href="#" class="fb btn1">
                <i class="fa fa-facebook fa-fw"></i>
              </a>

              <a href="#" class="twitter btn1">
                <i class="fa fa-twitter fa-fw"></i> 
              </a>
              <a href="#" class="google btn1"><i class="fa fa-google fa-fw">
                </i> 
              </a>
            </div>
         </div>
         
          </div>

           <div class="col-sm-6">
              <br>
              <span> Already Account ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php" class=" btn"> Login
              </a> 
              <a href="#" class=" btn">Forget Password
              </a>


   </div>
   <div class="row"></div>
   <div class="row"></div>
</form>
</div>

</body>
</html>
