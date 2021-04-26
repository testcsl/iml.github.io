<?php require_once('../../Connections/test2.php'); ?>
<?php 
	
	if ( !empty($_GET) )
	{
		$id = $_GET['id'];
		$cate = $_GET['cate'];
		$yem = $_GET['yem'];
		
		$sql = "delete from $cate where id = $id";
		mysql_query($sql) or die(mysql_error());
		header("location:./$yem.php");
	}

?>