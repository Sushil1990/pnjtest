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
		
		
		<?php
		if($_REQUEST['quiz']=='html')include('htmlqst.php');
		elseif($_REQUEST['quiz']=='php')include('phpqst.php');
		elseif($_REQUEST['quiz']=='java')include('javaqst.php');
		elseif($_REQUEST['quiz']=='asp')include('aspnetqst.php');
		else
		{;}
		 ?>

	
</td></tr>
</table>
</div>



<div>
	<?php include('footer.php') ?>
</div>




</body>
</html>
