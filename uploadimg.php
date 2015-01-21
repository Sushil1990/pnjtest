<?php 
session_start();
if(isset($_POST['upload']))
{   
	
	$_SESSION['IMG']=$_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
	
}


	if(isset($_POST['sub']))
	{
		include('dbcon.php');
		$img=$_SESSION['IMG'];
		$id=$_SESSION['authid'];
		//echo $id."<br/>".$img;
		//$query=;
		$result=mysql_query("update user_info set image='$img' where user_id='$id'");
			if($result)
			{
				echo "<script>alert('Photo Upload Successfully......');</script>";
			}
	}
?>

<?php
	include('dbcon.php');
	$email=$_SESSION['authid'];
    $query="select * from user_info where user_id='$email'";
	$result=mysql_query($query);

	while($data=mysql_fetch_array($result))
	{
?>
<body style="background-color:#E6E6E6;">
<div class="pagemeter">
			<div style="width:700px; height:30px; background-image:url(image/pageinfo.jpg); margin-top:3px; padding-top:10px; border-radius:10px; margin:auto;">
			  <strong style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; margin-left:20px;">Hello:- <?php echo"$data[name]"; ?></strong>
			</div>
<?php } ?>
<div style="height:250px; width:650px; border:1px #CCCCCC solid; margin:auto; margin-top:20px; border-radius:15px; box-shadow:5px 5px 5px 5px #CCCCCC">	
			<div style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:red; padding-top:20px;">
				<b style="margin-left:30px;">Upload Your Image</b>
			</div>
			<table border="1" style="margin-top:30px; margin-left:20px; border-color:green;">

		<tr>
			<td style="height:120px; width:250px; padding-left:10px;">
		    <form action="uploadimg.php"  method="post" enctype="multipart/form-data">
					<input type="file" name="image"  id="image"  />
			</td>
			
			<td style="width:100px;">		
					<input type="submit" name="upload"  value="Upload" style="background-color:#006600; font-family:'Monotype Corsiva'; 
																		color:#FFFFFF; font-size:18px; font-style:bold; margin-left:15px;" />
																		
					
																		
				
			
			</td>
			<td style="height:120px; width:200px; padding-left:10px;">
			
				 <div align="center">
				 				<div id="output" style="width:100px; height:120px; border:1px solid;">
								<?php /*?>Image Output<?php */
								if(isset($_POST['upload']))
								{
									
									$img=$_SESSION['IMG'];
									echo "<img src='upload/$_SESSION[IMG]' height='120px' width='100px'>";
									
								}
								?>
								
								
				 				</div>
								
								<input type="submit" name="sub"  value="Submit" style="background-color:#006600; font-family:'Monotype Corsiva'; 
																		color:#FFFFFF; font-size:18px; font-style:bold; margin-top:5px;" />
				 </div> 
			</form>
			</td>
				
		</tr>
		
	</table>
</div>
</div>
</body>