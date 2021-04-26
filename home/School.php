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
<title>我的学校</title>
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
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;我的学校</h2>
        <div class="news_infos m20">
<p><strong>历史沿革——</strong>北海职业学院是北海市人民政府举办的唯一的公办普通高等院校，于2003年8月8日经广西壮族自治区人民政府批准、国家教育部备案成立。学院的前身是创办于1977年1月的北海市师范学校，2004年4月整合了北海市技工学校教育资源，设置北海职业学院湖海校区。2014年10月与北海工业园区管委会、北海市景光电子有限公司正式签订了合作办学合同，设立&ldquo;北海职业学院北海工业园区校区&rdquo;</p>
<p><img src="picture/x1.gif" width="162"></p>
<p>园用地——学院总占地面积19.9万平方米，建筑面积12万平方米。
  学生规模及师资力量——现有全日制在校生11192人，其中三年制高职学生8920人；教职工559人，其中专任教师408人，教授、副教授职称教师55人，硕士、博士以上学历教师156人。
  专业设置及实训条件——开设港口物流设备与自动控制、酒店管理等44个专业，形成了以港口运输类专业为特色，以滨海旅游服务和财经商贸专业群为主干，以电子信息、教育和文化艺术专业群为体量的专业格局。设有机械、物流、电子、艺术设计、财务、餐旅等155个校内实训（实验）分室；与行业企业合作建立了140多个校外签约实训基地，形成多样化的校企合作模式及人才培养模式。</p>
<p><img src="picture/x2.gif" width="164"></p>
<p><strong>院系设置——</strong>学院设有机电工程系、旅游商贸系、经济管理系、电子信息工程系、文化与传媒系、基础学科部、社会科学部、中专部等八个系部，实行院系二级管理体制。<br>
  <strong>办学成效</strong>——学院先后获得&ldquo;国家级语言文字规范化示范校&rdquo;、&ldquo;全区普通高等学校毕业生就业工作先进集体&rdquo;、自治区级&ldquo;五一劳动奖状&rdquo;、&ldquo;高校安全文明校园&rdquo;等多项荣誉。近年来学院办学实力全面提升，办学质量及办学成效显著提高。累计共获自治区级建设项目10个，获区财、央财支持的项目资金近5000万元。教改科研成果丰硕，现有省部级立项课题124项、地市级立项课题11项，发表各类论文1048篇。学生在各级各类专业技能及文体竞技大赛中成绩优异，其中在专业技能大赛中获国家级、自治区级以上奖项273项。</p>
<p><img src="picture/x3.gif"></p>

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
