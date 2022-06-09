<?php
$domain = "outstaged.com";
include "../db.php";
include "../auth_api.php";
if(isset($_POST['submit'])) {
    $fullname =   $_POST['fullname'];
    $who =   $_SESSION['id'];
    $bio =   $_POST['bio'];
    $custom_website =   $_POST['custom_website'];
    $adr =   $_POST['adr'];
    $bio = str_replace('"', "", $bio);
    $fullname = str_replace('"', "", $fullname);
    $custom_website = str_replace('"', "", $custom_website);
    $adr = str_replace('"', "", $adr);

$sql = 'UPDATE users SET full_name="'.$fullname.'", bio="'.$bio.'", url="'.$custom_website.'", Location="'.$adr.'" WHERE id="'.$who.'"';
if(mysqli_query($con, $sql)){
    setcookie("PROFILE1_FEEDBACK", 1, time() + (86400 * 30), "/");
    header('Location: ../../app');
} else{
    #Active while debugging debugging
    #echo("Error was detected!: " . mysqli_error($con));
    #Active while running
    header('Location: ../../errors/sql_error.php');
}






mysqli_close($con);
}

?>