<?php

require_once "/.php";

$link = mysqli_connect($, $DBusername, $DBpassword, $DBname);

if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}
echo "Connected successfully";

?>