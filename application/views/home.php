<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url("resourses/css/auth.min.css"); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("resourses/css/style.css"); ?>"/>

</head>
<body>

<div class="cont">
	<div class="head"> <label class="hh">Authentication</label>   </div>
	<div class="group">
		<input type="text" required="">
		<label >username</label>
	</div>
	<div class="group">
		<input type="text" required="">
		<label >password</label>
	</div>
	<button type="button" name="button">Log in</button>
	<a href="index.php/home"> ssss </a>
</div>

</body>
</html>

