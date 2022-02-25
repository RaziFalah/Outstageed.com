<?php
$domain = "outstaged.com";
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
    $filename = $token;
	$image=$_FILES['myfile'];


	

    $sql = "INSERT INTO article (title, descr, keyword, category, content, reason, timed, username, hosted_pic, token, ifram) VALUES ('$title', '$desc', '$keyword', '$cat', 0, '$timed', '$timed', '$username', '$hosted_pic', '$token', '$token')";
if(mysqli_query($con, $sql)){
    header('Location: ../app');
} else{
    #Active while debugging debugging
    echo("Error was detected!: " . mysqli_error($con));
    #Active while running
    #header('Location: ../errors/sql_error.php');
}






mysqli_close($con);
}

$contentmore = 

'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.' | by '.$username.'</title>
    <meta name="Description" CONTENT="Author: '.$username.'. Author, Illustrator: P. Picture, Category: '.$cat.', Length: 1 pages">
    <meta property="og:title" content="'.$title.'" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="'.$hosted_pic.'" />
</head>
<body>
    


<style>
@import url("https://fonts.googleapis.com/css2?family=Audiowide&family=Open+Sans&display=swap");
 @import url("https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap");
 *, ::before, ::after {
	 padding: 0;
	 margin: 0;
	 box-sizing: border-box;
}
 body {
     overflow-x: hidden;
	 width: 100%;
	 height: 100%;
	 background-color: white;
	 display: grid;
	 place-items: center;
}
 h1, h2, h3, h4, h5, h6 {
	 font-family: "Audiowide", sans-serif;
	 letter-spacing: 0.1em;
}
 h2 {
	 color: white;
	 text-shadow: 0 0 0.5em #4deeea, 0 0 1em white;
	 padding: 1em 0 0.5em 0;
}
 figure {
	 display: flex;
	 position: relative;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 margin: 1em 0;
}
 figure img {
	 object-fit: contain;
	 width: 100%;
	 max-width: 400px;
	 height: auto;
	 border-radius: 0 0.5em 0.5em 0;
	 box-shadow: -0.5em 0.5em 0 #74ee15;
}
 figure figcaption {
	 position: absolute;
	 font-family: "Open Sans", sans-serif;
	 padding: 0.4em;
	 font-size: 0.8rem;
	 color: black;
	 font-weight: bold;
	 background-color: #ffe700;
	 border-radius: 0.5em;
	 bottom: -1em;
}
 p {
	 font-family: "Open Sans", sans-serif;
	 line-height: 2em;
	 padding: 0.5em 0;
}
 .main {
	 color: #fff;
	 position: relative;
	 max-width: 800px;
}
 @media screen and (min-width: 800px) {
	 .main {
		 border-left: 0.1em solid white;
	}
}
 .head {
	 position: relative;
	 padding: 1.5em;
	 margin-bottom: 1em;
	/*background: linear-gradient( 0deg, rgba(16, 27, 55, 1) 32%, rgba(0, 0, 0, 1) 100% );
	*/
}
 .headline {
	 position: relative;
	 font-size: 2.5rem;
	 color: black;
	 text-shadow: 0 0 0.5em #4deeea, 0 0 1em white;
	 border-top: 0.6rem solid #4deeea;
	 border-right: 0.6rem solid #74ee15;
	 border-bottom: 0.6rem solid magenta;
	 border-radius: 0 1rem 1rem 0;
	 padding: 0.8em 0em;
	 text-transform: uppercase;
}
 .headline::before {
	 content: "";
	 width: 1.5rem;
	 height: 1.5rem;
	 border-radius: 50%;
	 position: absolute;
	 background-color: #4deeea;
	 top: -1.05rem;
	 left: -0.25rem;
}
 .subhead {
	 position: relative;
	 margin-bottom: 1em;
	 text-shadow: none;
	 color: black;
	 padding: 1em;
	 border-left: 0.6rem solid #ffe700;
	 font-family: "Open Sans", sans-serif;
}
 .subhead::after {
	 content: "";
	 width: 1.5rem;
	 height: 1.5rem;
	 border-radius: 50%;
	 position: absolute;
	 background-color: #ffe700;
	 bottom: -0.35rem;
	 left: -1.05rem;
}
 .article-meta {
	 display: grid;
	 flex-direction: column;
}
 .author {
	 position: relative;
	 display: flex;
	 align-items: center;
	 padding: 1em;
	 border-left: 0.6rem solid #001eff;
}
 .author::before {
	 content: "";
	 width: 1.5rem;
	 height: 1.5rem;
	 border-radius: 50%;
	 position: absolute;
	 background-color: #001eff;
	 top: -0.7rem;
	 left: -1.05rem;
}
 .author::after {
	 content: "";
	 width: 1.5rem;
	 height: 1.5rem;
	 border-radius: 50%;
	 position: absolute;
	 background-color: #001eff;
	 bottom: -0.7em;
	 left: -1.05em;
}
 .author__info {
	 display: flex;
	 flex-direction: column;
	 margin-left: 1em;
}
 .author__info p {
	 padding: 0;
}
 .byline {
	 font-weight: bold;
     color: black;
}
 .article-tags {
	 margin-top: 2em;
	 padding: 0;
}
 .article-tags span {
	 padding: 0.5em 1em;
	 background-color: black;
	 border-radius: 1em;
}
 .content {
	 padding: 1em 1.5em;
	 justify-self: center;
}
 aside {
	 position: relative;
	 font-style: italic;
	 color: white;
	 margin: 1.5em 0;
	 padding-left: 1em;
	 border-left: 0.6rem solid #4deeea;
	 text-align: left;
}
 aside::before {
	 content: "";
	 width: 1.5rem;
	 height: 1.5rem;
	 border-radius: 50%;
	 position: absolute;
	 background-color: #4deeea;
	 top: -0.7rem;
	 left: -1.05rem;
}
 aside::after {
	 content: "";
	 width: 1.5rem;
	 height: 1.5rem;
	 border-radius: 50%;
	 position: absolute;
	 background-color: #4deeea;
	 bottom: -0.7em;
	 left: -1.05em;
}
</style>
 

