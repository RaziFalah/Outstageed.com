<?php
$domain = "outstaged.com";
include "db.php";

include "auth_api.php";
if(isset($_POST['submit'])) {
    $status =   $_POST['source'];
    $new = $_SESSION['login_count'] + 1;
    if ($status == "legal") {
    $sql = "UPDATE users set login_count=".$new." WHERE id=".$_SESSION['id']."";
    $_SESSION['login_count'] = $new;
if(mysqli_query($con, $sql)){
    header('Location: ../app');
} else{
    #Active while debugging debugging
    #echo("Error was detected!: " . mysqli_error($con));
    #Active while running
    header('Location: ../errors/sql_error.php');
}
    } else {
        echo"API SITE";
    }




mysqli_close($con);
}
?>