<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <!--    <link rel="stylesheet" href="--><?php //echo base_url("resourses/css/style.css"); ?><!--"/>-->
    <link rel="stylesheet" href="<?php echo base_url("resourses/ink-3.1.10/css/ink.css"); ?>"/>
    <link rel="stylesheet"  href="<?php echo base_url("resourses/bootstrap-3.3.7-dist/css/bootstrap.min.css"); ?>">
    <script type="text/javascript" src="<?php echo base_url("resourses/js/jquery-3.2.1.min.js"); ?>"></script>
    <link rel="stylesheet"  href="<?php echo base_url("resourses/jquery.dataTables.min.css"); ?>">

    <script type="text/javascript" src="<?php echo base_url("resourses/ink-3.1.10/js/ink-all.js"); ?>"></script>
    <script type="text/javascript"  src="<?php echo base_url("resourses/bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("resourses/jquery.dataTables.min.js"); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url("resourses/js/auth.js"); ?>"></script>

    <style>
        .dataTables_filter label input{
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid #757575;
            }
    </style>
</head>


<body>
<nav class="ink-navigation">
    <ul class="menu horizontal black">
        <li style="margin-left: 150px;" class="heading"><a href="home">Home</a></li>
        <li><a href="table">table</a></li>
        <li><a href="add">ADD</a></li>
        <li><a href="users">users</a></li>
        <li><a href="comment">Comments</a></li>
        <li style="margin-right: 50px;float: right"><a href="#">logout</a></li>
    </ul>
</nav>