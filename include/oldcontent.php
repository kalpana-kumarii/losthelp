<?php


$sql="select * from user_post";
    $run=mysqli_query($conn,$sql);
    while($row_product= mysqli_fetch_array($run)){
        $pro_id=$row_product['product_id'];
        $pro_title=$row['product_title'];
        $pro_price=$row_product['product_price'];
        $pro_img2=$row_product['product_img2'];
        echo "


             <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6'>
                    <div class='single-product'>
                        <div class='product-thumb'>
                              <a href='details.php?pro_id=$pro_id'> 
                            <img src='admin_area/product_images/$pro_img2' alt='' class='img-responsive' style='height:200px; width:100%;'></a>
                        </div>
                        <div class='product-title'>
                            <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                            <h6>RS <b>$pro_price</b></h6>
                        </div>
                        <div class='product-btns'>
                            <a href='details.php?pro_id=$pro_id'  class='btn-small mr-2'>View</a>
                            <a href='details.php?pro_id=$pro_id' class='btn-round mr-2'><i class='fa fa-shopping-cart'></i></a>
                            <a href='wishlist.php?pro_id=$pro_id' class='btn-round'><i class='fa fa-heart'></i></a>
                        </div>
                    </div>
                </div>





        ";
    }

    ?>











<!-- <div class="container my-3">
  <div class="row py-3">
    <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
    </div>
    
    <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
    </div>
    
    <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
  
  </div>

 
  </div>

    <div class="row px-3">
    <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
    </div>
    <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
    </div>
    <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
    </div>
    
  
  </div>
</div> -->



<div class="container-fluid mt-5 pt-5 ">
				
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