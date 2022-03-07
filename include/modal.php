
<?php
// User login
include'connection.php';

if (isset($_POST['login_user'])) {
      session_start();
    // Data sanitization to prevent SQL injection
    $username = mysqli_real_escape_string($lostworld, $_POST['useremail']);
    $password = mysqli_real_escape_string($lostworld, $_POST['password']);
   
    // Error message if the input field is left blank
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
   
    // Checking for the errors
    if (count($errors) == 0) {
          
        // Password matching
        $password = md5($password);
          
        $query = "SELECT * FROM users WHERE user_email=
                '$useremail' AND password='$password'";
        $results = mysqli_query($lostworld, $query);
   
        // $results = 1 means that one user with the
        // entered username exists
        if (mysqli_num_rows($results) == 1) {
              
            // Storing username in session variable
            $_SESSION['username'] = $username;
              
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
              
            // Page on which the user is sent
            // to after logging in
            header('location: index.php');
        }
        else {
              
            // If the username and password doesn't match
            array_push($errors, "Username or password incorrect"); 
        }
    }
}
   
?>


<?php 
include_once("connection.php");
if(isset($_SESSION['user_email']))
{
  $useremail= $_SESSION['user_email'];
$sql = "SELECT * FROM users where user_email= '$useremail'";

$run = mysqli_query($conn, $sql);
if(mysqli_num_rows($run)>0);
  {
    $row = mysqli_fetch_array($run);
    $username = $row['user_name'];
  }
}
?>



















  <link rel="stylesheet" href="css/modal.css">

<!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/img_avatar2.png" alt="Avatar" class="avatar" style="width:50px; hright:50px;">
    </div>
             
    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="useremail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="login_user">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn ml-5">Cancel</button> -->
      <!-- <span class="psw" >Forgot <a href="#">password?</a></span> -->
      <button type="button"   class="cancelbtn btn btn-light bg-light align-self-center">Forget Password</button>
      <button type="button"  class="cancelbtn btn btn-light bg-light align-self-center text-primary " onClick="window.location = 'include/sign_up.php'"  >New User? Sign Up here</button>

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>