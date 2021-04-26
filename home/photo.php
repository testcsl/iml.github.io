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

mysql_select_db($database_test2, $test2);
$query_Recordset1 = "SELECT * FROM img";
$Recordset1 = mysql_query($query_Recordset1, $test2) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>模板分享</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/base.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='../test1.css'>

    <link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
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
<body class="touming">
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
   <!-- <nav class="ziti">
    <ul>
      <li><a href="index.html">首页</a></li>
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

<div id="contentContainer" class="trans3d"> 
	<section id="carouselContainer" class="trans3d">
		<?php $test = 1;
		do { ?>
		  <figure id="item<?php echo $test; ?>" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><a target="_blank" href="<?php echo $row_Recordset1['img']; ?>"><img src="./<?php echo $row_Recordset1['img']; ?>"></a></div></figure>
          <?php $test += 1; ?>
		  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
<!--
		<figure id="item2" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="picture/wallhaven-642088.jpg"></div></figure>
		<figure id="item3" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="picture/wallhaven-642864.jpg"></div></figure>
		<figure id="item4" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="picture/wallhaven-652457.jpg"></div></figure>
		<figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item10" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item11" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>
		<figure id="item12" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="I:\2222\test/dian3.jpg"></div></figure>	
        -->
	</section>
	</div>

</article>
<script src="../js/libs.min.js"></script>

  <script src="../js/index.js"></script>
<footer class="dixia">
  <p>广西北海职业学院-陈帅林<a href="/"></a></p>
</footer>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
