<?php
session_start();
session_unset();
session_destroy();
header("location:login.php?etat=1");
exit;
