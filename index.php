<?php




include "header.php";


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/1.png");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<style>
    .centered {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px blue, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px blue;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px blue, 0 0 40px #ff4da6, 0 0 50px blue, 0 0 60px #ff4da6, 0 0 70px blue, 0 0 80px #ff4da6;
  }
}
* {
  box-sizing: border-box;
}
</style>

<?php

include "apis/health_check_api.php";

?>

<section id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp" data-wow-delay="0.4s">Hello, we are Outstageed.com</h1>
          			<h3 class="wow fadeInUp" data-wow-delay="0.6s">Come on flok! let's think </strong> togother</h3>
          			<a href="info.php" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">More info</a>
        			<a href="signup.php" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="0.8s">Sign Up!</a>
				</div>
			</div>

		</div>
	</div>		
</section>
<style>
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<body>



<center>
    
</center>

</body>
</html>
