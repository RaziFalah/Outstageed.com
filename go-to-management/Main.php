<?php
include '../apis/db.php';
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";





?>

<?php
 

$url = $actual_link ;
$url_components = parse_url($url);
parse_str($url_components['query'], $params);

$place = $params['goto'];

echo $place;

if ($place == "index") {
    echo '<script>window.location.href = "../index.php";</script>';
} elseif ($place == "about") {
    echo '<script>window.location.href = "../index.php";</script>';
} elseif ($place == "contact") {
    echo '<script>window.location.href = "../contact.php";</script>';
} elseif ($place == "info") {
    echo '<script>window.location.href = "../info.php";</script>';
} elseif ($place == "login") {
    echo '<script>window.location.href = "../login.php";</script>';
} elseif ($place == "signup") {
    echo '<script>window.location.href = "../singup.php";</script>';
} elseif ($place == "news") {
    echo '<script>window.location.href = "../news.php";</script>';
}