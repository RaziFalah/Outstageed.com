<?php
include "db.php";
include "auth_api.php";
if(isset($_POST['submit'])) {

    $title =   $_POST['title'];
    $desc = $_POST['Description'];;
    $cat = $_POST['option'];
    $content = $_POST['content'];
    mysqli_real_escape_string($con, $content);
    $keyword = $_POST['option'];
    $username = $_SESSION["username"];
    $timed = date("Y/m/d");
    $hosted_time = date('Y-m-dHis');
    $hosted_pic = $username . $hosted_time . ".png";
    $intoken = date('Y-m-dHis');
    $str=rand();
    $imtoken = md5($str);
    $iltoken = substr($username, -1);
    $token = $intoken . $imtoken;

    $sql = "INSERT INTO article (title, descr, keyword, category, content, reason, timed, username, hosted_pic, token) VALUES ('$title', '$desc', '$keyword', '$cat', '$content', '$timed', '$timed', '$username', '$hosted_pic', '$token')";
if(mysqli_query($con, $sql)){
    header('Location: ../app');
} else{
    header('Location: ../errors/sql_error.php');
}


mysqli_close($con);
}
?>
