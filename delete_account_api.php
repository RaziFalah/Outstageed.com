<?php
$domain = "outstaged.com";
include "db.php";

include "auth_api.php";
if(isset($_POST['submit'])) {
    $status =   $_POST['status'];

    if ($status == "legal") {
    $sql = "DELETE FROM users WHERE id=".$_SESSION['id']."";
if(mysqli_query($con, $sql)){
    header('Location: ../apis/final_logout_api.php');
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