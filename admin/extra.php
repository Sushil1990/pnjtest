<?php session_start(); 
$email=$_SESSION['email'];
include('dbcon.php');
?>

<?php
	
	$ser_no=array();
	$qry=mysql_query("select * from html");
	while($data=mysql_fetch_array($qry))
	{
		$ser_no[]=$data['sno'];
	}
	foreach($ser_no as $s)
	{
		$aaa="update$s[0]";
		@$qqq=$_POST[$aaa];
		//echo"QQQ---$qqq<br>";
		if(isset($_POST[$aaa]))
		{	
			$aaa="update$s[0]";
			$qqq=$_POST[$aaa];
			echo"inter---$qqq<br><br><br><br>";
			
			//$aa="update"."$s[0]";
			//echo"$aa";
			//echo "QQQQQQQQQQQQQQQ$_POST['$aa']";
			$query=mysql_query("select * from html");
			while($data=mysql_fetch_array($query))
			{
				$sno[]=$data['sno'];
			}
			foreach($sno as $no)
			{

				$question=$_POST['qust'.$no[0]];
				$op1=$_POST['op1'.$no[0]];
				$op2=$_POST['op2'.$no[0]];	
				$op3=$_POST['op3'.$no[0]];
				$op4=$_POST['op4'.$no[0]];
				$answer=$_POST['ans'.$no[0]];	
		
				$update="update html set question='$question', op1='$op1', op2='$op2', op3='$op3', op4='$op4', answer='$answer' where sno='$no[0]'";
				$result=mysql_query($update);
				if($result)
				{
								
					//header('location:admin_html_update.php');
				}
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<form action="" method="post" enctype="multipart/form-data" name="ghhg">
<input type="submit" name="update1" value="UPDATE" style="width:100px;" />
<input type="submit" name="update2" value="UPDATE" style="width:100px;" />
<input type="submit" name="update3" value="UPDATE" style="width:100px;" />

</form>
<body>
</body>
</html>
