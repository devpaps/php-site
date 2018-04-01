<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);


$conn = mysqli_connect("localhost","lajo0010","Kossen848812","lajo0010");

if(!$conn) {
	throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}