<div class="main">
	<div class="head">
		<h1 class="headline">'.$title.'</h1>
		<h2 class="subhead">
			'.$desc.'
		</h2>
		<div class="article-meta">
			<div class="author">
				<svg id="author-avatar" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" width="80" height="80">
					<title id="avatarTitle">Author Avatar</title>
					<desc id="avatarDesc">
						A cartoon avatar of a smiling purple square on a blue
						background.
					</desc>
					<mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
						<rect width="36" height="36" rx="72" fill="white"></rect>
					</mask>
					<g mask="url(#mask__beam)">
						<rect width="36" height="36" fill="#0ebeff"></rect>
						<rect x="0" y="0" width="36" height="36" transform="translate(6 6) rotate(192 18 18) scale(1)" fill="#754cac" rx="6"></rect>
						<g transform="translate(0 2) rotate(-2 18 18)">
							<path d="M13,19 a1,0.75 0 0,0 10,0" fill="white"></path>
							<rect x="12" y="14" width="1.5" height="2" rx="1" stroke="none" fill="white"></rect>
							<rect x="22" y="14" width="1.5" height="2" rx="1" stroke="none" fill="white"></rect>
						</g>
					</g>
				</svg>
				<div class="author__info">
					<p class="byline">By: '.$username.'</p>
					<p class="dateline" style="color:black;">Posted in: '.$timed.'</p>
				</div>
			</div>
			<p class="article-tags">
				<span class="tag">'.$cat.'</span>
			</p>
		</div>
	</div>
	<div class="content">
		'.$content.'
	</div>
</div>
</body>
</html>
'

;

$fp = fopen("../screens/".$filename, 'w');
fwrite($fp, $contentmore);
fclose($fp);

$map = '
<sitemap>
<loc>https://'.$domain.'/screens/'.$token.'</loc>
</sitemap>

';

$fpa = fopen("../sitemap.xml", 'a');
fwrite($fpa, $map);
fclose($fpa);
?>