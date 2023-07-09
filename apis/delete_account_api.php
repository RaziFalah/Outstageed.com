<?php
$domain = "outstaged.com";
include "db.php";

include "auth_api.php";
if(isset($_POST['submit'])) {
    $status =   $_POST['status'];
#DELETE FROM article WHERE username=".$_SESSION['id']."
    if ($status == "legal") {
    $sql = "UPDATE users set state=11 WHERE id=".$_SESSION['id']." ";
if(mysqli_query($con, $sql)){
    header('Location: ../apis/final_logout_api.php');
} else{
    #Active while debugging debugging
    #echo("Error was detected!: " . mysqli_error($con));
    #Active while running
    header('Location: ../errors/sql_error.php');
}
    } else {
        echo"Request could not be fullfilled, request method is illegal.";
    }




mysqli_close($con);
}
?>