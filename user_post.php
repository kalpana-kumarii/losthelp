
<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
if(!isset($_SESSION['user_email']))
{
  header("location:login.php");
  exit;
}
}

else{
       $showAlert = false; 
       $showError = false; 
        
        if($_SERVER["REQUEST_METHOD"] == "POST")  {
      
       include('include/connection.php');


       $post_name =mysqli_real_escape_string($conn, $_POST["post_name"]);
       $post_category =mysqli_real_escape_string($conn, $_POST["post_Category"]);
       $post_address =mysqli_real_escape_string($conn, $_POST["post_address"]);
       $post_details =mysqli_real_escape_string($conn, $_POST["post_details"]);


       $poster_name =mysqli_real_escape_string($conn, $_POST["poster_name"]);
       $poster_email =mysqli_real_escape_string($conn, $_POST["poster_email"]);
       $poster_phone_no =mysqli_real_escape_string($conn, $_POST["poster_phone_no"]);
      

       $post_img1=$_FILES['post_img1']['name'];
       $post_img2=$_FILES['post_img2']['name'];
       $post_img3=$_FILES['post_img3']['name'];
       $post_img4=$_FILES['post_img4']['name'];
          
       $temp_name1=$_FILES['post_img1']['tmp_name'];
       $temp_name2=$_FILES['post_img2']['tmp_name'];
       $temp_name3=$_FILES['post_img3']['tmp_name'];
       $temp_name4=$_FILES['post_img4']['tmp_name'];
        move_uploaded_file($temp_name1, "admin/post_img/$post_img1");
        move_uploaded_file($temp_name2, "admin/post_img/$post_img2");
        move_uploaded_file($temp_name3, "admin/post_img/$post_img3");
        move_uploaded_file($temp_name4, "admin/post_img/$post_img4");



      
      $sql=  "INSERT INTO `user_post`(`post_name`, `post_category`, `post_address`, `post_details`, `poster_name`, `poster_email`, `poster_phone_no`,`post_img1`, `post_img2`, `post_img3`, `post_img4`,`post_date`)
       VALUES ('$post_name', '$post_category', '$post_address', '$post_details' ,'$poster_name','$poster_email',  '$poster_phone_no',  '$post_img1', '$post_img2', '$post_img3', '$post_img4', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
           $showAlert = true;
        }
        // else{
        //   $showError = "your post is not uploaded";
        // }

       

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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" href="css/modal.css"> -->
     <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>
  input, textarea,  select{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

       }
</style>
</head>
<body>
<!-- user post form start -->
<div class="container my-5 py-3 px-5 pb-5 " style="border-radius: 10px; background: #ebd9d8; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

   <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your post is successfully uploaded
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


	<form method="post" enctype="multipart/form-data" action="user_post.php">
            		<h3 style="text-align: center;">Lost Things Post Details</h3>
                <div class="row">
                  <div class="col-sm-6">
                          <div class="form-group">
                          <label for="nameInput">Name</label>
                          <input type="text" class="form-control" id="nameInput" name="post_name" placeholder="Enter the name of found Thing">
                        </div>
                  </div>
                   <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="catSelect1"> Select Category</label>
                                  <select class="form-control" id="catSelect1" name="post_Category">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                              </div>
                   </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                       <label for="addressInput1">Address where Found</label>
                       <textarea class="form-control" id="addressInput1" rows="4" name="post_address"></textarea>
                    </div>
                  </div>
                    <div class="col-sm-6">
                       <div class="row">
                                <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="img1">Image 1</label>
                                        <input type="file" class="form-control-file" id="img1" name="post_img1">
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="img2">Image 2</label>
                                        <input type="file" class="form-control-file" id="img2" name="post_img2">
                                      </div>
                                </div>
                                 <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="img3">Image 3</label>
                                        <input type="file" class="form-control-file" id="img3" name="post_img3">
                                      </div>
                                </div>
                                 <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="img4">Image 4</label>
                                        <input type="file" class="form-control-file" id="img4" name="post_img4">
                                      </div>
                                </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">

                          <div class="form-group">
                          <label for="thingInput1">Details about found thing</label>
                            <textarea class="form-control" id="thingInput1" rows="7" name="post_details"></textarea>
                          </div>
                  </div>
                </div>
             
              
             
                
            	
            	 <div class="container py-3" style="background: #fff; border-radius: 5px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      <h3 style="text-align: center;">Your Details to Contact</h3>
            	
            	   <div class="row">
                  <div class="col-sm-4">
                             <label for="postname">Name</label>
                            <input type="text" class="form-control" id="postname" placeholder="Enter Your Name" name="poster_name">
                  </div> 
                   <div class="col-sm-4">
                                   <label for="postaddress">Email Address</label>
                                  <input type="email" class="form-control" id="postaddress" placeholder="Enter Your Email" name="poster_email">

                   </div> 
                    <div class="col-sm-4">
                      
                                   <label for="postphoneno">Phone Number</label>
                                   <input type="text" class="form-control" id="postphoneno" placeholder="Enter Your Phone Number" name="poster_phone_no">
                    </div> 
                 </div>
               </div>

                <br>
                <center><input type="submit" name="post_submit" value="Post" class="btn btn-primary btn-block"></center> 
               
                 
                 
            	   
            	 
   </form>

</div>


<?php
include('include/footer.php');
?>


