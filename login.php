<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'include/connection.php';
    $useremail = $_POST["useremail"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from `users` where user_email='$useremail'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_email'] = $useremail;
                header("location: index.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
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
</style>
<body>
     <div class="container my-5 py-3 px-5 pb-5 "  style="border-radius: 10px; background: #ebd9d8; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
<div  class="container my-3">
     <?php
     if(isset($_SESSION['msg'])){
     echo $_SESSION['msg'];
         }
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
     <center><img src="img/img_avatar2.png" alt="Avatar" class="avatar" style="width:50px; height:50px; border-radius: 50%;"></center> 
  </div>
   
             
    <div class="container">

       
                    <h1 class="text-center">Login to Lostworld</h1>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" class="form-control" id="username" name="useremail" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                   <center><button type="submit" class="btn btn-primary">Login</button></center> 
                     
                  
               
    </div>

    <div class="container my-2 py-2" >
      <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn ml-5">Cancel</button> -->
      <!-- <span class="psw" >Forgot <a href="#">password?</a></span> -->
       <center>
      <button type="button"   class="cancelbtn btn btn-light bg-light mr-3 mb-2 ">Forget Password</button>
      <button type="button"  class="cancelbtn btn btn-light bg-light align-right text-primary mb-2  " onClick="window.location = 'sign_up.php'"  >New User? Sign Up here</button>

       </center>

    </div>
  </form>
</div>
</div>

<?php include('include/footer.php'); ?>











