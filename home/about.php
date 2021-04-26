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
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="/">关于我</a></h2>
        <div class="news_infos m20">
<p>陈帅林，男，一个90后普普通通的的一个老年人！15年入行。从搬砖一样的生活方式换成了现在有&ldquo;单&rdquo;而居的日子。当然这个单不是单身的单，跟我的职业相比，爱情脱单是不可能的！虽然极尽苛刻的征婚条件但也远不及客户千奇百怪的要求。告别了朝九晚五，躲过了风吹日晒，虽然不再有阶梯式的工资，但是偶尔可以给自己放放假，宅在家里。</p>

<p>人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。生活的压力迫使我放弃了轻松的前台接待，放弃了体面的编辑，换来虽有些蓬头垢面的工作，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为我在学习使用Photoshop、Flash、Dreamweaver、ASP、PHP、JSP...中激发了兴趣，然后越走越远....</p>

<p><img src="picture/zip6.jpg">&nbsp;</p>
<p>喜欢一句话&ldquo;冥冥中该来则来，无处可逃&rdquo;。放手？？这辈子是不可能随随便便放手的！<br />
  <br />
  当您驻足停留过，我们已是朋友，前端的路上我再也不用一个人独自行走。</p>

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
