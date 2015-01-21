<?php session_start(); 
$email=$_SESSION['email'];
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
<div class="adminleft" style="height:auto;"><!-------------------------------- Left Div ------------------------------->
	  <?php	include('leftmenu.php');?>
</div>



<div class="admininfo">
<div style="height:auto; width:100%; margin-bottom:20px;">

<div style="height:30px; width:300px; margin-top:5px; margin-left:10px;">
     
	 <a href="admin_html_insert.php" style="text-decoration:none;">
	     <div style="height:25px;  background:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; width:100px; 
			            float:left; padding-top:5px; text-align:center; border:1x #000000 solid; border-radius:10px 10px 0px 0px;"/>INSERT</div>
	 </a>
	 <a href="admin_html_inti_update.php" style="text-decoration:none;">
	 	<div style="height:25px;  background:#666666; margin-left:2px; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; width:100px; 				                       float:left; padding-top:5px; text-align:center; border:1x #000000 solid; border-radius:10px 10px 0px 0px;" />UPDATE</div>
	 </a>
</div>


<div style="width:800px; height:auto; margin-left:10px; border:1px solid #a3a3a3; border-radius:5px;">
	<div style="height:25px; background-color:#535353; padding-top:5px; text-align:center;">
					<strong style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF;border-radius:5px;">INSERT QUESTIONS: HTML...
					</strong>
	</div>
	
<?php

	include('dbcon.php');
	if(isset($_POST['sub']))
	{
		$qust=$_POST['qust'];
		$op1=$_POST['op1'];
		$op2=$_POST['op2'];
		$op3=$_POST['op3'];
		$op4=$_POST['op4'];
		$ans=$_POST['ans'];
		
		$insert=mysql_query("insert into html values('','$qust','$op1','$op2','$op3','$op4','$ans')");
		
		if($insert)
		{
			echo "<script>alert('Question Inserted Successfully....!!!')</script>";
		}
	}

?>	
	
	<form action="admin_html_insert.php" method="post">
	<table border="0" style="margin-top:10px; height:auto; font-family:Verdana, Arial, Helvetica, sans-serif;">
		<tr>
				<td  colspan="2" style="width:760px; height:30px; background-color:#999999; text-align:left; padding-left:20px;"><b>Question :</b></td>	
		</tr>
		<tr>
			<td colspan="2">
				<textarea name="qust" style="width:780px; height:80px;" ></textarea>
			</td>
		</tr>
		<tr height="20"></tr>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Option1 : <input type="text" name="op1" /></td>
			<td>Option2 : <input type="text" name="op2" /></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Option3 : <input type="text" name="op3" /></td>
			<td>Option4 : <input type="text" name="op4" /></td>
		</tr>
		
		<tr height="30"></tr>
		<tr>
			<td colspan="2"  align="center">Correct Answer : <input type="text" name="ans" /></td>
		</tr>
		
		
		
	</table>
	<table border="0" align="center" style="margin-top:20px; margin-bottom:20px;">
		<tr>
			<td>
				<input type="submit" name="sub" value="INSERT" style="width:100px;" />
			</td>
		</tr>
	</table>
</form>

</div>
				
</div></div></div>
</td></tr>
</table>
<div>
	<?php include('footer.php');?>
</div>
</body>
</html>








