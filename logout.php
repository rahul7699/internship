<?php
session_start();
unset($_post['name']);
unset($_post['password']);
session_destroy();
header("Location:login.html");
?>