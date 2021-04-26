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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 9;
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

$maxRows_Recordset1 = 5;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_test2, $test2);
$query_Recordset1 = "SELECT * FROM zuixdy";
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

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>模板分享</title>
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
    <!--<nav class="ziti">
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
    <div class="tuijianmb m20 m40">
      <h2 class="hometitle"><span>好的时光要跟好的人一起分享，好的“电影资源”也要和同样喜欢它的人一起分享。</span>电影分享</h2>
      <ul>
        <?php do { ?>
          <li>
            <div class="tpic"><img src="./<?php echo $row_Recordset2['img']; ?>"></div>
            <b><?php echo $row_Recordset2['biaoti']; ?></b><span><?php echo $row_Recordset2['jianjie']; ?></span><a href="/test2/home/movie.php?id=<?php echo $row_Recordset2['id']; ?>" target="_blank"  class="readmore">全文</a>
  </li>
          <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
      </ul>
      <div class="pagelist"><a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, max(0, $pageNum_Recordset2 - 1), $queryString_Recordset2); ?>" title="Total record">上一页 </a>&nbsp;&nbsp;&nbsp;<a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, 0, $queryString_Recordset2); ?>">1</a>&nbsp;<a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, min($totalPages_Recordset2, $pageNum_Recordset2 + 1), $queryString_Recordset2); ?>">2</a>&nbsp;<a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, min($totalPages_Recordset2, $pageNum_Recordset2 + 1), $queryString_Recordset2); ?>">下一页</a>&nbsp;<a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, $totalPages_Recordset2, $queryString_Recordset2); ?>">尾页</a></div>
    </div>
  </div>
  <div class="rightbox">
    <div class="paihang">
      <h2 class="ab_title">最新电影</h2>
      <ul>
        <?php do { ?>
          <li><a href="new movies.php?id=<?php echo $row_Recordset1['id']; ?>"><b><?php echo $row_Recordset1['biaoti']; ?></b>
            </a>
            <p><a href="new movies.php?id=<?php echo $row_Recordset1['id']; ?>"><?php echo $row_Recordset1['jianjie']; ?></a></p>
          </li>
          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
      </ul>
      <div class="ad"><img src="./picture/wallhaven-651649.jpg"></div>
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
?>
