<?php session_start(); ?>
<?php
	include('dbcon.php');

	if(isset($_POST['sub']))
	{
		@$email=$_POST['email'];
		@$pass=$_POST['pass'];


		$result=mysql_query("select * from admin_info where email='$email' and password='$pass'");
		$count=mysql_num_rows($result);
		if($count!=1)
			{
				echo "<script> alert('Wrong User name or password......')</script>";
			}
			else
			{

				$_SESSION['email']=$email;
				header("location:admin_page.php");
			}
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PnjTest</title>
<link rel="stylesheet" type="text/css" href="Stylesheet.css" />
<script>
		function ValidateForm()
		{

		var uname=document.forms["MyForm"]["email"].value;
		if (uname==null || uname=="")
			{
			alert("Please Enter User Name !!!!!");
			return false;
			}
		var npass=document.forms["MyForm"]["pass"].value;
		if (npass==null || npass=="")
			{
			alert("Please Enter Password !!!!!");
			return false;
			}
		}
</script>
</head>
<body style="background-image:url(image/back1.png); background-attachment:fixed;">


<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="adminpage" style="background-color:#FFFFFF; height:500px;">
	<p style="height:5px;"></p>


<!-------------------------------------------------------------------- Page Meter -------------------------------------------------------------------->

    <div class="pagemeter">
		<div style="width:auto; height:50px; background-color:#006600;">
			<p style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; color:#FFFFFF; font-size:24px;">Welcome to PnjTest</p>
		</div>



	<table style="width:950px; height:auto; margin:auto; margin-top:50px;">

		<tr>
			<td>




<div style="width:700px; height:auto; border:1px groove #CCCCCC; border-radius:10px; background-color:#FFFFFF; float:left; margin-left:100px;" align="left">
 <!--------------- Work --------------->




        <form name="MyForm" action="index.php" method="post"  enctype="multipart/form-data" onsubmit="return ValidateForm()">
        <h3 align="left" style="text-decoration:underline; margin-left:30px;">Dear Administrator</h3><p style="margin-left:30px;"> Please Enter Your User Id and Password</p>


    	<table style="margin-top:30px; margin-left:20px;">

			<tr>
            	<td style="width:250px; ">User Id : <strong style="color:red;">* </strong></td>
				<td style="width:290px; ">
						<input type="text" name="email" placeholder="e-mail" style="width:250px; background-color:#FFFFFF; " />
				</td>
            </tr>
							<tr style="height:20px;"></tr>
			<tr>
            	<td style="width:250px; ">Password : <strong style="color:red;">* </strong></td>
				<td style="width:290px; ">
						<input type="password" name="pass" placeholder="password"  style="width:250px; background-color:#FFFFFF; " />
				</td>
            </tr>


            <tr style="height:45px;">
				<td><input type="submit" name="sub" value="Submit"
		style="width:100px; margin-bottom:10px; margin-top:30px; margin-left:150px; height:30px; font-family:'Times New Roman', Times, serif; font-size:18px; border:2px outset #66FF00;
		border-radius:15px; box-shadow:1px 2px 3px red; background-color:#F5FFB0;" onMouseOver="style.background='Green'"; onMouseOut="style.background='#F5FFB0'"/> </td>
        
        
        


		</form>
        
        
        <td><a href="../index.php" style="text-decoration:none;" title="PnjTest home page"><input type="button" name="home" value="PnjTest"
		style="width:170px; margin-bottom:10px; margin-top:30px; margin-left:230px; height:30px; font-family:'Times New Roman', Times, serif; font-size:18px; border:2px outset #66FF00;
		border-radius:15px; box-shadow:1px 2px 3px red; background-color:#F5FFB0;" onMouseOver="style.background='Green'"; onMouseOut="style.background='#F5FFB0'"/></a></td>
			</tr>
            </table>




</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

</div>


</td></tr>
</table>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->

</div>




<div style="height:50px;"></div>
</div>




</body>
</html>
<?php


?>

