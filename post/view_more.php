     
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   
<style>

  img{
    width: 400px;
  }
  #more {display: none;}

</style>
</head>
<body>

 <div class="container">
      <center><h1>Your Post</h1></center>
      <div class="row mt-5">
            <div class="col-sm-6 mb-3">
              <div class="card" >
                <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title     
                    <a href="#" class="card-link card-title float-right">contact us</a></h5>

                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<span id="dots">...</span></p>
                                    <span  id="more">
                                      

                                         Some quick example text to build on the card title and make up the bulk
                                         Some quick example text to build on the card title and make up the bulk
                                         Some quick example text to build on the card title and make up the bulk
                                         Some quick example text to build on the card title and make up the bulk
                                         Some quick example text to build on the card title and make up the bulk

                                        <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top py-2" alt="...">
                                         <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top py-2" alt="...">
                                          <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top py-2" alt="..."> <img src="https://source.unsplash.com/1600x900/?mobile,selling" class="card-img-top py-2" alt="...">

                                    </span>
                                   <!--  <a href="#" class="card-link" >view details</a> -->
                                   
                                     <button onclick="myFunction()" id="myBtn" class=" btn btn-light float-right" >View Details</button>
                                     <script>
                                      function myFunction() {
                                        var dots = document.getElementById("dots");
                                        var moreText = document.getElementById("more");
                                        var btnText = document.getElementById("myBtn");

                                        if (dots.style.display === "none") {
                                          dots.style.display = "inline";
                                          btnText.innerHTML = "View Details"; 
                                          moreText.style.display = "none";
                                        } else {
                                          dots.style.display = "none";
                                          btnText.innerHTML = "<span  class=' btn float-none'>Read less</span>"; 
                                          moreText.style.display = "inline";
                                        }
                                      }
                                      </script>
                                                      
                </div>
              </div>
            </div>
      </div>
            

