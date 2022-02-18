<style>@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&display=swap");
@import url("https://s3.ap-south-1.amazonaws.com/oceanjar-new/ui-2/icon/style.css");

*,
*:before,
*:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}
.clearfix:after {
  clear: both;
}
body {
  margin: 0;
  padding: 12px;
  background-color: #e5e5e5;
  font-family: "Source Sans Pro", sans-serif;
}
/* card */
.card {
  margin: 24px auto;
  display: block;
  max-width: 375px;
  height: 400px;
  border-radius: 4px;
  background-color: #00c684;
  position: relative;
  overflow: hidden;
  padding-right: 78px;
}
@media (min-width: 992px) {
  .card {
    padding-right: 130px;
    height: 600px;
    max-width: 564px;
  }
}
.card figure {
  margin: 0;
  display: block;
  width: 100%;
  height: 200px;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url("http://pyt-images.imgix.net/images/web_app/homepage/talk_to_us.jpg?w=650&fit=crop?dpr=1&auto=format,compress&q=40");
}
@media (min-width: 992px) {
  .card figure {
    height: 360px;
  }
}
.card .card-text {
  width: 100%;
  padding: 24px;
  color: #ffffff;
}
.card .card-text:before,
.card .card-text:after {
  content: "";
  display: table;
}
.card .card-text:after {
  clear: both;
}
@media (min-width: 992px) {
  .card .card-text {
    padding: 24px 48px;
  }
}
.card .card-text p {
  font-size: 18px;
  line-height: 28px;
  margin: 0 0 20px;
}
@media (min-width: 992px) {
  .card .card-text p {
    font-size: 32px;
    line-height: 38px;
  }
}
.card .card-text .btn {
  min-width: 132px;
  font-weight: 600;
  letter-spacing: -0.4px;
  display: inline-block;
  margin-bottom: 0;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid #ffffff;
  white-space: nowrap;
  padding: 8px 12px;
  font-size: 16px;
  user-select: none;
  color: #26cf96;
  background-color: #ffffff;
  border-radius: 4px;
  font-family: "Source Sans Pro", sans-serif;
}
@media (min-width: 768px) {
  .card .card-text .btn {
    min-width: 170px;
    padding: 14px 16px;
    font-size: 17px;
    line-height: 1.09;
  }
}
.card aside {
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  width: 78px;
  background-color: #1ca2cc;
  overflow: hidden;
}
@media (min-width: 992px) {
  .card aside {
    width: 130px;
  }
}
.card aside ul {
  padding: 0;
  list-style: none;
  margin: 40px 0 0;
}
.card aside ul:before,
.card aside ul:after {
  content: "";
  display: table;
}
.card aside ul:after {
  clear: both;
}
@media (min-width: 992px) {
  .card aside ul {
    margin: 64px 0 16px;
  }
}
.card aside ul li {
  float: left;
  height: 40px;
  width: 100%;
}
@media (min-width: 992px) {
  .card aside ul li {
    height: 72px;
  }
}
.card aside ul li:before,
.card aside ul li:after {
  content: '';
  display: inline-block;
  width: 50%;
  height: 40px;
}
@media (min-width: 992px) {
  .card aside ul li:before,
  .card aside ul li:after {
    height: 72px;
  }
}
.card aside ul li:before {
  background-color: #60ccef;
  border-bottom-right-radius: 100%;
}
.card aside ul li:after {
  background-color: #ffffff;
  border-bottom-left-radius: 100%;
}
.card aside ul li.invert:before {
  background-color: #ffffff;
}
.card aside ul li.invert:after {
  background-color: #60ccef;
}
.card aside .plane-layer {
  width: 100%;
  height: 185px;
  position: relative;
  text-align: center;
  /* plane-icon */
}
.card aside .plane-layer:before,
.card aside .plane-layer:after {
  content: "";
  display: table;
}
.card aside .plane-layer:after {
  clear: both;
}
@media (min-width: 992px) {
  .card aside .plane-layer {
    height: 252px;
  }
}
.card aside .plane-layer:after {
  display: block;
  height: 120px;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  background: repeating-linear-gradient(to right, #ffca29, #ffca29 6px, #1ca2cc 6px, #1ca2cc 12px);
}
@media (min-width: 992px) {
  .card aside .plane-layer:after {
    height: 190px;
    background: repeating-linear-gradient(to right, #ffca29, #ffca29 10px, #1ca2cc 10px, #1ca2cc 20px);
  }
}
.card aside .plane-layer span {
  font-size: 95px;
  position: relative;
  z-index: 1;
  left: -8px;
  top: 5px;
  line-height: 1;
  color: #6c57a5;
}
@media (min-width: 992px) {
  .card aside .plane-layer span {
    font-size: 148px;
    top: -32px;
  }
}
.card aside .plane-layer i {
  position: absolute;
  z-index: 2;
  top: 25px;
  left: 45.6%;
  width: 8px;
}
.card aside .plane-layer i:before,
.card aside .plane-layer i:after {
  content: '';
  display: block;
  width: 8px;
  height: 8px;
  background-color: #ffffff;
  border-radius: 100%;
}
.card aside .plane-layer i:after {
  margin-top: 4px;
}
.card aside .plane-layer i + i {
  top: 50px;
}
@media (min-width: 992px) {
  .card aside .plane-layer i {
    width: 12px;
    top: 0;
    left: 46%;
  }
  .card aside .plane-layer i:before,
  .card aside .plane-layer i:after {
    width: 12px;
    height: 12px;
  }
  .card aside .plane-layer i:after {
    margin-top: 12px;
  }
  .card aside .plane-layer i + i {
    top: 46px;
  }
}
</style>


<div class="card">
<figure></figure>
<div class="card-text">
  <p>
    Need Assistance?<br />Our travel consultants are here to help!
  </p>
  <button type="button" class="btn">
    Talk to us
  </button>
</div>
<aside>
  <ul>
    <li></li>
    <li class="invert"></li>
    <li></li>
  </ul>

  <div class="plane-layer">
    <span class="pyt-flight-fill-up-24"></span>
    <i></i>
    <i></i>
  </div>
</aside>
</div>