<?php

include("include/header.php");


?>

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="pic1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Price</h3>
          <p>Rs.65,000/-</p>
        </div>      
      </div>

      <div class="item">
        <img src="pic2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Price</h3>
          <p>Rs.70,000/-</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="pic3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Price</h3>
          <p>Rs.50,000/-</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="pic4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Price</h3>
          <p>Rs.60,000/-</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center" style="color:white">    
  <h3 >Manufacturing Furniture with NaturalWood</h3><br>
  <p>The increase in the demand for reasonably priced furniture has placed a premium on 
  the economical use of wood. Natural wood is extremely wasteful as a material. Hardly more
  than 25 percent of the natural substance of a tree actually goes into the furniture made of 
  solid wood. When account is taken of the loss in sawdust in conversion from the tree trunk 
  (taking off the outer slab portions and sapwood) and the further loss in bringing the lumber 
  to usable size in the workshop (the offcuts, waste in sawing shapes, in turning, in planing,
  cutting joints, and final cleaning up), it becomes evident that much more wood is wasted than used.</p>
  <br>
  <h3 align="left">Latest Products</h3>
  <div class="row" style="color:white">
	 <a href="allproduct.html">
    <div class="col-sm-4">
     <img src="pic1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Full Set</p>
    </div>
    <div class="col-sm-4"> 
      <img src="pic2.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Solid wood Bad</p>    
    </div>
	<div class="col-sm-4"> 
      <img src="pic3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Simple Wood work</p>    
    </div>
    </a>
  </div>
</div>


<?php

include("includes/footer.php");


?>