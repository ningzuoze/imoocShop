<?php
//接受数据
session_start();
$usename=$_post['username'];
$password=$_post['password'];
$verify=$_post['verify'];
$verify1=$_SESSION['verify'];
