<?php
session_start();
session_destroy();
header("Location: entrada.html");
exit();
?>