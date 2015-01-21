<?php
	session_start();
	include('dbcon.php');	
	if($_SESSION['auth']!=1)
	{
		header('location:quizlogin.php');
	}

?>
<?php
	$email=$_SESSION['authid'];
    $query="select * from user_info where user_id='$email'";
	$result=mysql_query($query);

	while($data=mysql_fetch_array($result))
	{
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PNJ_TEST</title>
<link href="css_style/style.css" rel="stylesheet" type="text/css" />
<script>
		function openWin()
		{
		   window.open("uploadimg.php","_blank","toolbar=no, scrollbars=no, resizable=no, top=500, left=300, width=720, height=400");
		}
</script>
</head>

<body style="background-color:#E1E1E1;">
<div>
	<?php include('header.php') ?>
</div>

	<div>
	<?php include('slider.php') ?>
	</div>
	
	
	<div>
	<?php include('menu_login.php') ?>
	</div>
	
<div class="fullpage">
<table class="pagecontant" style="padding-bottom:20px;">
<tr><td>		
		<div>
		<?php include('leftquiz.php') ?>
		</div>
		
		
		<div class="pagemeter" style=" height:200px; border:1px #999999 solid;">
			<div style="width:700px; height:30px; background-image:url(image/pageinfo.jpg); margin-top:3px; padding-top:10px; padding-left:10px; float:left;">
				<strong style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;">&nbsp;<?php echo"$data[name]"; ?>,&nbsp;&nbsp;&nbsp 		                                                                                                                                         PHP Quiz Time Started...  </strong>
			
			</div>
			
			<div style="height:120px; width:400px; margin:20px; float:left;">
			
			<table border="0" style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#0000CC;">
						<tr>
							<td>
								User Id
							</td>
							<td style="width:20px; text-align:center;">:</td>
							<td style="width:200px;">
								<?php echo"$data[user_id]"; ?>
							</td>				
						</tr>
						
						<tr style="height:20px;"></tr>
						
						<tr>
							<td>
								Contact Number
							</td>
							<td style="text-align:center;">:</td>
							<td>
								<?php echo"$data[contact]"; ?>
							</td>				
						</tr>
			<?php } ?>
			</table>
			</div>
			
			<div style="height:210px; width:150px; margin-top:10px; margin-left:10px; float:left;">
				<div style="height:120px; width:100px; margin-top:10px; margin-left:10px; border:1px solid; float:left;">
				<?php
	 			 include('dbcon.php');
				 $query="select * from user_info where user_id='$_SESSION[authid]'";
			     $result=mysql_query($query);
				 while($row=mysql_fetch_array($result))
					{
					
				?>	
					<img src="upload/<?php echo $row['image'];?>" height="120" width="100" />
				<?php
					}
	  			?>		
				
				</div>
				
			</div>
			
		</div>
		
		
<!----------------------------------------------------------------------- Quiz Start ----------------------------------------------->
	<div style="height:300px; width:710px; margin-left:5px; border:1px #999999 solid; border-radius:15px; float:left;">
	
	
	PHP QUIZ
	
	
		
	</div>
<!----------------------------------------------------------------------- Quiz End ----------------------------------------------->

</td></tr>
</table>
</div>



<div>
	<?php include('footer.php') ?>
</div>




</body>
</html>
