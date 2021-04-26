<?php
	header('content-type:text/html;charset=utf8');
	$con = mysql_connect('127.0.0.1','root','');
	if (!$con) {
		die('连接数据库失败'.mysql_error());
	}
	mysql_select_db('boke');
	//接收提交数据	
	$user = $_POST['user'];
	$pass = md5($_POST['password']);

	//检测用户名及密码是否正确
	$check = mysql_query("SELECT * FROM  `admin` WHERE  `username` =  '$user' AND  `password` = '$pass'");

	if($res = mysql_fetch_array($check)){
		session_start();
		$_SESSION['username'] = $user;
	echo "<script>alert('登陆成功');window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('登陆失败,请检查用户名或密码');window.history.back(-1);</script>";
	}

