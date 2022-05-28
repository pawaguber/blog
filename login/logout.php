<?php
session_start();
unset ($_SESSION["profile"];
header ('Location: ../register.php');