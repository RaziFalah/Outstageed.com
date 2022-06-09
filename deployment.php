<?php
# webhook for project deployment
if ($_GET['token'] === 'secret_key') {
$cmd = shell_exec("rm -rf your-php-application
&& git clone https://your_secret_token@github.com/username/your-php-application.git
&& rm -rf your-php-application/.git
);
echo $cmd;
echo 'Deployment sucess';
} else {
echo 'Error';
}

?>
