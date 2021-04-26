<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/base.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<title>日常拍照</title>
</head><style type="text/css">
 @font-face { 
font-family: ziti;
src: url(file:///D|/test/font/ziti.ttf);
} 
.ziti{
	font-family:ziti;}
.ziti li a:hover{
	color:pink;
}
</style>

<body class="abbeijing">
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
      <li><a href="/test2/home/index.php">网站首页</a></li>
      <li><a href="/about.html">关于我</a></li>
      <li><a href="/download/">模板分享</a></li>
      <li><a href="/jstt/">学无止境</a></li>
      <li><a href="/news/">慢生活</a></li>
      <li><a href="/e/tool/gbook/?bid=3">留言</a></li>
    </ul>
  </div>
<?php /*header("Content-type:text/html;charset=utf-8"); */require "nav.html"?>
</header>
<article>
  <div class="leftbox">
    <div class="infos">
      <div class="newsview">
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="/">日常拍照</a></h2>
        <div class="news_infos m20">
<p><img src="picture/g1.jpg"></p>

<p><img src="picture/zip6.jpg">&nbsp;</p>
<p><img src='picture/g2.jpg'></p>

        </div>
      </div>
    </div>
  </div>
  <div class="rightbox">
    <div class="aboutme m20">
      <h2 class="ab_title">关于我</h2>
      <div class="avatar"><img src="picture/qq1.jpg"/></div>
      <div class="ab_con">
        <p>网名：Arilk Lin| 陈帅林</p>
        <p>职业：PHP设计师、网页设计 </p>
        <p>个人微信：csl1846646703</p>
        <p>邮箱：1846646703@qq.com</p>
      </div>
    </div>
    <div class="weixin">
      <h2 class="ab_title">个人微信</h2>
      <ul>
        <img src="picture/mmqrcode1525706847887.png">
      </ul>
    </div>
  </div>
</article>
<footer>
  <p>广西北海职业学院-陈帅林<a href="/"></a></p>
</footer>
</body>
</html>
