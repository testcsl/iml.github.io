<?php  require_once('../../Connections/test2.php'); ?>
<?php

$path = "picture";


if ( !empty($_POST) )
{	
	if ( !empty( $_FILES ) )
	{
		$co = $_FILES['thumb'];
		if ( $co['name'] != '' )
		{
			$img_name = $co['tmp_name']; 
			$last_name = explode('.', $co['name']);		
			$last_name = $last_name[1];
			$t_name = time().rand(1, 10000).'.'.$last_name;
			
			$save_path = $path."/$t_name";
			//var_dump($save_path);
			
			if ( !move_uploaded_file( $img_name, "../../home/$save_path" ) )
			{
				exit('上传图片保存失败');
			}
		}
		else
		{
			$save_path = "";
		}
	}
    //var_dump($_POST);
	$id = isset($_GET['id']) ? $_GET['id'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $cid = isset($_GET['cate']) ? $_GET['cate'] : $_POST['cid'];
	$hid_img = isset($_POST['hid_inp']) ? $_POST['hid_inp'] : '';
	$img = $save_path != '' ? $save_path : $hid_img;
    $jianjie = isset($_POST['jianjie']) ? $_POST['jianjie'] : '';
    $dizhi = isset($_POST['dizhi']) ? $_POST['dizhi'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';

	if ( $id == '' ) 
	{
		$sql = "insert into ".$cid." (biaoti, jianjie, zhengwen,  img, dizhi, flmz) value('$title','$jianjie', '$content', '$img', '$dizhi', '".$cid."')";
		mysql_query($sql) or die(mysql_error());
		echo "<script>alert('添加成功'); </script>";
	}
    else
	{
		
		$sql = "update ".$cid." set biaoti='$title', jianjie='$jianjie', zhengwen='$content', img='$img', dizhi='$dizhi', flmz='".$cid."' where id=$id";
		mysql_query($sql) or die(mysql_error());
		
		echo "<script>alert('修改成功'); </script>";
	}

}

if ( !empty($_GET) )
{
	$id = $_GET['id'];
	$cate = $_GET['cate'];
	
	$sql = "select * from $cate where id = $id";
	$res = mysql_query($sql) or die (mysql_error());
	$data = mysql_fetch_assoc($res);
}

$biaoti = isset($data) ? $data['biaoti'] : '';
$shijian = isset($data) ? $data['shijian'] : '';
$jianjie = isset($data) ? $data['jianjie'] : '';
$wenzhang = isset($data) ? $data['zhengwen'] : '';
$img = isset($data) ? $data['img'] : '';
$dizhi = isset($data) ? $data['dizhi'] : '';
$flmz = isset($data) ? $data['flmz'] : '';

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
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" type="text/css" href="../../css/xiugai.css">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><strong>帅</strong></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <li>
                          <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>首页</a>
                        </li>
                      <li>
                          <a href="Software.php"><i class="fa fa-table fa-fw"></i> 软件</a>
                        </li>
                        <li>
                            <a href="Software2.php"><i class="fa fa-table fa-fw"></i>最新软件</a>
                        </li>
                         <li>
                            <a href="Film.php"><i class="fa fa-table fa-fw"></i>电影</a>
                        </li>
                         <li>
                            <a href="Film2.php"><i class="fa fa-table fa-fw"></i>最新电影</a>
                        </li>
                         <li>
                            <a href="Photo.php"><i class="fa fa-table fa-fw"></i>照片</a>
                        </li>
                         <li>
                            <a href="txt.php"><i class="fa fa-table fa-fw"></i>文章添加</a>
                        </li>
                      <li>
                          <a href="#"><i class="fa fa-files-o fa-fw"></i>账户管理<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                            <li>
                                <a href="login.php">登录</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">小陈哥哥的个人博客</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row"><!-- /.col-lg-12 -->
            </div>
            <div class="wrap wrap-article-edit">
<h1>文章管理</h1>
<div class="tips"></div>
<div class="box">
<div class="box-title">添加/编辑文章</div>
<div class="box-body">
	<form method="post" action="" enctype="multipart/form-data">
	<table>
        <?php if ( !isset($_GET['cate']) || isset($_GET['cate']) && $_GET['cate'] != 'img' ): ?>
		<tr><th width="80">标题：</th><td><input type="text" name="title" value="<?php echo $biaoti; ?>"></td></tr>
		<tr>
		  <th>类型：</th><td><select name="cid">
          <option value="diany">diany</option>
				<option value="test"  >test</option>
				
					<option value="zuix"  >zuix</option>
                    <option value="zuixdy">zuixdy</option>
                    
				<option value="img"  >img</option>
			
		</select></td></tr>
		<tr class="s-keywords">
		  <th>简介：</th><td><input type="text" name="jianjie" value="<?php echo $jianjie; ?>"></td></tr>	
          <tr class="s-keywords">
		  <th>链接：</th><td><input type="text" name="dizhi" value="<?php echo $dizhi; ?>"></td></tr>
		<tr class="s-thumb"><th>封面图片：</th><td>
		  <input type="file" name="thumb"><span>（超过 780*220 图片将被缩小）</span>
          <input type="hidden" name="hid_inp" value="<?php echo $img; ?>">         
		      <img src="<?php echo $img; ?>" alt="封面图">         
		  </td>
        </tr>
		<tr class="s-editor"><th>编辑内容：</th><td><textarea name="content"><?php echo $wenzhang; ?></textarea></td>
        </tr>
        <?php else: ?>
            <tr class="s-thumb"><th>封面图片：</th><td>
            <input type="file" name="thumb"><span>（超过 780*220 图片将被缩小）</span>
            <input type="hidden" name="hid_inp" value="<?php echo $img; ?>"> 
                <img src="../../home/<?php echo $img; ?>" alt="封面图">
                </td>
            </tr>
        <?php endif; ?>
		<tr class="s-act"><th></th><td><input type="submit" value="立即发布"></td></tr>
	</table>
	</form>
</div>
</div>
</div>
            <div class="row">
              <!-- /.col-lg-6 -->
              <!-- /.col-lg-6 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
              <!-- /.col-lg-6 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
              <!-- /.col-lg-6 -->
        </div>
          <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
 <?php
mysql_free_result($Recordset1);
?>
