<?php 
$domain = "http://localhost/Outstageed.com";
?>

<noscript>
<meta http-equiv="Refresh" content="0; url='http://localhost/Outstageed.com/errors/nojs.php'" />
</noscript>
<script>
  console.log("Javascript is enabled [Good]");
</script>
<script>
  if(navigator.cookieEnabled) {
    console.log("cookies are enabled [Good]")
}
else {
	window.location.href = "http://localhost/Outstageed.com/errors/nocookies.php";
}

  

</script>