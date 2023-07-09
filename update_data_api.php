<?php


$dbhosta = 'localhost';
$dbusera = 'root';
$dbpassa = '';
$dbnamea = 'system';
$mysqli1 = new mysqli($dbhosta, $dbusera, $dbpassa, $dbnamea);
printf('');

$sqlb = "SELECT * FROM users WHERE id='".$_SESSION['id']."'";

$resultb = $mysqli1->query($sqlb);
  
if ($resultb->num_rows > 0) {
   while($rowb = $resultb->fetch_assoc()) {
      $_SESSION['username'] = $rowb['username'];
      $_SESSION['email'] = $rowb['email'];
      $_SESSION['password'] = $rowb['password'];
      $_SESSION['create_datetime'] = $rowb['create_datetime'];
      $_SESSION['bio'] = $rowb['bio'];
      $_SESSION['url'] = $rowb['url'];
      $_SESSION['Location'] = $rowb['Location'];
      $_SESSION['full_name'] = $rowb['full_name'];
      $_SESSION['vul_mail'] = $rowb['vul_mail'];
      $_SESSION['vul_sum'] = $rowb['vul_sum'];
      $_SESSION['mail_not'] = $rowb['mail_not'];     
   }
} else {
   printf('Something went wrong at our end, Please contact support and inform the issue.<br />');
}
mysqli_free_result($resultb);


?>