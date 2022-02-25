<?php
include "connection.php";
include "../apis/auth_api.php";
include "header.php";
$un = $_SESSION['username'];
setcookie("last_user", $un, time() + (2.628e+6 * 30), "/");


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