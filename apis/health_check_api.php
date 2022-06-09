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