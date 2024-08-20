<?php
session_start();
session_destroy();
echo "<script>window.open('https://quickkship.com/login.php', '_SELF');</script>";
?>