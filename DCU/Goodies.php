<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="CSS/goodies.css">  

        <style>
        	.container
        	{
        		padding-top:100px;
        		
        	}
			</style>
		<style>
		.buy_button {
			position: relative;
			background-color: #4CAF50;
			border: none;
			font-size: 18px;
			color: #FFFFFF;
			padding: 20px;
			width: 200px;
			text-align: center;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
			text-decoration: none;
			overflow: hidden;
			cursor: pointer;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		}

		.buy_button:after {
			content: "";
			background: #f1f1f1;
			display: block;
			position: absolute;
			padding-top: 300%;
			padding-left: 350%;
			margin-left: -20px !important;
			margin-top: -120%;
			opacity: 0;
			transition: all 0.8s
		}

		.buy_button:active:after {
			padding: 0;
			margin: 0;
			opacity: 1;
			transition: 0s
		}
    .separate
    {
      right:0px;
      float:right;
    }
		</style>
    <!--
      <script>
          function func()
          {
            console.log("HI")
          }
    </script>
  -->
  <?php
  function func()
  {

  }

  ?>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.sidebar a {font-family: "Roboto", sans-serif}
			body,h1,h2,h3,h4,h5,h6,.wide {font-family: "Montserrat", sans-serif;}
		
		.padding-64 light-grey small center
		{
		background: orange;
		}
	</style>
</head>
<body>

	<ul id="nav">
				  <li ><a  href="dc.html">Home</a></li>
				  <li><a class="active" href="Goodies.html">Goodies</a></li>
				  <li><a  href="Clips.html">CLIPS</a></li>
				  <li><a  href="Trivia.html">Trivia</a></li>
				  <li><a href="Books.html">Books</a></li>
          <li><a class="separate" href="CART.php">Proceed to Cart</a></li>
	</ul>

    <p id="credits">Credits:<span>100</span></p> 

    <div class="container">
	<div class="Object">

    			<div class="img">
                	
                	 <img class = "objimg" src="images/T1.jpg" alt="Thanos_Gauntlet" width="200" height="200">   
                </div>
				<div class="description">

        				
        				<h2 >Infinity Gauntlet</h2>
						<ul class="specs" >
	                		<li>Power : Erase half of the world from existense</li>
	                		<li>Weight : 1kg</li>
	                		
                      <button class="buy_button" type="button" onclick="func()"> ADD TO CART</button>
	                		
	                	</ul>
					</div>
			  <div class="price_n_offers">
              		<h3> &#8377 1,999 </h3> 
              		<p> <span class="strike_through_price"> &#8377 2,999</span> <span class="discount"> 33% off</span></p>
              		<p>Offers</p>
              		<ul class="offers">
              			<li>No cost EMI</li>
              			<li>Special Price</li>
              		</ul>
              </div>
			 </div>

    	<div class="Object">

    			<div class="img">
                	
                	<img class = "objimg" src="images/T2.jpg" alt="Thanos_Gauntlet" width="200" height="200">   
                </div>



              <div class="description">

        				
        				<h2 >Infinity Gauntlet</h2>
                	

                    <ul class="specs" >
                      <li>Power : Erase half of the world from existense</li>
                      <li>Weight : 1kg</li>
                      
                      <button class="buy_button" type="button" onclick="func()"> ADD TO CART</button>
                      
                    </ul>
				</div>

              <div class="price_n_offers">
              		<h3> &#8377 1,999 </h3> 
              		<p> <span class="strike_through_price"> &#8377 2,999</span> <span class="discount"> 33% off</span></p>
              		<p>Offers</p>
              		<ul class="offers">
               			<li>No cost EMI</li>
              			<li>Special Price</li>
              		</ul>
              </div>
			 </div>

    	<div class="Object">

    			<div class="img">
                	
                	<img class = "objimg" src="images/T3.jpg" alt="Thanos_Gauntlet" width="200" height="200">   
                </div>



              <div class="description">

        				
        				<h2 >Infinity Gauntlet</h2>
                	
                    <ul class="specs" >
                      <li>Power : Erase half of the world from existense</li>
                      <li>Weight : 1kg</li>
                      
                      <button class="buy_button" type="button" onclick="func()"> ADD TO CART</button>
                      
                    </ul>
				</div>

              <div class="price_n_offers">
              		<h3> &#8377 1,999 </h3> 
              		<p> <span class="strike_through_price"> &#8377 2,999</span> <span class="discount"> 33% off</span></p>
              		<p>Offers</p>
              		<ul class="offers">
               			<li>No cost EMI</li>
              			<li>Special Price</li>
              		</ul>
              </div>
    	</div>

    	<div class="Object">

    			<div class="img">
                	
                	<img class = "objimg" src="images/T4.jpg" alt="Thanos_Gauntlet" width="200" height="200">   
                </div>
				<div class="description">

        				
        				<h2 >Infinity Gauntlet</h2>
                	

                    <ul class="specs" >
                      <li>Power : Erase half of the world from existense</li>
                      <li>Weight : 1kg</li>
                      
                      <button class="buy_button" type="button" onclick="func()"> ADD TO CART</button>
                      
                    </ul>
					</div>

              <div class="price_n_offers">
              		<h3> &#8377 1,999 </h3> 
              		<p> <span class="strike_through_price"> &#8377 2,999</span> <span class="discount"> 33% off</span></p>
              		<p>Offers</p>
              		<ul class="offers">
               			<li>No cost EMI</li>
              			<li>Special Price</li>
              		</ul>
              </div>
			  </div>
		<div class="Object">
		<div class="img">
                	<img class = "objimg" src="images/T5.jpg" alt="Thanos_Gauntlet" width="200" height="200">   
                </div>
				<div class="description">
			  <h2 >Infinity Gauntlet</h2>
                    <ul class="specs" >
                      <li>Power : Erase half of the world from existense</li>
                      <li>Weight : 1kg</li>
                      
                      <button class="buy_button" type="button" onclick="func()"> ADD TO CART</button>
                    </ul>
                  </div>
				<div class="price_n_offers">
              		<h3> &#8377 1,999 </h3> 
              		<p> <span class="strike_through_price"> &#8377 2,999</span> <span class="discount"> 33% off</span></p>
              		<p>Offers</p>
              		<ul class="offers">
               			<li>No cost EMI</li>
              			<li>Special Price</li>
              		</ul>
              </div>
		</div>
	</div>
	<footer class="padding-64 light-grey small center"id="footer">
    
	
      <div class="col s4 justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> THE HALLOWEEN STORE</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> reallyscared@spooky.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official hover-opacity large"></i>
        <i class="fa fa-instagram hover-opacity large"></i>
        <i class="fa fa-snapchat hover-opacity large"></i>
        <i class="fa fa-pinterest-p hover-opacity large"></i>
        <i class="fa fa-twitter hover-opacity large"></i>
        <i class="fa fa-linkedin hover-opacity large"></i>
      </div>
    </div>
  </footer>


    
</body>
</html>


