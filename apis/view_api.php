<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";





?>

<?php
 

$url = $actual_link ;
$url_components = parse_url($url);
parse_str($url_components['query'], $params);



include "connection.php";

$q="SELECT * FROM article where id=".$params['id']."" ;
$r=mysqli_query($con, $q);
$row=mysqli_fetch_assoc($r);
if($row["id"][0] >= 1) {
  } else {
 header("location: ../errors/infound.php");
}


?>
<?php

include "connection.php";



$im = "SELECT * FROM article where id=".$params['id']."" ;
$records = mysqli_query($con,$im);

start:
$i=0;
while($result = mysqli_fetch_assoc($records)){
echo'

  '.$result['content'].'


';
if ($i==4) {

    goto start; 
  }
  $i++;

  
}
