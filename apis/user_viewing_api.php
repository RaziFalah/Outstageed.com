<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";





?>

<?php
 

$url = $actual_link ;
$url_components = parse_url($url);
parse_str($url_components['query'], $params);



include "connection.php";

$q="SELECT * FROM users where id=".$params['id']."" ;
$r=mysqli_query($con, $q);
$row=mysqli_fetch_assoc($r);
if($row["id"][0] >= 1) {
  } else {
 header("location: ../errors/notfound.php");
}
$person = $row['username'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users Where username=".$person." ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Unknown error, please inform support";
    }
} else {
    echo '<!DOCTYPE html>
    <html>
    <head>
    <title>'.$row["username"].'&lsquo;s Portfollo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    </style>
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
    
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
          <i class="fa fa-remove"></i>
        </a>
        <img src="'.$row["image"].'" style="width:45%;" class="w3-round"><br><br>
        <h4><b>'.$row["username"].'</b></h4>
        <p class="w3-text-grey">Mr '.$row["full_name"].'</p>
        <p class="w3-text-grey">'.$row["Location"].'</p>
        <a href="http://'.$row["url"].'/" target="blank_" style="color:blue" class="w3-text-grey">'.$row["url"].'</a>
        
      </div>
      <div class="w3-bar-block">
        <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a>  
        <a href="mailto:'.$row["email"].'" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Contact by email</a>
      </div>
      <div class="w3-panel w3-large">
        <i class="website w3-hover-opacity"></i>
      </div>
    </nav>
    
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">
    
      <!-- Header -->
      <header id="portfolio">
        <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container">
        <h1><b>Portfollo</b></h1>
        <h3 class="w3-text-grey">'.$row["bio"].'</h3>
        <div class="w3-section w3-bottombar w3-padding-16">
        </div>
        </div>
      </header>
      
      <!-- First Photo Grid-->
    
      
      <!-- Second Photo Grid-->
    
    
      <!-- Pagination -->
    
    
      <!-- Images of Me -->
    
    
        
        <center><h4> '?> 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php echo' </h4></center>
        <!-- Progress bars / Skills -->
    
      
      <!-- Contact Section -->
    
    
      <!-- Footer -->
    
    
      </div>
      </footer>
    
    <!-- End page content -->
    </div>
    
    <script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }
     
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
    </script>
    
    </body>
    </html>';
}

$conn->close();
?>

</body>
</html>