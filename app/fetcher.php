<?php
    if(!isset($_SESSION["username"])) {
        header("Location: ../login.php");
        exit();
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


		<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet"> 
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <?php
include "connection.php";

$im = "SELECT * FROM article ORDER BY RAND() limit 10000" ;
$records = mysqli_query($con,$im);



start:
$i=0;
while($result = mysqli_fetch_assoc($records)){
    $content =  mb_strimwidth($result['content'], 0, 30, "...");
	$ind = $result['username'];

echo'



<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900);
 body {
	 background: #dce1df;
	 color: #4f585e;
	 font-family: "Source Sans Pro", sans-serif;
	 text-rendering: optimizeLegibility;
}
 a.btn {
	 background: #0096a0;
	 border-radius: 4px;
	 box-shadow: 0 2px 0px 0 rgba(0,0,0,0.25);
	 color: #ffffff;
	 display: inline-block;
	 padding: 6px 30px 8px;
	 position: relative;
	 text-decoration: none;
	 transition: all 0.1s 0s ease-out;
}
 .no-touch a.btn:hover {
	 background: #00a2ad;
	 box-shadow: 0px 8px 2px 0 rgba(0,0,0,0.075);
	 transform: translateY(-2px);
	 transition: all 0.25s 0s ease-out;
}
 .no-touch a.btn:active, a.btn:active {
	 background: #008a93;
	 box-shadow: 0 1px 0px 0 rgba(255,255,255,0.25);
	 transform: translate3d(0,1px,0);
	 transition: all 0.025s 0s ease-out;
}
 div.cards {
	 margin: 80px auto;
	 max-width: 960px;
	 text-align: center;
}
 div.card {
	 background: #ffffff;
	 display: inline-block;
	 margin: 8px;
	 max-width: 300px;
	 perspective: 1000;
	 position: relative;
	 text-align: left;
	 transition: all 0.3s 0s ease-in;
	 width: 300px;
	 z-index: 1;
}
 div.card img {
	 max-width: 300px;
}
 div.card .card__image-holder {
	 background: rgba(0,0,0,0.1);
	 height: 0;
	 padding-bottom: 75%;
}
 div.card div.card-title {
	 background: #ffffff;
	 padding: 6px 15px 10px;
	 position: relative;
	 z-index: 0;
}
 div.card div.card-title a.toggle-info {
	 border-radius: 32px;
	 height: 32px;
	 padding: 0;
	 position: absolute;
	 right: 15px;
	 top: 10px;
	 width: 32px;
}
 div.card div.card-title a.toggle-info span {
	 background: #ffffff;
	 display: block;
	 height: 2px;
	 position: absolute;
	 top: 16px;
	 transition: all 0.15s 0s ease-out;
	 width: 12px;
}
 div.card div.card-title a.toggle-info span.left {
	 right: 14px;
	 transform: rotate(45deg);
}
 div.card div.card-title a.toggle-info span.right {
	 left: 14px;
	 transform: rotate(-45deg);
}
 div.card div.card-title h2 {
	 font-size: 24px;
	 font-weight: 700;
	 letter-spacing: -0.05em;
	 margin: 0;
	 padding: 0;
}
 div.card div.card-title h2 small {
	 display: block;
	 font-size: 18px;
	 font-weight: 600;
	 letter-spacing: -0.025em;
}
 div.card div.card-description {
	 padding: 0 15px 10px;
	 position: relative;
	 font-size: 14px;
}
 div.card div.card-actions {
	 box-shadow: 0 2px 0px 0 rgba(0,0,0,0.075);
	 padding: 10px 15px 20px;
	 text-align: center;
}
 div.card div.card-flap {
	 background: #d9d9d9;
	 position: absolute;
	 width: 100%;
	 transform-origin: top;
	 transform: rotateX(-90deg);
}
 div.card div.flap1 {
	 transition: all 0.3s 0.3s ease-out;
	 z-index: -1;
}
 div.card div.flap2 {
	 transition: all 0.3s 0s ease-out;
	 z-index: -2;
}
 div.cards.showing div.card {
	 cursor: pointer;
	 opacity: 0.6;
	 transform: scale(0.88);
}
 .no-touch div.cards.showing div.card:hover {
	 opacity: 0.94;
	 transform: scale(0.92);
}
 div.card.show {
	 opacity: 1 !important;
	 transform: scale(1) !important;
}
 div.card.show div.card-title a.toggle-info {
	 background: #ff6666 !important;
}
 div.card.show div.card-title a.toggle-info span {
	 top: 15px;
}
 div.card.show div.card-title a.toggle-info span.left {
	 right: 10px;
}
 div.card.show div.card-title a.toggle-info span.right {
	 left: 10px;
}
 div.card.show div.card-flap {
	 background: #ffffff;
	 transform: rotateX(0deg);
}
 div.card.show div.flap1 {
	 transition: all 0.3s 0s ease-out;
}
 div.card.show div.flap2 {
	 transition: all 0.3s 0.2s ease-out;
}
 
</style>

<div class="card">
<div class="card__image-holder">
  <img href="view.php?id='.$result['id'].'" weight="300" height="225" class="card__image" src="https://source.unsplash.com/300x225/?'.$result['category'].'" alt="cat" />
</div>
<div class="card-title">
  <h2>
  <a href="view.php?id='.$result['id'].'">'.$result['title'].'</a>
      <small><a href="username.php?id='.$ind.'">View author profile</a> </small>
  </h2>
</div>
<div class="card-flap flap1">
  <div class="card-description">
  '.$result['descr'].'
  </div>
  <div class="card-flap flap2">
    <div class="card-actions">
      <a href="view.php?id='.$ind.'" class="btn">Read more</a>
    </div>
  </div>
</div>
</div>







';





if ($i==4) {

    goto start; 
  }
  $i++;
}







