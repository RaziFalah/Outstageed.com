<?php
$domain = "outstaged.com";
include "../db.php";
include "../auth_api.php";
if(isset($_POST['submit'])) {
    $new_username =   $_POST['username'];
    $who =   $_SESSION['id'];
    $new_username = str_replace('"', "", $new_username);
    $new_username = str_replace("'", '', $new_username);
    $new_new_username = str_replace(' ', '', $new_username);


$sql = 'UPDATE users SET username="'.strtolower($new_new_username).'" WHERE id="'.$who.'"';
if(mysqli_query($con, $sql)){
    setcookie("PROFILE2_FEEDBACK", 1, time() + (86400 * 30), "/");
    header('Location: ../../app');
} else{
    #Active while debugging debugging
    #echo("Error was detected!: " . mysqli_error($con));
    #Active while running
    setcookie("Error_feedback", 10, time() + (86400 * 30), "/");
    header('Location: ../../app/settings.php#account');
    
}






mysqli_close($con);
}

?>