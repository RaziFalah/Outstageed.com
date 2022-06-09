<?php
include "connection.php";
include "../apis/auth_api.php";
include "header.php";
$un = $_SESSION['username'];
setcookie("last_user", $un, time() + (2.628e+6 * 30), "/");

if ($_SESSION['login_count'] == 1){
    header("Location: settings.php");
}elseif(!isset($_COOKIE["PROFILE1_FEEDBACK"])) {
    echo"";
  } else {
     include "../snackbars/updated.html";
     setcookie('PROFILE1_FEEDBACK', null, -1, '/'); 
  }


  if(!isset($_COOKIE["PROFILE2_FEEDBACK"])) {
    echo "";
  } else {
     include "../snackbars/usernamed.html";
     setcookie('PROFILE2_FEEDBACK', null, -1, '/'); 
  }


echo '
<center>
<div class="cards">
    
';

include "fetcher.php";

echo'
   
    </div>
</center>

';
?>