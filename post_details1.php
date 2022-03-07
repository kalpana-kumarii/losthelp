<style type="text/css">
	img{
		width: 200px;
	}



	   
        .main_view{
            width: 60%;
            height: 25rem;
        }
        .main_view img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .side_view{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .side_view img{
            width: 9rem;
            height: 7rem;
            object-fit: cover;
            cursor: pointer;
            margin:0.5rem;
        }
</style>



<?php
include('include/header.php');
?>
<br><br>
<div class="container mt-5 py-5">
	
	<div class="row">
		<div class="col">
			<h1>image area</h1>
			<div class="row">
				<div class="col">

                          <!-- Main view of our gallary -->
				        <div class="main_view">
				            <img src="https://source.unsplash.com/1600x900/?thing,people" id="main" alt="IMAGE">
				        </div>
				  
				        <!-- All images with side view -->
				        <div class="side_view">
				            <img src="https://source.unsplash.com/1600x900/?thing,people" onclick="change(this.src)">
				            <img src="https://source.unsplash.com/1600x900/?tree" onclick="change(this.src)">
				            <img src="https://source.unsplash.com/1600x900/?mobile" onclick="change(this.src)">
				            <img src="https://source.unsplash.com/1600x900/?thing,people" onclick="change(this.src)">

				        </div>

					
			</div>
		</div>
		<div class="col">
			 <h1>details</h1>
		</div>
	</div>
	


</div>




 
    <!-- Container for our gallery -->
    <div class="container">
          
       
    </div>
  
    <script type="text/javascript">
        const change = src => {
            document.getElementById('main').src = src
        }
    </script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>