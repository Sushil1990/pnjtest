<?php

	include('dbcon.php');
	session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PNJ_TEST</title>
<link href="css_style/style.css" rel="stylesheet" type="text/css" />

</head>

<body style="background-color:#E1E1E1;">
<div>
	<?php include('header.php') ?>
</div>

	<div>
	<?php include('slider.php') ?>
	</div>
	
	
	<div>
	<?php include('menu.php') ?>
	</div>
	
<div class="fullpage">
<table class="pagecontant">
<tr><td>		
		<div>
		<?php include('leftwork.php') ?>
		</div>
		
		
		<div class="pagemeter">
			<div style="width:720px; height:30px; background-image:url(image/pageinfo.jpg); margin-top:3px; padding-top:10px;border-radius:10px;">
			<strong style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;"><center>Contact Us</center></strong>
			
			</div>
			
			
			
		   <?php                ?>


		</div>

	
</td></tr>
</table>
</div>



<div>
	<?php include('footer.php') ?>
</div>




</body>
</html>
