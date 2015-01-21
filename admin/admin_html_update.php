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
		
		if(isset($_POST[$aaa]))
		{
			$query=mysql_query("select * from html where sno='$s[0]'");
			while($data=mysql_fetch_array($query))
			{
				$sno[]=$data['sno'];
			}
			foreach($sno as $no)
			{

				@$question=$_POST['qust'.$no[0]];
				@$op1=$_POST['op1'.$no[0]];
				@$op2=$_POST['op2'.$no[0]];	
				@$op3=$_POST['op3'.$no[0]];
				@$op4=$_POST['op4'.$no[0]];
				@$answer=$_POST['ans'.$no[0]];	
		
				$update="update html set question='$question',op1='$op1',op2='$op2',op3='$op3',op4='$op4',answer='$answer' where sno='$no[0]'";
				$result=mysql_query($update);
				if($result)
				{
					header('location:admin_html_update.php');
				}
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin HTML</title>

<link rel="stylesheet" type="text/css" href="Stylesheet.css" />
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

</head>
<body style="background:#fff;">

<div>
	<?php include('header.php');?>
</div>

<table style="width:1100px; height:auto; margin:auto; margin-top:10px;">  
<tr><td>
<div class="adminleft" style=" height:auto;"><!-------------------------------- Left Div ------------------------------->
	  <?php include('leftmenu.php');?>
</div>



<div class="admininfo">
<div style="height:auto; width:100%; margin-bottom:20px;">


<div style="height:30px; width:240px; margin-top:5px; margin-left:10px; ">
     <a href="admin_html_insert.php" style="text-decoration:none;">
	     <div style="height:25px;  background:#666666; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; width:100px; 
			            float:left; padding-top:5px; text-align:center; border:1x #000000 solid; border-radius:10px 10px 0px 0px;"/>INSERT</div>
	 </a>
	 <a href="admin_html_update.php" style="text-decoration:none;">
	 	<div style="height:25px; background:#000000; margin-left:2px; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; width:100px; float:left; padding-top:5px; text-align:center; border:1x #000000 solid; border-radius:10px 10px 0px 0px;" />UPDATE</div>
	 </a>
</div>

<div style="width:800px; height:auto; margin-left:10px; border:1px solid #a3a3a3; border-radius:5px; margin-bottom:20px;">
	<div style="height:25px; width:795px; background-color:#535353; padding-top:5px;border:1px solid #a3a3a3; text-align:center;">
					<strong style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF;">UPDATED HTML QUESTIONS :
					</strong>
</div>		
<?php
	include('dbcon.php');
	$count=mysql_num_rows(mysql_query("select * from html"));
	$str=0;                  // static retain the previous value after refresh.............
	if(isset($_POST['next']))
	{	
		if($_SESSION['str']<$count-1)		
		{
			$str=$_SESSION['str']+2;
			$_SESSION['str']=$str;
		}
	}
	
	if(isset($_POST['prev']))
	{			
		if($_SESSION['str']>1)		
		{
			$str=$_SESSION['str']-2;
			$_SESSION['str']=$str;
		}
	}
	
	$rows=2;
	$result=mysql_query("select * from html limit $str,$rows");
	while($data=mysql_fetch_array($result))
	{
?>
<form action="admin_html_update.php" method="post">
	<table border="0" style="margin-top:10px; font-family:Verdana, Arial, Helvetica, sans-serif; margin-bottom:20px;">
		<tr>
				<td  colspan="4" style="width:760px; height:30px; background-color:#999999; text-align:left; padding-left:20px;"><b>Question :</b></td>	
		</tr>
		<tr>
			<td colspan="4">
				<textarea name="qust<?php echo $data['sno']; ?>" style="width:780px; height:80px;" >
					<?php echo $data['question']; ?>
				</textarea>
			</td>
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp; Option1 : <input type="text" name="op1<?php echo $data['sno']; ?>" value="<?php echo $data['op1']; ?>" /></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp; Option2 : <input type="text" name="op2<?php echo $data['sno']; ?>" value="<?php echo $data['op2']; ?>" /></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp; Option3 : <input type="text" name="op3<?php echo $data['sno']; ?>" value="<?php echo $data['op3']; ?>" /></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp; Option4 : <input type="text" name="op4<?php echo $data['sno']; ?>" value="<?php echo $data['op4']; ?>" /></td>
		</tr>
		
		<tr height="10"></tr>
		<tr>
			<td colspan="3"  align="center">Correct Answer : <input type="text" name="ans<?php echo $data['sno']; ?>" value="<?php echo $data['answer']; ?>" /></td>
			<td>
				<input type="submit" name="update<?php echo $data['sno']; ?>" value="UPDATE" style="width:100px;" />
			</td>
		</tr>
	</table>


<?php } ?>
</div>	


<div style="height:50px; width:400px;  margin-left:400px;">
	<div style="margin-right:60px; float:left;"><input type="submit" name="prev" value="PREVIOUS" /></div>
	<div style="margin-right:60px; float:left; margin-left:120px;"><input type="submit" name="next" value="NEXT" /></div>
</div>
</form>




</td></tr>
</table>
</div></div>
<div>
	<?php include('footer.php');?>
</div>
</body>
</html>