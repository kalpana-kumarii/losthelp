  
 <?php 
include('include/connection.php');
session_start();

if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
  $loggedin=true;
if(isset($_SESSION['user_email'])){

  $useremail= $_SESSION['user_email'];
$sql = "SELECT * FROM users where user_email= '$useremail'";

$run = mysqli_query($conn, $sql);
if(mysqli_num_rows($run)>0);
  {
    $row = mysqli_fetch_array($run);
    $username = $row['user_name'];
  }
}

}
?>  
<!-- navbar start -->

  <div class="fixed-top">
     <div class="topnav" id="myTopnav">
                  <a href="index.php" class="">logo</a>
                  <a href="index.php" class="active">Home</a>
                  <a href="category.php">Category</a>
                  
                  <a href="about.php">About Us</a>
                  <a href="contact.php">Contact Us</a>
                  <a href="user_post.php">post form</a>
                  <a href="user_profile.php">user profile</a>
                  <a href="post_details.php">post</a>
                
                  <?php
                                if(!isset($_SESSION['user_email']))
                                {
                                  
                                     echo" <a  href='login.php' >Login</a>";
                                }
                                   else{
                                     echo" <a  href='user_profile.php' style='color: blue;' > ".$username." </a>";
                                   }

                           
                   ?>
                      
                        <?php
                                if(isset($_SESSION['user_email']))
                                {
                                  
                                     echo" <a  href='logout.php' >Logout</a>";

                                }
                        ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
        </a>
     </div>

<!-- <div style="padding-left:16px">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
</div> -->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


  <!-- search bar design -->
<div class="container-fluid" style="background: #fff;">  
 <div class="container  mb-0" >
 <div class="row">
  
  <div class="col">
    <input type="text" class="form-control " placeholder="" aria-label="" style="height:38px; width: 75%">
     <button class="btn btn-outline-light  bg-primary" type="button" style=" width: 50px;"><i class="fa fa-search"></i></button>
  </div>
 
 </div>
</div>
</div>
</div>
<!-- navbar end -->