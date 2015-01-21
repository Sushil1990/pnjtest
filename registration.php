<?php

	include('dbcon.php');

	
	if(isset($_POST['submit'])=="Register")
	{
		$name=$_POST['name'];
		$userid=$_POST['userid'];
		$pass=$_POST['pass'];
		$dob=$_POST['dob'];
		$cno=$_POST['cno'];
		
		$query_search=mysql_query("select * from user_info where user_id='$userid'");
		$count=mysql_num_rows($query_search);
		if($count!='0')
		{
			echo "<script>alert('User is Already Registered ..... Please Register With Another ID ..... !!!')</script>";
		}
		else
		{
			$query_reg=mysql_query("insert into user_info values('','$name','$userid','$pass','$dob','$cno','')");
			if($query_reg)
			{
				echo "<script>alert('Registration Successfull....!!!')</script>";
				session_start();
				$_SESSION['auth']="1";
				$_SESSION['authid']=$userid;
			}
		}
		
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PNJ_TEST</title>
<link href="css_style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="JQuery/Datecss1.css">

  <script>

	function validation()
	{
		if(document.reg_form.name.value=="")
		{
			alert("Please Enter Your User Name------!!");
			document.reg_form.name.focus();
			return false;
		}
		
		if(document.reg_form.userid.value=="")
		{
			alert("Please Enter Your Email ID------!!");
			document.reg_form.userid.focus();
			return false;
		}
		
		var x=document.reg_form.userid.value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Enter a Valid Email ID----!! ");
			document.reg_form.userid.focus();
			return false;
		}
		
		if(document.reg_form.pass.value=="")
		{
			alert("Please Enter Your Password------!!");
			document.reg_form.pass.focus();
			return false;
		}
		
		if(document.reg_form.dob.value=="")
		{
			alert("Please Enter Your Birth Year------!!");
			document.reg_form.dob.focus();
			return false;
		}
		
		
	}
</script>


  <script src="JQuery/jq1.js"></script>
  <script src="JQuery/jq2.js"></script>
  <link rel="stylesheet" href="JQuery/phpfile.php">
  <script>
  
 $(document).ready(function(){
        $("#datepicker").datepicker({
           changeMonth:true,
           changeYear:true
        });
  });
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
	<?php include('menu.php') ?>
	</div>
	
<div class="fullpage">
<table class="pagecontant">
<tr><td>		
		
		<div class="pagemeter">
			<div style="width:980px; height:30px; background-image:url(image/reg.jpg); margin-top:3px; padding-top:10px;">
				<strong style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;"><center>Registration</center></strong>
			
			</div>
			
			<div style="height:400px; width:978px; border:1px #CCCCCC solid;">
			<div><p style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#000099; margin-left:100px;">&nbsp;&nbsp;&nbsp;In order to participate in the quiz, You need to Register first. All fields marked with '<b> * </b>' are <b style="color:#FF0000;">mandtory</b>. </p></div>
				
				
			<form name="reg_form" action="registration.php" method="post" enctype="multipart/form-data" onsubmit="return validation()"/> 
				
				<table border="0" align="center" style="margin-top:20px;">
					<tr style="height:40px; background-color:#EEEEEE; ">
						<td style="width:135px; padding-left:15px;">
							User Name <strong style="color:#FF0000">*</strong>
						</td>
						<td style="width:50px; text-align:center;">
							:
						</td>
						<td style="width:200px;">
							<input type="text" name="name"  style="width:195px; background-color:#EEEEEE;" />
						</td>
					</tr>
					
					<tr style="height:40px;">
						<td style="width:135px; padding-left:15px;">
							User ID <strong style="color:#FF0000">*</strong>
						</td>
						<td style="width:50px; text-align:center;">
							:
						</td>
						<td>
							<input type="text" name="userid" style="width:195px;" />
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
					
					<tr style="height:40px;">
						<td style="width:135px; padding-left:15px;">
							Date of Birth <strong style="color:#FF0000">*</strong>
						</td>
						<td style="width:50px; text-align:center;">
							:
						</td>
						<td>
							<input type="text" name="dob" id="datepicker" style="width:195px;"/>
						</td>
					</tr>
					
					<tr style="height:40px; background-color:#EEEEEE;">
						<td style="width:135px; padding-left:15px;">
							Contact Number
						</td>
						<td style="width:50px; text-align:center;">
							:
						</td>
						<td>
							<input type="text" name="cno" maxlength="10" onkeyup="if(!Number(this.value)){alert('Please enter Numeric value--.!!');}" style="width:195px; background-color:#EEEEEE;" />
						</td>
					</tr>
					
					
					
					<tr style="height:40px;">
						<td></td>
						<td align="center">
						  <input type="submit" name="submit" value="Register" title="Register your mail Id..." 
						  style="background-color:#0099CC; color:white; font-family:'Monotype Corsiva'; font-size:20px; 
                          width:100px; margin-top:20px; border-radius:15px; box-shadow: 2px 2px 2px 2px #0066CC;" onMouseOver="style.background='blue'"; 
                          onMouseOut="style.background='#0099CC'"/>
							
						</td>
						
						<td style="text-align:center; padding-top:20px; font-family:Verdana, Arial, Helvetica, sans-serif;">
							<a href="quizlogin.php" style="text-decoration:none;"><i>Login Here</i></a>
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


