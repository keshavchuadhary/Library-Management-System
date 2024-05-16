<?php
session_start();
unset($_SESSION);

session_destroy();

echo'
<script>
alert("Logged Out");
window.location.href = "login.php";
</script>';
exit;