<?php require_once('../Connections/test2.php'); ?>
<?php
header('Content-type:text/html;charset=utf-8');

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_test2, $test2);
$query_Recordset1 = "SELECT * FROM test";
$Recordset1 = mysql_query($query_Recordset1, $test2) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);$colname_Recordset1 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset1 = $_GET['id'];
}
mysql_select_db($database_test2, $test2);
$query_Recordset1 = sprintf("SELECT * FROM test WHERE id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $test2) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>优秀个人博客</title>
<meta name="keywords" content="优秀个人博客" />
<meta name="description" content="优秀个人博客" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/base.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->

</head>
<body class="tupian">
<script>
window.onload = function ()
{
	var oH2 = document.getElementsByTagName("h2")[0];
	var oUl = document.getElementsByTagName("ul")[0];
	oH2.onclick = function ()
	{
		var style = oUl.style;
		style.display = style.display == "block" ? "none" : "block";
		oH2.className = style.display == "block" ? "open" : ""
	}
}
</script>
<header>
  <div id="mnav">
    <h2><span class="navicon"></span></h2>
    
  </div>
<!--  <nav>
    <ul>
      <li><a href="index.php">首页</a></li>
      <li><a href="about.html">关于我</a></li>
      <li><a href="download.html">软件资源分享</a></li>
      <li><a href="download2.html">电影资源分享</a></li>
      <li><a href="download3.html">图片资源</a></li>
      <li><a href="link2.html">留言</a></li>
    </ul>
  </nav>-->
  <?php require "nav.html"?>
</header>
<article>
  <div class="container">

    <h1 align="center" style="line-height:36px;"><?php echo $row_Recordset1['biaoti']; ?></h1>
    <p align="center" style="line-height:36px;"><?php echo $row_Recordset1['shijian']; ?></p>
    <p align="center" style="line-height:36px;"><?php echo $row_Recordset1['dizhi']; ?></p>
    <p align="center" style="line-height:36px;"><?php echo $row_Recordset1['jianjie']; ?></p>
    <p align="center" style="line-height:36px;"><?php echo $row_Recordset1['zhengwen']; ?></p>
    <div>
    </div>
    <h2 class="ctitle">&nbsp;</h2>
<style>
.container {
    background:rgba(255,255,255,1);
    margin:-8px;
    padding: 20px;
    border-radius: 20px;
}

h2.ctitle {
    line-height: 30px;
    font-size: 16px;
    border-bottom: #000 2px solid;
}
.ctitle span {
    float: right;
    font-weight: normal;
}
.blogsitetj li:nth-child(n) {
    background: #FE5187;
}
ul.blogsitetj,ul.blogsite {
    padding: 30px;    overflow: hidden;
}
.blogsitetj li ,.blogsite li{
    float: left;
    width: 200px;
    text-align: center;
    line-height: 30px;
    background: #075498;
    margin: 6px;
    padding: 5px 0;
    overflow: hidden;
    height: 30px;
    border: 1px solid #fff;
}


.blogsitetj li:nth-child(n) { background: #FE5187 }
.blogsitetj li:nth-child(2n) { background: #339967 }
.blogsitetj li:nth-child(3n) { background: #FF8151 }
.blogsitetj li:nth-child(4n) { background: #3594cb }
.blogsitetj li:nth-child(5n) { background: #66CC9A }
.blogsitetj li:nth-child(6n) { background: #079798 }
.blogsitetj li:hover { background: #075498; }
.blogsite li a,.blogsitetj li a{ color:#fff}
.weibu{ }
</style>
  </div>
  </aside>
</article>
<footer class="weibu">
  <p>广西北海职业学院-陈帅林<a href="/"></a></p>
</footer>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
