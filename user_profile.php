

<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
if(!isset($_SESSION['user_email']))
{
  header("location:login.php");
  exit;
}
}
?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" href="css/modal.css"> -->
     <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>
</style>
</head>
<body>
      <br>     <center><h1>Your Account</h1></center>
          
 <center>
<div class="container my-5 px-4">
<div class="row">
  <div class="col-sm-12  my-1  "> <img src="../img/img_avatar2.png " alt="user profile" class="" style="height:150px; width: 150px; border-radius:75px;"></div>
  <div class="col-sm-12 bg-secondary my-1 text-white"><span>Your Details</span></div><hr>
  <div class="col-sm-12 bg-secondary my-1 "><span>Edit Profile</span></div><hr>
  <div class="col-sm-12 bg-secondary my-1 "><span>Your Post</span></div><hr>
  <div class="col-sm-12 bg-secondary my-1 "><span>Log Out</span></div><hr>
</div>

</div>
</center>

<div class="container mt-5 pt-5 ">
         <center><h1>Your Post</h1></center>
      <div class="row mt-5">
            <div class="col-sm-6 mb-3">
              <div class="card" >
                <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">view details</a>
                                    <a href="#" class="card-link">contact us</a>
                
                </div>
              </div>
            </div>
                        <div class="col-sm-6">
              <div class="card" >
                <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                
                </div>
              </div>
            </div>
          
      </div>
                    
            <div class="row">
            <div class="col-sm-6 mb-3">
              <div class="card" >
                <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">view details</a>
                                    <a href="#" class="card-link">contact us</a>
                
                </div>
              </div>
            </div>
                        <div class="col-sm-6">
              <div class="card" >
                <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                
                </div>
              </div>
            </div>
          
      </div>
                    
</div>

 <?php
 include('../include/footer.php');
 ?>