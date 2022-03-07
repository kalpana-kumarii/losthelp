<?php
 include_once('include/connection.php');

    $sql="select * from user_post";
    $run=mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($run)){

        $post_id=$row['post_id'];
        $post_name=$row['post_name'];
        $post_category=$row['post_category'];
        $post_address=$row['post_address'];
        $post_details=$row['post_details'];
        $post_img1=$row['post_img1'];
        $post_img2=$row['post_img2'];
        $post_img3=$row['post_img3'];
        $post_img4=$row['post_img4'];
        $poster_name=$row['poster_name'];
        $poster_email=$row['poster_email'];
        $poster_phone_no=$row['poster_phone_no'];


?>