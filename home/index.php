<?php require_once('../Connections/test2.php'); ?>
<?php
//mysql_query('set names utf8');
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
?>
<?php require_once('../Connections/test2.php'); ?>
<?php
    require './header.php';

    require './footer.php';
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





?><?php
mysql_select_db($database_test2, $test2);
$query_Recordset3 = "SELECT * FROM zuix";
$Recordset3 = mysql_query($query_Recordset3, $test2) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

$maxRows_Recordset4 = 5;
$pageNum_Recordset4 = 0;
if (isset($_GET['pageNum_Recordset4'])) {
  $pageNum_Recordset4 = $_GET['pageNum_Recordset4'];
}
$startRow_Recordset4 = $pageNum_Recordset4 * $maxRows_Recordset4;

mysql_select_db($database_test2, $test2);
$query_Recordset4 = "SELECT * FROM zuixdy";
$query_limit_Recordset4 = sprintf("%s LIMIT %d, %d", $query_Recordset4, $startRow_Recordset4, $maxRows_Recordset4);
$Recordset4 = mysql_query($query_limit_Recordset4, $test2) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);

if (isset($_GET['totalRows_Recordset4'])) {
  $totalRows_Recordset4 = $_GET['totalRows_Recordset4'];
} else {
  $all_Recordset4 = mysql_query($query_Recordset4);
  $totalRows_Recordset4 = mysql_num_rows($all_Recordset4);
}
$totalPages_Recordset4 = ceil($totalRows_Recordset4/$maxRows_Recordset4)-1;

$maxRows_Recordset2 = 8;
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

$maxRows_Recordset1 = 6;
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

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>小陈陈</title>
<meta name="keywords" content="小陈陈,小陈陈个人博客,," />
<meta name="description" content="小陈陈个人资源共享的一个网站。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/base.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head><style type="text/css">

</style>
<body class="tupian" >


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
      <li><a href="/">首页</a></li>
      <li><a href="/about.html">关于我</a></li>
      <li><a href="/download/">软件资源分享</a></li>
      <li><a href="/jstt/">电影资源分享</a></li>
      <li><a href="/news/">图片资源</a></li>
      <li><a href="/e/tool/gbook/?bid=3">留言</a></li>
    </ul>
  </div>
<?php require "./nav.html"?>
</header>
<article>
  <div class="pics">
    <ul>
 
      <li><a href="/test2/home/Hurriedly.php" target="_blank"><img src="./picture/mai1.jpg"></a><a href="Hurriedly.php"><span>【匆匆那些年】总结个人经历的这四年…</span></a></li>
 
      <li><a href="/test2/home/Photograph.php" target="_blank"><img src="./picture/zip2.jpg"></a><a href="Photograph.php"><span>分享我的日常拍照</span></a></li>
 
      <li><a href="/test2/home/School.php" target="_blank"><img src="./picture/xue.gif"></a><a href="School.php"><span>我的学校</span></a></li>
    </ul>
  </div>
  <div class="sleftbox">
    <div class="tuijian">
      <h2 class="hometitle">最新软件</h2>
      <ul> <?php do { ?>
        <li>
         
            <div class="tpic"><img src=".\<?php echo $row_Recordset1['img']; ?>"></div>
            <b><?php echo $row_Recordset1['biaoti']; ?></b><span><?php echo $row_Recordset1['jianjie']; ?></span><a href="/test2/home/the latest software.php?id=<?php echo $row_Recordset1['id']; ?>" target="_blank"  class="readmore">全文</a>
            
        </li><?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
      </ul>
    </div>
    <div class="newblogs">
      <h2 class="hometitle">最新电影</h2>
      <ul>
       


        <?php do { ?>
          <li>
            <h3 class="blogtitle"><a href="/test2/home/movie.php?id=<?php echo $row_Recordset2['id']; ?>" target="_blank" ><?php echo $row_Recordset2['biaoti']; ?></a></h3>
            <div class="bloginfo"><span class="blogpic"><a href="/test2/home/movie.php?id=<?php echo $row_Recordset2['id']; ?>" title="别让这些闹心的套路，毁了你的网页设计"><img src="./<?php echo $row_Recordset2['img']; ?>" alt="别让这些闹心的套路，毁了你的网页设计" /></a></span>
              <p><?php echo $row_Recordset2['jianjie']; ?></p>
            </div>
            <div class="autor"><span class="lm f_l"><a href="/jstt/css3/" title="css3" target="_blank"  class="classname">css3</a></span><span class="dtime f_l">2018-03-25</span><span class="viewnum f_l">浏览（<a href="/">115</a>）</span><span class="f_r"><a href="/test2/home/movie.php?id=<?php echo $row_Recordset2['id']; ?>" class="more">阅读原文>></a></span></div>
          </li>
          <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
      </ul>
    </div>
  </div>
  <div class="srightbox">
    <div class="aboutme">
      <h2 class="ab_title">关于我</h2>
      <div class="avatar"><img src="./picture/qq1.jpg" /></div>
      <div class="ab_con">
        <p>网名：ArilkLin | 陈帅林</p>
        <p>职业：PHP设计师、网页设计 </p>
        <p>个人微信：csl1846646703</p>
        <p>邮箱：1846646703@qq.com</p>
      </div>
    </div>
    <div class="paihang">
      <h2 class="ab_title"><a href="/">最新资源</a></h2>
      <ul>
        <?php do { ?>
          <li><a href="./resources.php?id=<?php echo $row_Recordset3['id']; ?>"><b><?php echo $row_Recordset3['biaoti']; ?></b>
            </a>
            <p><a href="./resources.php?id=<?php echo $row_Recordset3['id']; ?>"><?php echo $row_Recordset3['jianjie']; ?></a></p>
          </li>
          <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
      </ul>
      <div class="ad"><img src="./picture/wallhaven-651649.jpg"></div>
    </div>
<div class="paihang">
      <h2 class="ab_title">最新电影</h2>
      <ul>
        <?php do { ?>
          <li><a href="./new movies.php?id=<?php echo $row_Recordset4['id']; ?>"><b><?php echo $row_Recordset4['biaoti']; ?></b>
            </a>
            <p><a href="./new movies.php?id=<?php echo $row_Recordset4['id']; ?>"><?php echo $row_Recordset4['jianjie']; ?></a></p>
          </li>
          <?php } while ($row_Recordset4 = mysql_fetch_assoc($Recordset4)); ?>
      </ul>
      <div class="ad"><img src="./picture/wallhaven-642088.jpg"></div>
    </div>
    <div class="links">
      <h2 class="ab_title">友情链接</h2>
      <ul>
        <li><a href="http://www.yangqq.com">陈帅林个人博客</a></li>
        <li>软件资源共享</li>
        <li>电影资源共享</li>
      </ul>
    </div>
    <div class="weixin">
      <h2 class="ab_title">个人微信</h2>
      <ul>
        <img src="./picture/mmqrcode1525706847887.png">
      </ul>
    </div>
  </div>
</article>
<footer>
  <p>广西北海职业学院-陈帅林<a href="/"></a></p>
</footer>
</body>
</html>
<?php
mysql_free_result($Recordset2);

mysql_free_result($Recordset1);

mysql_free_result($Recordset3);

mysql_free_result($Recordset4);
?>
