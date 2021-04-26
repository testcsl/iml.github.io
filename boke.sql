-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 06 月 11 日 03:29
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `boke`
--
CREATE DATABASE IF NOT EXISTS `boke` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `boke`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'kkk', '78d1fe0f0064cf6654940c87d99d4456');

-- --------------------------------------------------------

--
-- 表的结构 `cate`
--

CREATE TABLE IF NOT EXISTS `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cate`
--

INSERT INTO `cate` (`id`, `name`) VALUES
(1, 'diany'),
(2, 'img'),
(3, 'test'),
(4, 'zuix'),
(5, '5zuixdy');

-- --------------------------------------------------------

--
-- 表的结构 `diany`
--

CREATE TABLE IF NOT EXISTS `diany` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(50) NOT NULL,
  `shijian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jianjie` text NOT NULL,
  `zhengwen` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `dizhi` text NOT NULL,
  `flmz` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `diany`
--

INSERT INTO `diany` (`id`, `biaoti`, `shijian`, `jianjie`, `zhengwen`, `img`, `dizhi`, `flmz`) VALUES
(1, '屌丝骑士', '2018-05-03 08:10:12', '讲述了色胚男主人公诚豪介，转入了一所“女尊男卑”的超大小姐学园.....', '<pre>\r\n<img src="picture/ds.jpg">\r\n◎译　　名　屌丝骑士\r\n◎片　　名　やるっきゃ騎士/Yarukkya Knight\r\n◎年　　代　2015年5月23日\r\n◎地　　区　日本\r\n◎类　　别　喜剧\r\n◎语　　言　日语\r\n◎导　　演　平林克理\r\n◎主　　演　中村倫也\r\n遠藤新菜\r\n柾木玲弥\r\n柳英里紗\r\nアレクサンダー大塚\r\n◎简　　介\r\n       改编自80年代传奇工口漫画。\r\n       讲述了色胚男主人公诚豪介，转入了一所“女尊男卑”的超大小姐学园，为了争取男权、废除“三禁”，向自治会会长美崎静香宣战。决战当日却惨遭凶恶教师岚铁美迫害，豪介的色情能量，能否拯救全校的危机？\r\n       他又能否成为静香的骑士 ？\r\n<img src="picture/ds2.jpg">\r\n</pre>', 'picture/15286843846078.jpg', '百度网盘: https://pan.baidu.com/s/1Oj_OBHokRcHpgXIx7S9jLw 密码: 983x', 'diany'),
(2, '变形金刚5：最后的骑士', '2018-05-16 03:37:04', '《变形金刚5：最后的骑士》打破了《变形金刚》系列的核心故事，重新定义了人们心目中的英雄形象......', '<pre>\n《变形金刚5：最后的骑士》打破了《变形金刚》系列的核心故事，重新定义了人们心目中的英雄形象。人类和变形金刚开战，擎天柱失踪，拯救未来的关键就埋藏在历史的秘密之中，那是地球上变形金刚的历史。拯救世界的责任落在一支非同寻常的队伍身上：凯德·伊格尔（马克·沃尔伯格饰）、大黄蜂、一位英国爵士（安东尼·霍普金斯饰）还有一位牛津大学教授（劳拉·哈德克饰）。\n    \n每个人一生中都会遇到这样一个时刻，它召唤着我们去改变世界。在《变形金刚5：最后的骑士》中，一直被追捕的人将成为英雄，英雄会变成反派。我们和他们的世界，只能存活一个。\n\n范·迪塞尔扮演的桑德·凯奇在被认为已经死亡后又奇迹般归来，极度危险的反派研制出了能够毁灭世界的终极武器，在这一大危机下，凯奇重出江湖，并招募了一支各有所长、热爱刺激的团队。他们与甄子丹领衔的另一队人马争夺一个叫做“潘多拉魔盒”的武器，最终一起携手拯救世界。\n\n<img src="picture/diany2.jpg">\n◎片　　名　变形金刚5：最后的骑士 Transformers: The Last Knight\n◎又　　名　变形金刚：终极战士(港)/变形金刚5：最终骑士(台)/变形金刚5/变5/Transformers 5\n◎年　　代　2017\n◎地　　区　美国\n◎类　　型　动作/科幻\n◎语　　言　英语\n◎上映日期　2017-06-23(中国大陆)/2017-06-21(美国)\n◎IMDb链接     http://www.imdb.com/title/tt3371366/\n◎IMDb评分     5.3/10 from 7,577 users\n◎豆瓣链接　https://movie.douban.com/subject/25824686/\n◎豆瓣评分　4.9/10 from 20,276 users\n◎片　　长　148分钟 / 150分钟(中国大陆)\n◎导　　演　迈克尔·贝  Michael Bay\n◎主　　演　马克·沃尔伯格  Mark Wahlberg\n伊莎贝拉·莫奈  Isabela Moner\n劳拉·哈德克  Laura Haddock\n安东尼·霍普金斯  Anthony Hopkins\n乔什·杜哈明  Josh Duhamel\n彼特·库伦  Peter Cullen\n泰瑞斯·吉布森  Tyrese Gibson\n约翰·古德曼  John Goodman\n斯坦利·图齐  Stanley Tucci\n桑地亚哥·卡布瑞拉  Santiago Cabrera\n吉尔·伯明翰  Gil Birmingham\n让·杜雅尔丹  Jean Dujardin\n渡边谦  Ken Watanabe\n约翰·迪·玛吉欧  John Di Maggio\n弗兰克·维尔克  Frank Welker\n米彻·佩勒吉  Mitch Pileggi\n</pre>', 'picture\\diany2.jpg', 'https://pan.baidu.com/s/1slAY4wd', 'diany'),
(3, '幕后玩家/操控者', '2018-05-18 08:39:27', '坐拥数亿财产的钟小年(徐峥 饰)意外遭人绑架，不得不在一位神秘人的操控下完 成一道道令人两难的选择题…', '<pre>\n<img src="picture/dian3.jpg">\n◎译　　名　操控者\n\n◎片　　名　幕后玩家\n\n◎年　　代　2018\n\n◎产　　地　中国大陆\n\n◎类　　别　剧情/犯罪/悬疑\n\n◎语　　言　汉语普通话\n\n◎上映日期　2018-04-15(北京国际电影节)/2018-04-28(中国大陆)\n\n◎豆瓣评分　6.2/10 from 7,446 users\n\n◎片　　长　114分钟\n\n◎导　　演　任鹏远 Pengyuan Ren\n\n◎主　　演　徐峥 Zheng Xu\n\n　　　　　　王丽坤 Likun Wang\n\n　　　　　　王砚辉 Yanhui Wang\n\n　　　　　　段博文 Bowen Duan\n\n　　　　　　任达华 Simon Yam\n\n　　　　　　于和伟 Hewei Yu\n\n  　　　　　朱珠 Zhu Zhu\n\n　　　　　　赵达 Da Zhao\n\n　　　　　　谢楠 Nan Xie\n\n　　　　　　鲍晓 Xiao Bao\n</pre>', 'picture/dian3.jpg', 'https://pan.baidu.com/s/1UyrR_qpJ3fIS4Fbr8rpZ5w', 'diany'),
(4, '加勒比海盗5：死无对证', '2018-05-18 08:30:49', '故事发生在《加勒比海盗3：世界的尽头》沉船湾之战20年后。男孩亨利（布兰顿·思怀兹 Brenton Thwaites 饰）随英国海军出航寻找被聚魂棺诅咒的父亲“深海阎王”威尔·特纳（奥兰多·布鲁姆 Orlando Bloom 饰），却在百慕大三角遭遇被解封的亡灵萨拉查船长....', '<pre>\n坐拥数亿财产的钟小年(徐峥 饰)意外遭人绑架，不得不在一位神秘人的操控下完 成一道道令人两难的选择题。在选择的过程中，钟小年落入陷阱，不仅巨额财产被盗取、 濒临身败名裂的边缘，还将妻子魏思蒙(王丽坤 饰)牵扯进一个个险境。为了洗脱罪名， 救回爱人，钟小年在重重危机中与神秘人展开了一场关乎生死和救赎的金钱游戏\n<img src="picture/diany3.jpg">\n导演: 艾斯彭·山德伯格 / 乔阿吉姆·罗恩尼\n编剧: 特里·鲁西奥 / 泰德·艾略特 / 斯图尔特·贝亚蒂耶 / 杰夫·内桑森 / 杰伊·沃伯特\n主演: 约翰尼·德普 / 哈维尔·巴登 / 杰弗里·拉什 / 布伦顿·思韦茨 / 卡雅·斯考达里奥 / 凯文·麦克纳利 / 格什菲·法拉哈尼 / 奥兰多·布鲁姆 / 凯拉·奈特莉 / 斯蒂芬·格拉汉姆 / 大卫·文翰 / 保罗·麦卡特尼 / 马丁·科勒巴 / 亚当·布朗 / 丹尼·基兰 / 马赫什·扎杜 / 胡安·卡洛斯·凡希多\n类型: 动作 / 奇幻 / 冒险\n制片国家/地区: 美国 / 澳大利亚\n语言: 英语\n上映日期: 2017-05-26(中国大陆/美国)\n片长: 129分钟\n又名: 加勒比海盗：恶灵启航(港) / 加勒比海盗 神鬼奇航：死无对证(台) / 加勒比海盗5：亡灵的缄默 / 加勒比海盗5：亡者无言 / 加勒比海盗5：死人不会告密 / Pirates of the Caribbean 5\n: tt1790809\n</pre>', 'picture/diany3.jpg', '百度云链接：http://pan.baidu.com/s/1dEC1zqT密码：5a3e', 'diany'),
(5, '暴裂无声/恶人/寻山', '2018-05-18 10:51:06', '北方凛冽的冬天，一个牧羊少年带着自家的羊群在山里行走，路过浅浅的河沟，他停下脚步低头注目。 两天后，矿工张保民得知儿子失踪的消息，急切赶回家中，三天后，律师徐文\r\n杰的女儿失踪，他拿起电话打给他能想到的唯一嫌疑人。山林，荒野，寻找孩子的人们迷失在其中。', '<pre>\r\n<img src="picture/diany4.jpg">\r\n\r\n</◎译　　名　恶人/寻山/山野追踪\r\n◎片　　名　暴裂无声\r\n◎年　　代　2018\r\n◎产　　地　中国大陆\r\n◎类　　别　剧情/犯罪/悬疑\r\n◎语　　言　汉语普通话\r\n◎上映日期　2018-04-04(中国大陆)\r\n◎IMDb评分  6.9/10 from 46 users\r\n◎豆瓣评分　8.0/10 from 6,662 users\r\n◎片　　长　120分钟\r\n◎导　　演　忻钰坤 Yukun Xin\r\n◎主　　演　宋洋 Yang Song\r\n　　　　　　姜武 Wu Jiang\r\n　　　　　　袁文康 Wenkang Yuan\r\n　　　　　　谭卓 Zhuo Tan\r\n　　　　　　王梓尘 Zichen Wang\r\n　　　　　　安琥 Hu Anpre>', 'picture/diany4.jpg', 'https://pan.baidu.com/s/1f3e766ShBJNX_dTyXIKk7Q 密码：tzh9', 'diany'),
(6, '机器之血', '2018-05-21 06:36:13', '2007年，Dr.James在半岛军火商的支持下研究生化人。研究过程中，生化人安德烈发生基因突变大开杀戒，将半岛军火商杀害，并控制其组织，接管生化人的研究。Dr.James侥幸逃生，只好寻求警方的保护。特工林东不得以离开生命垂危的小女儿西西，接受证人保护任务！', '<img src="picture\\jq1.jpg">\n2007年，Dr.James在半岛军火商的支持下研究生化人。研究过程中，生化人安德烈发生基因突变大开杀戒，将半岛军火商杀害，并控制其组织，接管生化人的研究。Dr.James侥幸逃生，只好寻求警方的保护。特工林东不得以离开生命垂危的小女儿西西，接受证人保护任务！\n　　十三年后，一本科幻小说《机器之血》的出版引出了黑衣生化人组织，神秘骇客李森，以及隐姓埋名的林东，三股力量都开始接近一个“普通”女孩Nancy的生活，想要得到她身上的秘密。而黑衣人幕后受伤隐藏多年的安德烈也再次出手，在多次缠斗之后终于抓走Nancy。林东和李森，不得不以身犯险一同前去解救，关键时刻却发现李森竟然是被杀害的半岛军火商的儿子，生化人的实验记录也落入了李森之手！\n<img src="picture\\jq2.jpg">\n<img src="picture\\jq3.jpg">\n<img src="picture\\jq4.jpg">\n', 'picture\\jq1.jpg', 'https://pan.baidu.com/s/1qUAcm8OhnhPpccFVBQ1Gbw密码:pctj', 'diany'),
(7, '神奇动物在哪里', '2018-05-21 19:41:19', '《神奇动物在哪里》把我们带进了J·K·罗琳笔下一个崭新的魔法世界，一段早于《哈利·波特》几十年，发生在地球另一端的故事。\r\n　　1926年纽约的魔法世界，危机四伏。某个神秘的力量在街头制造了一连串的破坏，并扬言要向反魔法师狂热组织第二塞勒姆''揭露魔法社会的存在，并借他们的手斩草除根。而强大的黑魔法师盖勒特·格林德沃，在欧洲制造了浩劫后消身匿迹，至今没人能寻得其踪。', '<pre>\r\n<img src="picture\\sq1.jpg">\r\n◎译　　名　神奇动物在哪里/怪兽与它们的产地(港/台)/神奇生物在哪里/神奇的野兽以及在哪里能找到它们\r\n◎片　　名　Fantastic Beasts and Where to Find Them\r\n◎年　　代　2016\r\n◎国　　家　英国/美国\r\n◎类　　别　剧情/奇幻/冒险\r\n◎语　　言　英语\r\n◎上映日期　2016-11-18(美国)/2016-11-25(中国大陆)/2016-11-16(法国)\r\n◎片　　长　133分钟\r\n◎导　　演　大卫·叶茨 David Yates\r\n◎主　　演　埃迪·雷德梅恩 Eddie Redmayne\r\n　　　　　　凯瑟琳·沃特斯顿 Katherine Waterston\r\n　　　　　　丹·福勒 Dan Fogler\r\n　　　　　　艾莉森·萨多尔 Alison Sudol\r\n　　　　　　科林·法瑞尔 Colin Farrell\r\n　　　　　　埃兹拉·米勒 Ezra Miller\r\n　　　　　　朗·普尔曼 Ron Perlman\r\n　　　　　　强·沃特 Jon Voight\r\n　　　　　　萨曼莎·莫顿 Samantha Morton\r\n　　　　　　嘉玛·陈 Gemma Chan\r\n　　　　　　卡门·艾乔戈 Carmen Ejogo\r\n　　　　　　克里斯汀·马扎诺 Christine Marzano\r\n　　　　　　詹·穆瑞 Jenn Murray\r\n　　　　　　约翰尼·德普 Johnny Depp\r\n\r\n◎简　　介\r\n\r\n　　《神奇动物在哪里》把我们带进了J·K·罗琳笔下一个崭新的魔法世界，一段早于《哈利·波特》几十年，发生在地球另一端的故事。\r\n　　1926年纽约的魔法世界，危机四伏。某个神秘的力量在街头制造了一连串的破坏，并扬言要向反魔法师狂热组织第二塞勒姆''揭露魔法社会的存在，并借他们的手斩草除根。而强大的黑魔法师盖勒特·格林德沃，在欧洲制造了浩劫后消身匿迹，至今没人能寻得其踪。\r\n　　魔法动物学家纽特·斯卡曼德（埃迪·雷德梅恩 Eddie Redmayne 饰）带着一个魔法皮箱抵达纽约，里头保护着不少神奇魔法动物。只是箱子里的部分神奇动物阴差阳错地跑了出来。本打算短暂停留的纽特，不得不和新认识的三个小伙伴蒂娜（凯瑟琳·沃特斯顿 Katherine Waterston 饰）、雅各布（丹·福勒 Dan Fogler 饰）和奎妮（艾莉森·萨多尔 Alison Sudol 饰），在纽约展开一场精彩的冒险之旅。\r\n<img src="picture\\sq2.jpg">\r\n<img src="picture\\sq3.jpg">\r\n<img src="picture\\sq4.jpg">\r\n<img src="picture\\sq5.jpg">\r\n<img src="picture\\sq6.jpg">\r\n</pre>', 'picture\\sq1.jpg', ' Fantastic.Beast.and.Where.To.Find.Them.2016.HD-TS.torrent', 'diany'),
(8, '丧尸围城3：终极游戏', '2018-05-29 10:27:44', '游戏电影#Dead Rising Endgame#《尸围城:终极游戏》《Dead Rising Endgame》，《丧尸围城：瞭望塔》续作....', '<pre>\r\n<img src="picture/ss1.jpg">\r\n◎译　　名 死亡复苏:终极游戏/丧尸围城:终极游戏/丧尸围城3:终极游戏\r\n◎片　　名 Dead Rising: Endgame\r\n◎年　　代 2016\r\n◎国　　家 美国\r\n◎类　　别 动作/恐怖\r\n◎语　　言 英语\r\n◎片　　长 1h 50mn\r\n◎导　　演 帕特·威廉姆斯 Pat Williams\r\n◎主　　演 杰西·麦特卡尔菲 Jesse Metcalfe\r\n                基冈·康纳·特雷西 Keegan Connor Tracy\r\n                杰西卡·哈蒙 Jessica Harmon\r\n                丹尼斯·海斯伯特 Dennis Haysbert\r\n                玛莉·艾格洛蒲露丝 Marie Avgeropoulos\r\n                蒂奇·格兰特 Teach Grant\r\n                Dakota Guppy\r\n\r\n◎简　　介\r\n  \r\n游戏电影#Dead Rising Endgame#《尸围城:终极游戏》《Dead Rising Endgame》，《丧尸围城：瞭望塔》续作，还原游戏中的武器，Jesse Metcalfe饰演调查员Chase Carter，被派往East Mission市的僵尸感染隔离区，揭露并阻止“秘密政府的阴谋”\r\n<img src="picture/ss2.jpg">\r\n<img src="picture/ss3.jpg">\r\n<img src="picture/ss4.jpg">\r\n<img src="picture/ss5.jpg">\r\n</pre>', 'picture\\ss1.jpg', 'http://www.friok.com/download.php?id=53589', 'diany'),
(9, '狂暴巨兽/毁灭大作', '2018-05-29 17:41:27', '巨石强森饰演的灵长类动物学家一直与人类保持距离,\r\n却跟极为聪明的银背大猩猩乔治有着深厚的感情...', '<pre>\r\n<img src="picture/jt1.jpg">\r\n◎译　　名　狂暴巨兽/毁灭大作战(台)/末日困兽战(港)/狂暴：\r\n\r\n\r\n世纪浩劫/狂暴/怪兽大破坏\r\n◎片　　名　Rampage\r\n◎年　　代　2018\r\n◎产　　地　美国\r\n◎类　　别　动作/科幻/冒险\r\n◎语　　言　英语\r\n◎上映日期　2018-04-13(美国)/2018-04-13(中国大陆)\r\n◎IMDb评分  6.4/10 from 5,292 users\r\n◎豆瓣评分　6.9/10 from 13,818 users\r\n◎片　　长　107分钟\r\n◎导　　演　布拉德·佩顿 Brad Peyton\r\n◎主　　演　道恩·强森 Dwayne Johnson\r\n　　　　　　娜奥米·哈里斯 Naomie Harris\r\n　　　　　　杰弗里·迪恩·摩根 Jeffrey Dean Morgan\r\n　　　　　　玛琳·阿克曼 Malin Akerman\r\n　　　　　　杰克·莱西 Jake Lacy\r\n　　　　　　乔·曼根尼罗 Joe Manganiello\r\n　　　　　　玛丽·谢尔顿 Marley Shelton\r\n　　　　　　P·J·伯恩 P.J. Byrne\r\n　　　　　　德米垂斯·格罗斯 Demetrius Grosse\r\n　　　　　　杰克·奎德 Jack Quaid\r\n　　　　　　布里安·希尔 Breanne Hill\r\n　　　　　　马特·杰拉德 Matt Gerald\r\n　　　　　　李威尹 Will Yun Lee\r\n　　　　　　尤里亚·费伯 Urijah Faber\r\n　　　　　　布鲁斯·布莱克希尔 Bruce Blackshear\r\n　　　　　　杰森·莱尔斯 Jason Liles\r\n　　　　　　马克·威尔斯 Mac Wells\r\n　　　　　　阿莉莎·布鲁克 Allyssa Brooke\r\n　　　　　　亚当·希泰凯尔 Adam Sztykiel\r\n　　　　　　加里·维克斯 Gary Weeks\r\n　　　　　　阿诺德·陈 Arnold Chun\r\n\r\n\r\n◎简　　介\r\n\r\n\r\n　　　　巨石强森饰演的灵长类动物学家一直与人类保持距离,\r\n\r\n\r\n却跟极为聪明的银背大猩猩乔治有着深厚的感情。但是一次基\r\n\r\n\r\n因实验出错, 让这只温驯的大猩猩变成狂怒难驯的庞然巨兽。\r\n\r\n\r\n更可怕的是, 其他动物也发生了同样基因异变。他必须阻止这\r\n\r\n\r\n场全球性的灾难, 更重要是要拯救他的好友乔治。\r\n</pre>', 'picture/jt1.jpg', 'https://pan.baidu.com/s/1T1-czy5fK1GYgPLpCfC8IA\r\n密码: y5dr', 'dainy');

