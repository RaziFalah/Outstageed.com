<?php
include "connection.php";
include "../apis/auth_api.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../main.css">

</head>

<?php
echo'
<body>
  <div class="wrapper">
    <form class="form" action="../apis/post_api.php" method="post">
      <div class="pageTitle title">Sign Up </div>
      <div  class="secondaryTitle title">Please fill this form to sign up.</div>
      <input type="text" class="name formEntry" name="title"  placeholder="Title" />
      <input type="text" class="email formEntry" name="desc" placeholder="Description"/>
      <textarea class="message formEntry" name="content" placeholder="Share your thoghuts"></textarea>
      <select style="color:black;" name="option" class="option formEntry" id="cars">
  <option style="color:black;" value="Space science">Space science</option>
  <option style="color:black;" value="Life and env">Life and env</option>
  <option style="color:black;" value="ReLgions">ReLgions</option>
  <option style="color:black;" value="else">else</option>
</select>
      <input type="checkbox" class="termsConditions" value="Term">
      <label style="color: grey" for="terms"> I Accept the <span style="color: #0e3721">Terms of Use</span> & <span style="color: #0e3721">Privacy Policy</span>.</label><br>
      <button class="submit formEntry" name="submit" onclick="thanks()">Submit</button>
    </form>
  </div>
  <script src="app.js"></script>
</body>';

?>

</html>
<style>
    body {
        background-image: url("../images/index.png");
}

#title-Tag-Line {
  font-size: 20px;
}
/* .card-item__bg{
  width: 150px;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  display: block;
  position: relative;
  margin: 30px auto;
  transform: translate(0px, 50px);
  z-index: 5;
} */

/* form animation starts */
.form {
  background: black;
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 5px;
  max-width: 980px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 5px;
  padding-bottom: 5px;
  left: 0;
  right: 0;
  position: absolute;
  border-top: 5px solid #0e3721;
/*   z-index: 1; */
  animation: bounce 1.5s infinite;
}
::-webkit-input-placeholder {
  font-size: 1.3em;
}

.title{
  display: black;
  font-family: sans-serif;
  margin: 10px auto 5px;
  width: 300px;
}
.termsConditions{
  margin: 0 auto 5px 80px;
}

.pageTitle{
  font-size: 2em;
  font-weight: bold;
  color: white;
}
.secondaryTitle{
  color: grey;
}

.name {
  background-color: white;
  color: black;
}
.name:hover {
  border-bottom: 5px solid #0e3721;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.option {
  background-color: white;
  color: white;
}
.option:hover {
  border-bottom: 5px solid #0e3721;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.email {
  background-color: #ebebeb;
  height: 2em;
}

.email:hover {
  border-bottom: 5px solid #0e3721;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.message {
  background-color: #ebebeb;
  overflow: hidden;
  height: 10rem;
}

.message:hover {
  border-bottom: 5px solid #0e3721;
  height: 12em;
  width: 380px;
  transition: ease 0.5s;
}

.formEntry {
  display: block;
  margin: 30px auto;
  min-width: 300px;
  padding: 10px;
  border-radius: 2px;
  border: none;
  transition: all 0.5s ease 0s;
}

.submit {
  width: 200px;
  color: white;
  background-color: #0e3721;
  font-size: 20px;
}

.submit:hover {
  box-shadow: 15px 15px 15px 5px rgba(78, 72, 77, 0.219);
  transform: translateY(-3px);
  width: 300px;
  border-top: 5px solid #0e3750;
  border-radius: 0%;
}

@keyframes bounce {
  0% {
    tranform: translate(0, 4px);
  }
  50% {
    transform: translate(0, 8px);
  }
} 


</style>