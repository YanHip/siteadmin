<?php
session_start();
session_destroy();
header('location: ../Vue/ConnexionVue.php');
exit;
?>