?>
<noscript>
<meta http-equiv="Refresh" content="0; url='<?php include "domain.php"; ?>/errors/nojs.php'" />
</noscript>
<script>
  console.log("Javascript is enabled [Good]");
</script>
<script>
  if(navigator.cookieEnabled) {
    console.log("cookies are enabled [Good]")
}
else {
	window.location.href = "<?php include "domain.php"; ?>/errors/nocookies.php";
}
</script>
         <style>
             

.hero {
  padding: 6.25rem 0px !important;
  margin: 0px !important;
}
.cardbox {
  border-radius: 3px;
  margin-bottom: 20px;
  padding: 0px !important;
}

/* ------------------------------- */
/* Cardbox Heading
---------------------------------- */
.cardbox .cardbox-heading {
  padding: 16px;
  margin: 0;
}
.cardbox .btn-flat.btn-flat-icon {
 border-radius: 50%;
 font-size: 24px;
 height: 32px;
 width: 32px;
 padding: 0;
 overflow: hidden;
 color: #fff !important;
 background: #b5b6b6;
 
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.cardbox .float-right .dropdown-menu{
  position: relative;
  left: 13px !important;  
}
.cardbox .float-right a:hover{
  background: #f4f4f4 !important;	
}
.cardbox .float-right a.dropdown-item {
  display: block;
  width: 100%;
  padding: 4px 0px 4px 10px;
  clear: both;
  font-weight: 400;
  font-family: 'Abhaya Libre', serif;
  font-size: 14px !important;
  color: #848484;
  text-align: inherit;
  white-space: nowrap;
  background: 0 0;
  border: 0;
}

/* ------------------------------- */
/* Media Section
---------------------------------- */
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.media .mr-3{
  margin-right: 1rem !important;
}
.media img{
  width: 48px !important;
  height: 48px !important;
  padding: 2px;
  border: 2px solid #f4f4f4;
} 
.media-body {
  -ms-flex: 1;
  flex: 1;
  padding: .4rem !important;
}
.media-body p{
  font-family: 'Rokkitt', serif;	
  font-weight: 500 !important;
  font-size: 14px;
  color: #88898a;
}
.media-body small span{
  font-family: 'Rokkitt', serif;	
  font-size: 12px;
  color: #aaa;
  margin-right: 10px;
}


/* ------------------------------- */
/* Cardbox Item
---------------------------------- */
.cardbox .cardbox-item {
    position: relative;
    display: block;
}
.cardbox .cardbox-item img{
}
.img-responsive{
    display: block;
    max-width: 100%;
    height: auto;
}	
.fw {
    width: 100% !important;
	height: auto;
}


/* ------------------------------- */
/* Cardbox Base
---------------------------------- */
.cardbox-base{
 border-bottom: 2px solid #f4f4f4;
}	
.cardbox-base ul{
 margin: 10px 0px 10px 15px!important; 
 padding: 10px !important;
 font-size: 0px;	
  display: inline-block;
}
.cardbox-base li {
  list-style: none;
  margin: 0px 0px 0px -8px !important;
  padding: 0px 0px 0px 0px !important;
  display: inline-block;
}

.cardbox-base li a{
  margin: 0px !important;
  padding: 0px !important;
}
.cardbox-base li a i{
 position: relative;
 top: 4px; 
 font-size: 16px;
 color: #8d8d8d;
 margin-right: 15px;
}
.cardbox-base li a span{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 margin-left: 20px;
 position: relative;
 top: 5px; 
}
.cardbox-base li a em{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 position: relative;
 top: 3px; 
}
.cardbox-base li a img{
  width: 25px;
  height: 25px;
  margin: 0px !important;
  border: 2px solid #fff;
}


/* ------------------------------- */
/* Cardbox Comments
---------------------------------- */
.cardbox-comments{
  padding: 10px 40px 20px 40px !important;
  font-size: 0px;	
  text-align: center;
  display: inline-block;
}
.cardbox-comments .comment-avatar img{
  margin-top: 1px;
  margin-right: 10px;
  position: relative;
  display: inline-block;
  text-align: center;
  width: 40px;
  height: 40px;
}
.cardbox-comments .comment-body {
  overflow: auto;
}
.search {
 position: relative;
 right: -60px;
 top: -40px;
 margin-bottom: -40px;
 border: 2px solid #f4f4f4;	
 width: 100%;
 overflow: hidden;
}
.search input[type="text"] {
 background-color: #fff;
 line-height: 10px;
 padding: 15px 60px 20px 10px;
 border: none;
 border-radius: 4px;
 width: 350px;
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 height: inherit;
 font-weight: 700;
}
.search button {
 position: absolute;
 right: 0;
 top: 0px;
 border: none;
 background-color: transparent;
 color: #bbbbbb;
 padding: 15px 25px;
 cursor: pointer;
 
 display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.search button i {
 font-size: 20px;
 line-height: 30px;
 display: block;
}


/* ------------------------------- */
/* Author
---------------------------------- */
.author a{
 font-family: 'Rokkitt', serif;
 font-size: 16px;
 color: #00C4CF;
}
.author p{
 font-family: 'Rokkitt', serif;
 font-size: 16px;
 color: #8d8d8d;
}
        </style>


