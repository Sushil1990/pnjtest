<?php session_start(); 
$email=$_SESSION['email'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_About</title>

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

<table style="width:1100px; height:auto; margin:auto; margin-top:10px;">  <!-------------------------------- Left Div ------------------------------->
<tr><td>
<div class="adminleft">
	  <?php include('leftmenu.php');?>
</div>
<div class="admininfo">
	    <div class="adminpagename" style="text-align:center; font-family:'Times New Roman', Times, serif; font-size:20px; color:#FFFFFF;  ">
			<strong>Admin About Us</strong>
</div>


<?php

		if(isset($_POST['submit']))
		{
				include("dbcon.php");
				 $text=$_POST['text'];
				 //echo "$text";
				 $update=mysql_query("update main_table set about='$text' where email='$email'");
				 if($update)
				 {
				 	echo "<script>alert('Data Updated Successfully.....')</script>";
				 }

}
?>
<div style="width:800px; height:auto;  float:left; margin-left:20px; border-radius:15px; margin-top:10px;"> <!-------------------------------- Right Div ------------------------------->

<form action="admin_aboutus.php" method="post"/>
<div style="width:850px; float:center; margin-left:10px; margin-top:10px; border-radius:10px;">
				<?php
					include("dbcon.php");
					$rwi = array();
					$query="select * from main_table where email='$email'";
					$result=mysql_query($query);
					while($data=mysql_fetch_array($result))
					{
						?>

	<textarea name="text" style="width:770px; height:auto;" cols='50' rows='20'><?php echo $data['about']; ?>
	
	</textarea>
	<input type='submit' name='submit' value="Submit" style="height:35px; width:100px; color:#A52A2A; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:22px;margin-bottom:10px;margin-top:10px; margin-left:600px; ">
	<?php
	}
	?>
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