<?php



    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);


        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'system';
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        $file_event = fopen("feedback/".date("d_m_y_s").".feedback", "w") or die("Unable to open file!");
        $error_feedback = "Connection successed, login_api.php [ERROR]\n";
        fwrite($file_event, $error_feedback);
        fclose($file_event);
        
        $sqlb = "SELECT * FROM users WHERE username='".$username."'";
        
        
        $resultb = $mysqli->query($sqlb);
          
        if ($resultb->num_rows > 0) {
           while($rowb = $resultb->fetch_assoc()) {
              $_SESSION['id'] = $rowb['id'];
              $_SESSION['email'] = $rowb['email'];
              $_SESSION['password'] = $rowb['password'];
              $_SESSION['create_datetime'] = $rowb['create_datetime'];
              $_SESSION['bio'] = $rowb['bio'];
              $_SESSION['url'] = $rowb['url'];
              $_SESSION['Location'] = $rowb['Location'];
              $_SESSION['full_name'] = $rowb['full_name'];
              $_SESSION['vul_mail'] = $rowb['vul_mail'];
              $_SESSION['vul_sum'] = $rowb['vul_sum'];
              $_SESSION['mail_not'] = $rowb['mail_not'];
              $login_count = $rowb['login_count'];
           }
        } else {
            $file_event = fopen("feedback/".date("d_m_y_s").".feedback", "w") or die("Unable to open file!");
            $error_feedback = "SERVER ERROR, login_api.php [ERROR]\n";
            fwrite($file_event, $error_feedback);
            fclose($file_event);
        }
        mysqli_free_result($resultb);



        if ($rows == 1) {
            $_SESSION['username'] = $username;
            $new_login_count = $login_count + 1;
            $update = "UPDATE users SET login_count = ".$new_login_count." WHERE id=".$_SESSION['id']."";
            $_SESSION['login_count'] = $new_login_count;
            mysqli_query($con, $update);
            header("Location: app");
        } else {
            echo '<!DOCTYPE html>
            <html>
            
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Untitled</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
                <link rel="stylesheet" href="assets/css/style.css">
            </head>
            <div class="login-dark" method="post" name="login">
                <form method="post">
                    <h2 class="sr-only">Login Form</h2>
                    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                    <div class="form-group"><input class="form-control" type="username" name="username" placeholder="username"></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" name="submit">Log In</button></div><a href="signup.php" class="forgot">New? sign up now</a>
                    <h4 style="color:red">incorecct password or username</h4></form>
                    
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
                </body>
                </html>
                <style>
                .login-dark {
                height:1000px;
                background:#475d62 url(images/1.png);
                background-size:cover;
                position:relative;
                }
                
                .login-dark form {
                max-width:320px;
                width:90%;
                background-color:black;
                padding:40px;
                border-radius:4px;
                transform:translate(-50%, -50%);
                position:absolute;
                top:50%;
                left:50%;
                color:#fff;
                box-shadow:3px 3px 4px rgba(0,0,0,0.2);
                }
                
                .login-dark .illustration {
                text-align:center;
                padding:15px 0 20px;
                font-size:100px;
                color:#2980ef;
                }
                
                .login-dark form .form-control {
                background:none;
                border:none;
                border-bottom:1px solid #434a52;
                border-radius:0;
                box-shadow:none;
                outline:none;
                color:inherit;
                }
                
                .login-dark form .btn-primary {
                background:#214a80;
                border:none;
                border-radius:4px;
                padding:11px;
                box-shadow:none;
                margin-top:26px;
                text-shadow:none;
                outline:none;
                }
                
                .login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
                background:#214a80;
                outline:none;
                }
                body {
                overflow: hidden; /* Hide scrollbars */
                }
                
                .login-dark form .forgot {
                display:block;
                text-align:center;
                font-size:12px;
                color:#6f7a85;
                opacity:0.9;
                text-decoration:none;
                }
                
                .login-dark form .forgot:hover, .login-dark form .forgot:active {
                opacity:1;
                text-decoration:none;
                }
                
                .login-dark form .btn-primary:active {
                transform:translateY(1px);
                }
                
                
                </style';
        }
    } else {
echo'
<div class="login-dark" method="post" name="login">
<form method="post">
    <h2 class="sr-only">Login Form</h2>
    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
    <div class="form-group"><input class="form-control" type="username" name="username" placeholder="username"></div>
    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
    <div class="form-group"><button class="btn btn-primary btn-block" name="submit">Log In</button></div><a href="signup.php" class="forgot">New? sign up now</a></form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
.login-dark {
height:1000px;
background:#475d62 url(images/1.png);
background-size:cover;
position:relative;
}

.login-dark form {
max-width:320px;
width:90%;
background-color:black;
padding:40px;
border-radius:4px;
transform:translate(-50%, -50%);
position:absolute;
top:50%;
left:50%;
color:#fff;
box-shadow:3px 3px 4px rgba(0,0,0,0.2);
}

.login-dark .illustration {
text-align:center;
padding:15px 0 20px;
font-size:100px;
color:#2980ef;
}

.login-dark form .form-control {
background:none;
border:none;
border-bottom:1px solid #434a52;
border-radius:0;
box-shadow:none;
outline:none;
color:inherit;
}

.login-dark form .btn-primary {
background:#214a80;
border:none;
border-radius:4px;
padding:11px;
box-shadow:none;
margin-top:26px;
text-shadow:none;
outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
background:#214a80;
outline:none;
}
body {
overflow: hidden; /* Hide scrollbars */
}

.login-dark form .forgot {
display:block;
text-align:center;
font-size:12px;
color:#6f7a85;
opacity:0.9;
text-decoration:none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {Z
opacity:1;
text-decoration:none;
}

.login-dark form .btn-primary:active {
transform:translateY(1px);
}


</style>';
    }
    $mysqli -> close()
?>