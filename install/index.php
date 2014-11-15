<?php
$lock_file_path = __DIR__.DIRECTORY_SEPARATOR.'install.lock';
if( !file_exists($lock_file_path) ){
	$dbname = 'cameradb';
	$con = mysql_connect("localhost","root","");
	
	if (!$con)
	 {
	  die('Could not connect: ' . mysql_error());
	 }

	if (mysql_query("CREATE DATABASE $dbname DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;",$con))
	  {
	   echo "1.Database created<br/>";
	  }
	else
	  {
	  echo "Error creating database: " . mysql_error();
	  }

    $lines=file("..\\cameradb.sql");


	$sqlstr="";

	foreach($lines as $line){

		  $line=trim($line);

		  if($line!=""){

			    if(!($line{0}=="#" || $line{0}.$line{1}=="--")){

			      	$sqlstr.=$line;  

			    }

		  }

	}

	$sqlstr=rtrim($sqlstr,";");

	$sqls=explode(";",$sqlstr);

	mysql_set_charset('utf8', $con);
	mysql_select_db($dbname,$con);


	foreach ($sqls as $s) {
		//echo $s;
		//$s1 = mb_convert_encoding($s, "UTF-8","GBK"); 
		 mysql_query($s, $con);
	}

	echo "2.Data Insert OK<br/>";
//print_r($sqls);

//$_SERVER['REMOTE_ADDR']
	header("Location: http://".$_SERVER['REMOTE_ADDR']);
	mysql_close($con);
	file_put_contents($lock_file_path,'lock');

}else{
	//header("Location: http://".$_SERVER['REMOTE_ADDR']);
	 header("Content-type: text/html; charset=utf-8"); 
	 // echo '<script>alert("您已经安装成功，请勿重复安装！");</script>';
	 header("Location: http://".$_SERVER['REMOTE_ADDR']);
}

?>