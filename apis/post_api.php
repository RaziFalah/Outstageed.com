<?php
include "db.php";
include "auth_api.php";
if(isset($_POST['submit'])) {

    $title =   $_POST['title'];
    $desc = $_POST['desc'];
    $cat = $_POST['option'];
    $content = $_POST['content'];
    $keyword = $_POST['option'];
    $username = $_SESSION["username"];
    $timed = date("Y/m/d");

    $sql = "INSERT INTO article (title, descr, keyword, category, content, reason, timed, username) VALUES ('$title', '$desc', '$keyword', '$cat', '$content', '0', '$timed', '$username')";
if(mysqli_query($con, $sql)){
    echo'<meta http-equiv="refresh" content="time; URL=../app" />';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
}
?>
