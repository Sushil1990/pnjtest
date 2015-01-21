<?php
	include('dbcon.php');
	session_start();
	
	
	$email=$_SESSION['email'];
	$query=mysql_query("select * from admin_info where email='$email'");
	$details=array();
	//echo "Working";
	while($data=mysql_fetch_row($query))	
	{	
		$details[]=$data;
	}
	if(isset($_POST['confirm']))
	{
		$oldpass=$_POST['oldpass'];
		$newpass=$_POST['newpass'];
		//echo "$email<br/>";
		foreach($details as $d)
		{
			if($d[2]==$oldpass)
			{
				$update_query=mysql_query("update admin_info set password='$newpass' where email='$email'");
				echo "<script>alert('Password Changed Successfully....!!')</script>";
				header("location: admin_page.php"); 
						
			}
			else
			{
				echo "<script>alert('Password Match Fail.........!!')</script>";
			}
		}
	}
	
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABL Software</title>
<link rel="stylesheet" type="text/css" href="Stylesheet.css" />

<script>
	
		function ValidateForm()
		{
		
		var olpass=document.forms["MyForm"]["oldpass"].value;
		if (olpass==null || olpass=="")
			{
			alert("Please Enter Old Password");
			return false;
			}
			
		var nwpass=document.forms["MyForm"]["newpass"].value;
		if (nwpass==null || nwpass=="")
			{
			alert("Please Enter New Password");
			return false;
			}
		
		
		
		var conpass=document.forms["MyForm"]["confirmpass"].value;
		if (conpass==null || conpass=="")
			{
			alert("Please Re-Enter Confirm Password");
			return false;
			}
			
			if(nwpass!=conpass)
			{
			alert("New Password does't match!!!");
			return false;
			}
		
		}
</script>




</head>
<body>
<div>
	<?php include('header.php');?>
</div>


<!--------------------------------------------------------- Page Coading ---------------------------------------------------------------------------------------->

<table style="width:100%; height:auto; margin-top:10px;"> 
	<tr><td>
	<div style="width:1100px; height:auto; margin:auto;"> 
	  <div class="adminleft" style="height:auto;">
	 	 <?php include ('leftmenu.php');?>
	  </div>
	
	  <div class="admininfo" style="height:auto;">
	  	<div class="adminpagename" style="text-align:center; font-family:'Times New Roman', Times, serif; font-size:20px; color:#FFFFFF;  ">
			<strong>Admin Change Password</strong>
		</div>
<?php 
	
	foreach($details as $d)
	{

 ?>	  
	  <form name="MyForm" method="post"  enctype="multipart/form-data" onsubmit="return ValidateForm()">
        <h3 align="left" style="text-decoration:underline; margin-left:20px;">Change Your Password....</h3>
        
       
    	<table style="margin-top:5px; margin-left:20px; ">
        	<tr>
            	<td style="width:250px; ">Authorization Id :</td>
				<td style="width:290px;">
				<?php echo $d[1];?>
				</td>
            </tr>
			
			<tr>
            	<td style="width:250px; ">Old Password :</td>
				<td style="width:290px; ">
						<input type="password" name="oldpass"  style="width:250px; background-color:#FFFFFF; " />
				</td>
            </tr>
			
			<tr>
            	<td style="width:250px; ">New Password :</td>
				<td style="width:290px; ">
						<input type="password" name="newpass"   style="width:250px; background-color:#FFFFFF; " />
				</td>
            </tr>
			
			<tr>
            	<td style="width:250px;">Confirm Password :</td>
				<td style="width:290px; ">
						<input type="password" name="confirmpass"   style="width:250px; background-color:#FFFFFF; " />
				</td>
            </tr>
            
            <tr style="height:45px;">
				<td colspan="2"><input type="submit" name="confirm" value="Confirm" 
		style="width:100px; margin-bottom:10px; margin-top:30px; margin-left:250px; height:30px; font-family:'Copperplate Gothic Bold'; border:2px outset #66FF00; 
		border-radius:15px; box-shadow:1px 2px 3px red; background-color:#F5FFB0;" onMouseOver="style.background='Green'"; onMouseOut="style.background='#F5FFB0'"/> </td>
			</tr>
			
			<tr style="height:50px;"></tr>
            </table>
            
            
		</form>
<?php } ?>	
	  </div>
	
	
	
	</div>
	</td></tr>
</table>

<!--------------------------------------------------------- End Page Coading ---------------------------------------------------------------------------------------->



<div style="height:10px;"></div>
</div>


<div>
	<?php include('footer.php');?>
</div>

</body>
</html>