-- --------------------------------------------------------

--
-- 表的结构 `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `flmz` varchar(50) NOT NULL,
  `biaoti` varchar(20) NOT NULL,
  `zhengwen` text NOT NULL,
  `jianjie` text NOT NULL,
  `dizhi` int(11) NOT NULL,
  `shijian` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `img`
--

INSERT INTO `img` (`id`, `img`, `flmz`, `biaoti`, `zhengwen`, `jianjie`, `dizhi`, `shijian`) VALUES
(1, 'picture/zip1.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(2, 'picture/zip2.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(3, 'picture/zip3.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(4, 'picture/zip4.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(5, 'picture/zip5.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(6, 'picture/mai1.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(7, 'picture/wallhaven-652457.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(8, 'picture/zip7.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(9, 'picture/zip8.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(10, 'picture/zip9.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00'),
(11, 'picture/15286419352555.jpg', 'img', '', '', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(50) NOT NULL,
  `shijian` datetime NOT NULL,
  `jianjie` text NOT NULL,
  `zhengwen` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `dizhi` text NOT NULL,
  `flmz` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`id`, `biaoti`, `shijian`, `jianjie`, `zhengwen`, `img`, `dizhi`, `flmz`) VALUES
(4, 'CorelDRAW X5绿色版', '2018-05-14 08:16:15', 'coreldraw是一款由加拿大渥太华的corel公司开发的矢量图型编辑与排版软件，被专业设计人员广泛使用，集成环境为平面设计提供了先进的手段和最方便的工具，广泛地应用于商标设计、标志制作、模型绘制、插图描画、排版及分色输出等诸多领域。', '*  精简的程序组件：corel capture、corel connect、bitstream font navigator、gpl ghostscript及大部分帮助文件、模板、教程等资源；\n*  保留的程序组件：coreldraw x5、photo-paint x5、duplexing wizard及额外的导入导出滤镜（import/export filters）；\n*  支持vba（visual basic for applications 6.4）；\n*  支持cdr、cdt、cpt等文件格式的关联及预览；\n*  支持microsoft office对象；\n*  补充一句，coreldraw x5需要安装.net framework 3.5 sp1才能运行！\n<img src="picture/7.jpg">', 'picture\\7.jpg', 'https://yunpan.cn/cS4iHA6jdLNc5     访问密码 9006', 'test'),
(5, ' Teleport Ultra 中文简体破解版', '2018-05-14 05:17:39', '它可以从Internet的任何地方抓回你想要的任何文件， \r\n还可以用它来创建某个网站的完整的镜象，作为创建你自己的网站的参考...', '妈妈再也不担心我写不来网站\nTeleport Ultra 中文简体破解版:\n离线浏览某个网页, \n它可以从Internet的任何地方抓回你想要的任何文件， \n还可以用它来创建某个网站的完整的镜象，作为创建你自己的网站的参考。\n<img src="picture/8.png">', 'picture\\8.png', '下载地址: http://pan.baidu.com/s/1dELWmFR 密码:74ea', 'test'),
(6, '智能IP代理软件', '2018-05-16 04:34:51', '智能ip代理软件是一款可以帮助你快速搜索IP、验证IP、切换IP，提供丰富的IP数据自动同步，使用简单方便，智能高效，非常实用！', '<img src="picture/9.gif">\r\n<img src="picture/10.gif">\r\n<img src="picture/11.gif">\r\n智能IP代理软件的功能特点：\r\n智能导入文本IP:可以从任意文本文件中解析出IP\r\n智能导网页IP:可以从任意网址网页中解析出IP\r\n智能搜捕IP:自动从搜索引擎搜捕海量IP\r\n智能绿色IP代理软件\r\n简单点击立即生效\r\n免费绿色即下即用\r\n智能从搜捕IP,智能一键切换IP,一键变更系统ip', 'picture\\jz.gif', '软件下载地址：pan.baidu.com/s/1nv777wl 密码:ee6d', 'test'),
(7, '远方驾考v2016.2 单机版（内存注册机 ）', '2018-05-24 08:38:40', '远方驾考全国通用科目一科目四理论是一款十分实用的驾考宝典软件，试题数量涵盖各科目考试，利于考生进行模拟驾考。\r\n', '<pre>\n远方驾考全国通用科目一科目四理论是一款十分实用的驾考宝典软件，试题数量涵盖各科目考试，利于考生进行模拟驾考。\n一、试题数量\n1、小车类科目一理论考试（准驾车型：C1、C2、C3、C4、C5）：1229 题 ；\n2、客车类科目一理论考试（准驾车型：A1、A3、B1、N、P）：1281 题；\n3、货车类科目一理论考试（准驾车型：A2、B2）：1295 题；\n4、恢复驾驶资格（驾驶证注销不超过两年可考试恢复驾驶资格）：1118 题；\n5、科目四理论考试（安全文明驾驶常识，科目三路考后的考试）： 1094 题。\n\n二、考试合格标准\n1、科目一理论考试：考试100题，满分100分，90分合格；\n2、科目四理论考试：考试50题，满分100分，90分合格（每题2分）。\n\n三、选择我们的理由\n1、使用2015年7月最新题库；\n2、无需联网，绿色软件，无需安装，解压即可使用；\n3、科目一、科目二、科目三、科目四（安全文明驾驶常识）全都有；\n4、小车类、客车类、货车类、恢复驾驶资格类试题全都有；\n5、记录每道试题做错的次数，错题可以反复练习；\n6、每道试题都有考题分析、答题技巧，帮助学员快速理解记忆；\n7、顺序练习、随机练习、章节练习、专项练习、错题练习和全真模拟多种练习方式；\n8、全真模拟100%完全仿真，与正式考试软件操作方式相同，使用户消除考试时的怯考心理；\n9、拥有10款非常漂亮的界面皮肤，界面友好舒适，总有一款符合您的眼缘；\n10、购买软件之后，可以终身免费使用，终身免费升级最新版本。\n测试图：\n<img src="picture/yf1.jpg">\n<img src="picture/yf2.png">\n<img src="picture/yf3.png">\n</pre>', 'picture/yf1.jpg', '\n内存注册机用法不再多讲，不会的自行百度。\n原版+内存注册机版百度网盘下载：\nhttp://pan.baidu.com/s/1jHgvFrK\n', 'test'),
(8, '一款专业数据恢复工具', '2018-05-23 02:28:14', '软件是英文的，都能用，至于怎么用吧还得大家自己研究了，小弟也不是很会，我这边的店长用这软件帮好多人恢复了数据，当然也赚了个不少RMB。今天为长点吾爱币特别共享出来，还请多多支持，多多加分', '软件是英文的，都能用，至于怎么用吧还得大家自己研究了，小弟也不是很会，我这边的店长用这软件帮好多人恢复了数据，当然也赚了个不少RMB。今天为长点吾爱币特别共享出来，还请多多支持，多多加分\n<img src="picture/sj1.png">', 'picture/sj1.png', '链接：https://pan.baidu.com/s/1zzn_X5ev9Dhlkg4R8Ql1KA 密码：\n\nfnip', 'test'),
(9, 'AutoCAD2007~2017全系列精简优化版', '2018-05-23 05:55:50', '最新2017版，这个低配电脑也可以使用的，优化的很好', '<pre>\n最新2017版，这个低配电脑也可以使用的，优化的很好\n序 列 号:  见安装说明\n安装密钥: 见安装说明\n1、安装AutoCAD这类大型软件最好不要更改安装路径，传统硬盘C盘位于硬盘的最外圈，拥有最快的读取速度和响应时间，默认安装可以获取最快的运行速度；\n2、激活时断网打开AutoCAD，选择输入序列号-点击“我同意”- 激活 - 输入序列号“ 见安装说明”，产品密钥“ 见安装说明”- 下一步，然后点击关闭，运行注册机（右键以管理员身份运行），先点击“Patch”重复序列号和密钥输入的步骤，出现有“申请号”的页面；把出现的申请号鼠标选中后按下Ctrl+C复制到注册机的“请求码”栏里，再点击一下注册机的“生成”把Activation里的激活码复制到剪贴板；点击 “我具有Autodesk提供的激活码”后，Ctrl+V粘贴激活码，下一步完成激活；\n3、如果激活失败，关闭AutoCAD，删除C:ProgramDataFLEXnet下所有文件后，断网重新激活；\n<img src="picture/au1.png">\n<img src="picture/au2.png">\n<img src="picture/au3.png">\n<img src="picture/au4.png">\n\n\n</pre>', 'picture/au1.png', '百度网盘下载：\n链接: https://pan.baidu.com/s/1o8AW5ia 密码: \nmj38', 'test'),
(10, '黑玄视频', '2018-05-23 01:35:13', '功能强大覆盖大部分平台\r\n支持：爱奇艺，优酷，腾讯，芒果，乐视，PPTV，搜狐，土豆', '<pre>\n版本：2.0\n功能强大覆盖大部分平台\n支持：爱奇艺，优酷，腾讯，芒果，乐视，PPTV，搜狐，土豆\n支持选集\n支持可视化点播\n绿色安全，正规产品\n绿色安全软件绝不坏用户电脑的插件或病毒，不写注册表，请放心使用\n注意：e程序导致软件报毒被杀纯属正常误报（请放心使用）\n<img src="picture/h1.png">\n<img src="picture/h2.png">\n</pre>', 'picture/h1.png', '百度网盘下载：https://pan.baidu.com/s/1i4IVoY5', 'test'),
(11, 'AutoCAD“珊瑚の海”精简优化版系列', '2018-05-23 03:28:23', '楼主是做家装设计的，平时用到的软件也就是CAD 3Dmax PS,现在的软件版本升级一次安装包就大很多，多出来的功能也用不到，精简版本的足够用了。CAD本人也是用的精简版本2014，平时没有出错过！好东西要分享，大家好才是真的好啦。', '<pre>\n楼主是做家装设计的，平时用到的软件也就是CAD 3Dmax PS,现在的软件版本升级一次安装包就大很多，多出来的功能也用不到，精简版本的足够用了。CAD本人也是用的精简版本2014，平时没有出错过！好东西要分享，大家好才是真的好啦。\n<img src="picture/aut1.jpg">\n该版特点\n1、精简多余组件，保留必须的VB、VC、.Net 4.5.2、DirectX组件运行库方便第一次安装高版本CAD的朋友；\n2、保留Express扩展工具；可以选择安装\n3、安装完成默认AutoCAD 经典空间，喜欢草图及标注界面的朋友可以   工具--工作空间，选择“草图与注释”界面\n4、自定有设置好布局的背景颜色为黑色、调整鼠标指针为全屏，不启动欢迎界面，加快启动速度；\n5、屏蔽并删除AutoCAD通讯中心，防止AutoCAD给Autodesk服务器发送你的IP地址及机器信息；\n6、屏蔽AutoCADFTP中心，防崩溃；\n7、完善一些字体库，通常打开文件不会找不到字体；\n8、体积大幅缩减；\n还有好多好多…………………………\n<img src="picture/aut2.gif">\n</pre>', 'picture/aut1.jpg', '百度网盘下载：\n链接: https://pan.baidu.com/s/1i53I8AT 密码: \nakx3', 'test'),
(12, '网易云音乐下载解析器', '2018-05-25 04:19:41', '支持在线视听和下载！', '<pre>\n<img src=".//picture/wyi1.png">\n支持在线视听和下载！\n</pre>', 'picture/wyi1.png', '链接：https://liuyueju.pipipan.com/fs/4088712-290107525', 'test'),
(13, 'UltraEdit24.00.43 汉化增强版', '2018-05-27 15:39:51', 'UltraEdit汉化版是一款能够满足你一切编辑需要的编辑器。UltraEdit汉化版是一套功能强大的文本编辑器，可以编辑文本、十六进制、ASCII 码，可以取代记事本，内建英文单字检查、C++ 及 VB ....', '<pre>\r\nUltraEdit汉化版是一款能够满足你一切编辑需要的编辑器。UltraEdit汉化版是一套功能强大的文本编辑器，可以编辑文本、十六进制、ASCII 码，可以取代记事本，内建英文单字检查、C++ 及 VB 指令突显，可同时编辑多个文件，而且即使开启很大的文件速度也不会慢。UltraEdit汉化版附有 HTML 标签颜色显示、搜寻替换以及无限制的还原功能，一般大家喜欢用其来修改EXE 或 DLL 文件。\r\n修改介绍：\r\nby zd423\r\n- 基于网友的思路折腾，直捣黄龙，完美破解新版!\r\n- 暴力破解，免激活，无需许可证密钥、无使用期限\r\n- 启动为已离线激活版!删自动升级、帮助文档文件\r\n注意：官方从v22.20开始已经停止了对WinXP支持!\r\n<img src="picture/bj1.jpg">\r\n</pre>', 'picture/bj1.jpg', '链接：http://pan.baidu.com/s/1i5oivsx\r\n密码：1hst', 'test'),
(14, 'Macromedia Dreamweaver ', '2018-05-27 08:52:24', 'Macromedia Dreamweaver 是建立 Web 站点和应用程序的专业工具。它将可视布局工具、应用程序开发功能和代码编辑支持组合在一起....', '<pre>\nMacromedia Dreamweaver 是建立 Web 站点和应用程序的专业工具。它将可视布局工具、应用程序开发功能和代码编辑支持组合在一起，其功能强大，使得各个层次的开发人员和设计人员都能够快速创建界面吸引人的基于标准的网站和应用程序。从对基于 CSS 的设计的领先支持到手工编码功能，Dreamweaver 提供了专业人员在一个集成、高效的环境中所需的工具。开发人员可以使用 Dreamweaver 及所选择的服务器技术来创建功能强大的 Internet 应用程序，从而使用户能连接到数据库、Web 服务和旧式系统。 \n\n使用说明： \n（1）首次运行，请点击解压目录中的 @快速安装.exe 进行绿化安装 \n（2）最好不和基本类似版本混用，以免引起软件崩溃 \n\n此绿色版特点： \n\n1. 精简了extension manager cs5(这两个插件以后以单独形式附带);device central cs5,extends cript toolkit cs5,帮助系统,示例,多国语言,激活系统等组件. \n2. 保留与extension manager cs5的通讯文件,以便日后增加extension manager cs5; \n3. 使用sqllite准确注册程序,为以后安装其他adobe程序做好准备. \n4. 能完整关联所有相关文件。 \n5. 程序不含任何第三方插件。保持纯净。 \n6.本程序仅用于学习研究，请在下载后24小时内删除，如确实需要，请联系购买正版！ \n\nDreamweaver CS5 的新增功能: \n\nAdobe Dreamweaver CS5 软件使设计人员和开发人员能充满自信地构建基于标准的网站。由于同新的 Adobe CS Live 在线服务 Adobe BrowserLab 集成，您可以使用 CSS 检查工具进行设计，使用内容管理系统进行开发并实现快速、精确的浏览器兼容性测试。 \n\n- 集成 CMS 支持 新增功能 \n尽享对 WordPress、Joomla! 和 Drupal 等内容管理系统框架的创作和测试支持。 \n- CSS 检查 新增功能 \n以可视方式显示详细的 CSS 框模型，轻松切换 CSS 属性并且无需读取代码或使用其他实用程序。 \n- 与 Adobe BrowserLab 集成 新增功能 \n使用多个查看、诊断和比较工具预览动态网页和本地内容。 \n- PHP 自定义类代码提示 新增功能 \n为自定义 PHP 函数显示适当的语法，帮助您更准确地编写代码。 \n- CSS Starter 页 增强功能 \n借助更新和简化的 CSS Starter 布局，快速启动基于标准的网站设计。 \n- 与 Business Catalyst 集成 新增功能 \n利用 Dreamweaver 与 Adobe Business Catalyst 服务（单独提供）之间的集成，无需编程即可实现卓越的在线业务。 \n- 保持跨媒体一致性 \n将任何本机 Adobe Photoshop 或 Illustrator 文件插入 Dreamweaver 即可创建图像智能对象。更改源图像，然后快速、轻松地更新图像。 \n- 增强的 Subversion 支持 \n借助增强的 Subversion 软件支持，提高协作、版本控制的环境中的站点文件管理效率。 \n- 仔细查看站点特定的代码提示 \n站点特定的代码提示 新增功能 \n- 从 Dreamweaver 中的非标准文件和目录代码提示中受益。 \n简单的站点建立 增强功能 \n- 以前所未有的速度快速建立网站，分阶段或联网站点甚至还可以使用多台服务器。\n截图：\n<img src="picture/dw1.jpg">\n</pre>', 'picture/dw1.jpg', '链接：http://pan.baidu.com/s/1c2gAE0g', 'test'),
(15, '键局域网共享软件', '2018-05-27 06:41:50', '局域网共享软件：\r\n一键获局域网在线计算机。\r\n一键共享文件夹和磁盘.....', '<pre>\r\n<img src="picture/gx.png">\r\n局域网共享软件：\r\n一键获局域网在线计算机。\r\n一键共享文件夹和磁盘，\r\n一键设置共享打印机，\r\n一键开启远程和链接到远程桌面，\r\n一键设置文件夹属性，让你共享文件更安全！\r\n一键设置共享密码，让知道密码的人才能访问你共享的东西。\r\n</pre>', 'picture/gx.png', '链接：https://pan.baidu.com/s/1nuAEkU9', 'test'),
(18, 'adslsaj', '0000-00-00 00:00:00', 'kjsald ', 'lkjsaldkjaslkd', '', 'lksajd', 'test'),
(19, 'ljasldkjal', '0000-00-00 00:00:00', 'dlkjdaslkd', 'jsdlajd', '', 'lsajdlksadjlsadkj', 'test'),
(20, 'jlksadjlksajdlkadj', '0000-00-00 00:00:00', 'adsf', 'jsalkdjsaldkj', '', 'adsfa', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `zuix`
--

CREATE TABLE IF NOT EXISTS `zuix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(50) NOT NULL,
  `jianjie` text NOT NULL,
  `zhengwen` text NOT NULL,
  `dizhi` text NOT NULL,
  `flmz` varchar(50) NOT NULL,
  `shijian` datetime NOT NULL,
  `img` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zuix`
--

INSERT INTO `zuix` (`id`, `biaoti`, `jianjie`, `zhengwen`, `dizhi`, `flmz`, `shijian`, `img`) VALUES
(2, '大学党福利！校园网破解版，无限制开热点', '在大学宿舍没有wifi怎么办，又不想去额外的去办理宽带，那就用这个来破解校园网来上网吧！进来看看吧....', '<pre>\n2018年5月15日：\n由于这几个月很多人私聊我说链接失效了，而之前的帖子17年10月的不能编辑\n所以重新发一遍\n但是我现在不用这个软件了，直接刷在路由器里，打开路由器就可以上网了\n不存在限制热点的情况。这个应该是目前大家都在用的\n\n2017年10月18日，测试依旧正常使用\n原来的帖子超过30天不能编辑了，所以新开帖子补链接\n\n\n看到论坛里最近的一个关于dr.com的帖子还是今年2月的\n很久没更新了，所以把我在用的dr.com至尊版发一下。\n这个比路由器刷机简单一点，不过相比路由器刷机\n有一点限制，就是打开电脑连接上才可以上网，才可以开热点\n和原版的好处是，不会提示使用代{过}{滤}理\n\n\n需要先用学校客户端登陆一下，用这个开着抓包，就可以正常使用了。\n步骤：\n1，打开校园网自带客户端，输入账号密码。到这里打住，不要登录\n2，打开本软件，右下角选项，点击开始抓包\n3，在校园网自带客户端点击登录，本软件就会自动抓包保存。把抓包页面关了\n4，在本软件输入你校园网账号密码，即可正常登录，不必担心提示用代{过}{滤}理软件了\n<img src="picture/tub1.png">\n<img src="picture/tub2.png">\n</pre>', 'sadsadsadasd', 'zuix', '0000-00-00 00:00:00', ''),
(3, '极度精简便携+无限试用~体验飞一样 ', '正版的百度云需要重启会员才可以全速下载，否则的话就只能几KB的下载，但是作为像我们这样的学生党怎么会有钱去开这个会员呢！进来看看最新出的百度云破解版吧！！', '<pre>\r\n软件名称：百度云便携网盘破解版\r\n软件版本：v9.9.9_破解版\r\n软件语言：中文\r\n软件大小：10.2M\r\n支持系统：XP WIN7 WIN8 WIN10\r\n测试电脑：WIN10\r\n测试图：\r\n  \r\n请用第三方平台登入 QQ 微博 ！！！！\r\n\r\n<img src="picture/bdu1.jpg">\r\n</pre>', 'test', 'zuix', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- 表的结构 `zuixdy`
--

CREATE TABLE IF NOT EXISTS `zuixdy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(50) NOT NULL,
  `zhengwen` text NOT NULL,
  `jianjie` text NOT NULL,
  `dizhi` text NOT NULL,
  `flmz` varchar(50) NOT NULL,
  `shijian` datetime NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zuixdy`
--

INSERT INTO `zuixdy` (`id`, `biaoti`, `zhengwen`, `jianjie`, `dizhi`, `flmz`, `shijian`, `img`) VALUES
(1, '环太平洋：雷霆再起', '<pre>\r\n<img src="picture/tpy1.jpg">\r\n◎片　　名　环太平洋：雷霆再起\r\n◎译　　名　Pacific Rim: Uprising\r\n◎年　　代　2018\r\n◎产　　地　美国\r\n◎类　　别　动作/科幻/冒险\r\n◎语　　言　英语\r\n◎片　　长　111分钟\r\n◎导　　演　斯蒂文·S·迪奈特\r\n◎主　　演　约翰·博耶加/斯科特·伊斯特伍德/景甜/卡莉·史派妮\r\n<img src="picture/tpy2.jpg">\r\n<img src="picture/tpy3.jpg">\r\n<img src="picture/tpy4.jpg">\r\n</pre>', '故事发生在距离前作战乱结束十年之后的2035年。随着科技的进步，机甲更新换代，拥有了更先进的功能和更强劲的战斗力.....', 'https://pan.lanzou.com/i0pol3i', 'zuixdy', '0000-00-00 00:00:00', ''),
(2, '毒诫', '<pre>\r\n<img src="picture/du1.jpg">\r\n导演: 刘国昌\r\n编剧: 陈文强 / 林惠菊\r\n主演: 刘青云 / 林家栋 / 古天乐 / 张晋 / 江一燕 /[url=]更多...[/url]\r\n类型: 剧情 / 动作 / 犯罪\r\n制片国家/地区: 中国大陆 / 香港\r\n语言: 汉语普通话 / 粤语\r\n上映日期: 2017-05-12(中国大陆)\r\n片长: 100分钟\r\n又名: 神行太保 / 陈华传 / Dealer Healer\r\n\r\n\r\n剧情简介：\r\n　　六、七十年代的香港，警察贪污，黑道横行，正是陈华（刘青云饰）与喇叭（林家楝饰）、猫仔（张晋饰）及一班兄弟最风光的日子。 \r\n　　陈华被视为「慈云山十三太保」之首，气焰高涨；还结识了一生至爱可柔（江一燕饰），共度人生最甜蜜的时光。可惜好景不常，陈华因私下贩毒而被帮会追杀，幸好在亦敌亦友的扫毒组组长哈雷（古天乐饰）帮助下，逃出生天，但却终究法网难逃。出狱后，遭逢父亲病逝及女友可柔失踪，无比自责的陈华，顿然觉悟前非，立志重新做人。他不但积极参与青少年戒毒工作，获得十大杰青荣誉；更把喇叭与猫仔拉回正途，又经常出手调停江湖纠纷，因而深受黑白两道所敬重。某次于日本出席戒毒讲座后，陈华与可柔在街头重遇。他一心再续前缘，但又能否轻易为自己的感情拆弹？\r\n</pre>', '六、七十年代的香港，警察贪污，黑道横行，正是陈华（刘青云饰）与喇叭（林家楝饰）、猫仔（张晋饰）及一班兄弟最风光的日子......', 'https://pan.baidu.com/s/1cCifwi', 'zuixdy', '0000-00-00 00:00:00', ''),
(3, '疯狂的麦克斯4：狂暴之路', '<pre>\r\n<img src="picture/fk1.jpg">\r\n简介\r\n《疯狂的麦克斯：狂暴之路》是华纳兄弟电影公司于2015年出品的一部动作电影，该片由乔治·米勒执导，汤姆·哈迪、查理兹·塞隆和尼古\r\n拉斯·霍尔特等联袂主演。影片于2015年5月7日在美国洛杉矶率先限量放映。\r\n影片讲述前公路巡警麦克斯（汤姆·哈迪饰）成为了费罗莎指挥官（查理兹·塞隆饰）战车的司机，并且带着五个女人横穿沙漠逃难的故事.\r\n\r\n\r\n类型          动作 / 科幻 / 冒险\r\n导演          乔治·米勒\r\n出品公司   20世纪福克斯公司\r\n发行公司   华纳兄弟公司\r\n\r\n（网上评论：此片被夸的最多的是摄像、专业的镜头语言、车辆什么的，但作为非专业人士，我只说说我最欣赏的部分，此片：\r\n1、没有大战之前的床戏，甚至没有爱情（仅有的一段爱情戏和床戏还被一个暗示镜头带过了…）；\r\n2、没有大战之前主角强行嘴炮与煽情；\r\n3、没有猪队友增加难度衬托主角的逆天；\r\n4、没有不科学、怎么都死不掉、枪林弹雨中如闲庭信步的肉体；（此条反对较多，仔细想了想，写的时候满脑子都是ff7里拿个机枪跟直升机\r\n对扫的镜头2333）\r\n5、没有夸张到耍杂技甚至反物理的动作戏(开车撞飞机什么的你够了！)；\r\n6、没有刻意的耍帅和装逼镜头；\r\n7、没有磨磨唧唧的回忆甚至没有一句废话；\r\n8、女人不会强行拖后腿遇到紧急情况发呆或尖叫，大家都在为生存尽自己最大的努力。\r\n\r\n总之就是单纯的干！干！干！从头到尾！）\r\n\r\n个人觉的看这部片无需补前三部（因人而异吧）\r\n\r\n</pre>', '《疯狂的麦克斯：狂暴之路》是华纳兄弟电影公司于2015年出品的一部动作电影，拉斯·霍尔特等联袂主演.....', '1080p分享\r\nhttp://yunpan.cn/ccWtU4dDdurW4  \r\n访问密码\r\n065d', 'zuixdy', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
