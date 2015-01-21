<?php
	session_start();
	//if($_SESSION['auth']=='1')
		//header('location:quiz.php');
	//else
	//{
		include('dbcon.php');	
		if(isset($_POST['submit'])=="Login")
		{
			$userid=$_POST['userid'];
			$pass=$_POST['pass'];
		
			$query_search=mysql_query("select * from user_info where user_id='$userid' and password='$pass'");
			$count=mysql_num_rows($query_search);
			if($count=='1')
			{
				$_SESSION['auth']="1";
				$_SESSION['authid']=$userid;
				header('location:quiz.php');		
			}
		
		}
		
	//}

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
		
		<div class="pagemeter">
			<div style="width:980px; height:30px; background-image:url(image/reg.jpg); margin-top:3px; padding-top:10px;">
				<strong style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;"><center>User Login ....</center></strong>
			
			</div>
			
			<div style="height:300px; width:978px; border:1px #CCCCCC solid;">
							
			<form name="login" action="quizlogin.php" method="post" enctype="multipart/form-data"/> 
				
				<table border="0" align="center" style="margin-top:50px;">
					
					<tr style="height:40px; background-color:#EEEEEE;">
						<td style="width:135px; padding-left:15px;">
							User ID <strong style="color:#FF0000">*</strong>
						</td>
						<td style="width:50px; text-align:center;">
							:
						</td>
						<td>
							<input type="text" name="userid" style="width:195px; background-color:#EEEEEE;" />
						</td>
					</tr>
					
					<tr style="height:40px; background-color:#EEEEEE;">
						<td style="width:135px; padding-left:15px;">
							Password <strong style="color:#FF0000">*</strong>
						</td>
						<td style="width:50px; text-align:center;">
							:
						</td>
						<td>
							<input type="password" name="pass" style="width:195px; background-color:#EEEEEE;" />
						</td>
					</tr>
					
					
					
					
					
					<tr style="height:40px;"><td></td>
						
						<td align="center">
						<input type="submit" name="submit" value="Login" title="Login for Quiz..." 
							style="background-color:#0099CC; color:white; font-family:'Monotype Corsiva'; font-size:20px; 
                            width:100px; margin-top:20px; border-radius:15px; box-shadow: 2px 2px 2px 2px #0066CC;" onMouseOver="style.background='blue'"; 
                            onMouseOut="style.background='#0099CC'"/>
						</td>
						
						<td style="text-align:center; padding-top:20px; font-family:Verdana, Arial, Helvetica, sans-serif;">
							<a href="registration.php" style="text-decoration:none;"><i>New Registration</i></a>
						</td>
					</tr>
				
					
				</table>
				
			</form>
			</div>
		</div>

	
</td></tr>
</table>

</div>



<div>
	<?php include('footer.php') ?>
</div>




</body>
</html>
