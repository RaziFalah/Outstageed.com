<?php
include "connection.php";
include "../apis/auth_api.php";


?>
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
</head>
<body>
    
</body>
</html>
<div class="ct" id="t1">
  <div class="ct" id="t2">
    <div class="ct" id="t3">
      <div class="ct" id="t4">
         <div class="ct" id="t5">
          <ul id="menu">
            <a href="#t1"><li class="icon fa fa-rocket" id="uno"></li></a>
            <a href="#t2"><li class="icon fa fa-keyboard-o" id="dos"></li></a>
            <a href="#t3"><li class="icon fa fa-user" id="tres"></li></a>
            <a href="#t4"><li class="icon fa fa-search" id="cuatro"></li></a>
            <a href="#t5"><li class="icon fa fa-plus-circle" id="cinco"></li></a>
          </ul>
          <div class="page" id="p1">
            <?php
            include "fetcher.php";
            ?>
          </div>
          <div class="page" id="p2">
            <section class="icon fa fa-keyboard-o"><span class="title">Publish board</span></section>
          </div>  
          <div class="page" id="p3">
            <section class="icon fa fa-user"><span class="title">User dashboard</span></section>
          </div>
          <div class="page" id="p4">
            <section class="icon fa fa-search">
              <span class="title">Search</span>
              <p class="hint">
                <a href="#" target="_blank">Search board <span class="hint line-trough"> </span> </a>
              </p>
              <p class="hint"></p>
            </section>
          </div> 
          <div class="page" id="p5">
            <a href="post.php" class="icon fa fa-plus-circle">
              <span class="title">Publishing</span>
              <p class="hint">
                <span>publish your own theory, unexplained story, thoghuts</span><br/>
                <span>let's think togother</span>
              </p>
</a>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<style>
    html, body, .page {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: all .8s cubic-bezier(0.54, 0.35, 0.29, 0.99);
  -webkit-transition: all .8s cubic-bezier(0.54, 0.35, 0.29, 0.99);
  -moz-transition: all .8s cubic-bezier(0.54, 0.35, 0.29, 0.99);
  -o-transition: all .8s cubic-bezier(0.54, 0.35, 0.29, 0.99);  
  color: #fff;
  overflow-x: hidden; 
}

* {
  font-family: 'open sans', 'lato', 'helvetica', sans-serif;
}

.page {
  position: absolute;
}

#p1 {
  left: 0;
}

#p2, #p3, #p4, #p5 {
  left: 200%;
}

#p1 { background: darkslateblue; }
#p2 { background: tomato; }
#p3 { background: gold; }
#p4 { background: deeppink; }
#p5 { background: rebeccapurple; }

#t2:target #p2,
#t3:target #p3,
#t4:target #p4,
#t5:target #p5 {
  transform: translateX(-190%);
  -webkit-transform: translateX(-190%);
  -moz-transform: translateX(-190%);
  -o-transform: translateX(-190%);
  transition-delay: .4s !important;
}

#t2:target #p1, 
#t3:target #p1,
#t4:target #p1,
#t5:target #p1{
  background: black;
}

#t2:target #p1 .icon, 
#t3:target #p1 .icon,
#t4:target #p1 .icon,
#t5:target #p1 .icon {
  -webkit-filter: blur(3px);
}

.icon {
  color: #fff;
  font-size: 32px;
  display: block;
}

ul .icon:hover {
  opacity: 0.5;
}

.page .icon .title {
  line-height: 2;
}

#t2:target ul .icon,
#t3:target ul .icon,
#t4:target ul .icon,
#t5:target ul .icon{
  transform: scale(.6);
  -webkit-transform: scale(.6);
  -moz-transform: scale(.6);
  -o-transform: scale(.6);
  transition-delay: .25s;
}

#t2:target #dos,
#t3:target #tres,
#t4:target #cuatro,
#t4:target #cinco {
  transform: scale(1.2) !important;
  -webkit-transform: scale(1.2) !important;
  -moz-transform: scale(1.2) !important;
  -o-transform: scale(1.2) !important;
}

ul {
  position: fixed;
  z-index: 1;
  top: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  height: 280px;
  width: 10%;
  padding: 0;
  text-align: center;
 }

#menu .icon {
  margin: 30px 0;
  transition: all .5s ease-out !important;
  -webkit-transition: all .5s ease-out;
  -moz-transition: all .5s ease-out;
  -o-transition: all .5s ease-out;
}

a {
  text-decoration: none;
}

.title, .hint {
  display: block;
}

.title {
  font-size: 38px;
}

.hint {
  font-size: 13px;
}

#p4 .hint {
  display: inherit !important;
}

.hint a {
  color: yellow;
  transition: all 250ms ease-out;
  -webkit-transition: all 250ms ease-out;
  -moz-transition: all 250ms ease-out;
  -o-transition: all 250ms ease-out;
}

.hint a:hover {
  color: #FFF;
}

.line-trough {
  text-decoration: line-through;
}

.page .icon {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 10%;
  left: 0;
  width: 270px;
  height: 170px;
  margin: auto;
  text-align: center;
  font-size: 80px;
  line-height: 1.3;
  transform: translateX(360%);
  -webkit-transform: translateX(360%);
  -moz-transform: translateX(360%);
  -o-transform: translateX(360%);
  transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
  -webkit-transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
  -moz-transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
  -o-transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
}

.page#p1 .icon {
  height: 220px;
}

.page#p1 .icon {
  transform: translateX(10%) !important;
}

#t2:target .page#p2 .icon,
#t3:target .page#p3 .icon,
#t4:target .page#p4 .icon,
#t5:target .page#p5 .icon {
  transform: translateX(0) !important;
  -webkit-transform: translateX(0) !important;
  -moz-transform: translateX(0) !important;
  -o-transform: translateX(0) !important;
  transition-delay: 1s;
}

</style>
<script>
    /*
@author Alberto Hartzet 
*
*I wouldn't mind if you use this piece of code in your project as long 
as you give credit with a link to my site. www.albertohartzet.com
*
Licence (CC BY-NC-SA 4.0) http://creativecommons.org/licenses/by-nc-sa/4.0/
*/
</script>