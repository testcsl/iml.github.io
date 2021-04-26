<?php require_once('../Connections/test2.php'); ?>
<?php require_once('../Connections/test2.php'); ?>
<?php require_once('../Connections/test2.php'); ?>
<?php
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

$colname_Recordset3 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset3 = $_GET['id'];
}
mysql_select_db($database_test2, $test2);
$query_Recordset3 = sprintf("SELECT * FROM zuixdy WHERE id = %s", GetSQLValueString($colname_Recordset3, "int"));
$Recordset3 = mysql_query($query_Recordset3, $test2) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

$maxRows_Recordset1 = 5;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_test2, $test2);
$query_Recordset1 = "SELECT * FROM test";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $test2) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$maxRows_Recordset2 = 5;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database_test2, $test2);
$query_Recordset2 = "SELECT * FROM diany";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $test2) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>最新电影</title>
<meta name="keywords" content="最新电影cms" />
<meta name="description" content="最新电影" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/base.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<style type="text/css">
 @font-face { 
font-family: ziti;
src: url(../font/ziti.ttf);
} 
.ziti{
	font-family:ziti;}
.ziti li a:hover{
	color:pink;
}
</style>
<body>
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
    <ul>
      <li><a href="/">网站首页</a></li>
      <li><a href="/about.html">关于我</a></li>
      <li><a href="/download/">模板分享</a></li>
      <li><a href="/jstt/">学无止境</a></li>
      <li><a href="/news/">慢生活</a></li>
      <li><a href="/e/tool/gbook/?bid=3">留言</a></li>
    </ul>
  </div>
<!--  <nav class="ziti">
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
  <div class="leftbox">
    <div class="infos">
      <div class="newsview">
        <h2 class="intitle">您现在的位置是：<a href="/">首页</a>&nbsp;>&nbsp;<a href="/jstt/web/">最新资源</a></h2>
        <h3 class="news_title"><?php echo $row_Recordset3['biaoti']; ?></h3>
        <div class="news_author"><span class="au01"></span><span class="au02">2018-03-20</span><span class="au03">共<b>
          <script src=../js/95340d73463e48a3ae4ff6f0815da9cf.js></script>
        </b>人围观</span></div>
        <div class="tags"><a href="/e/tags/?tagname=%B5%DB%B9%FA+&tempid=13" target="_blank">最新电影 </a></div>
        <div class="news_about"><strong>简介</strong><?php echo $row_Recordset3['jianjie']; ?><br>
          <?php echo $row_Recordset3['dizhi']; ?><br>
        </div>
        <div class="news_infos">
          <p><?php echo $row_Recordset3['zhengwen']; ?></p>
        </div>
      </div>
      <div class="share"></div>
    </div>
  </div>
  <div class="rightbox">
    <div class="paihang">
      <h2 class="ab_title"><a href="/">电影</a></h2>
      <ul>
               <?php do { ?>
                 <li><a href="movie.php?id=<?php echo $row_Recordset2['id']; ?>"><b><?php echo $row_Recordset2['biaoti']; ?></b>
                 </a>
                   <p><a href="movie.php?id=<?php echo $row_Recordset2['id']; ?>"><?php echo $row_Recordset2['jianjie']; ?></a></p>
               </li>
                 <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
      </ul>
      <div class="ad"><img src="./picture/wallhaven-642088.jpg"></div>
    </div>
    <div class="weixin">
      <h2 class="ab_title">官方微信</h2>
      <ul>
        <img src="./picture/mmqrcode1525706847887.png">
      </ul>
    </div>
  </div>
</article>
<footer>
  <p>广西北海职业学院-陈帅林<a href="/"></a></p>
</footer><script src="../js/61a9ee23bfbe484da195456aea8b6f8b.js"></script></body>
</html>
<?php
mysql_free_result($Recordset3);

mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
