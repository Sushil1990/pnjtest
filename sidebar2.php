<style>

	.meenudiv { width:200px; height:600px; margin:auto; }
	
	ul#meenu,ul#meenu ul { margin:0; list-style:none; padding:0; border-width:0px;	border-style:solid;	}
										/******** ul li ul li (Sub Meenu)********/
										
	ul#meenu ul { display:none;	position:absolute;	top:34px;	background-color:#BCBCBC; width:130px;   border:1px groove;	}
	ul#meenu li:hover>*	{	display:block;	}
	ul#meenu li	{	position:relative;	display:block;	white-space:nowrap;	font-size:0;}
	ul#meenu li:hover{ z-index:1;	}
									/* Sub ki sub meenu */
									
	ul#meenu ul ul	{ position:absolute; left:100%;	top:0;	}
	ul#meenu {	font-size:0; z-index:999;	position:relative;	display:inline-block;	zoom:1;	padding:0;	margin-left:10px; *display:inline;}
	* html ul#meenu li a{	display:inline-block;	}
	ul#meenu>li	{	margin:0;	}
	ul#meenu a:active, ul#css3menu1 a:focus	{	outline-style:none;	}
	ul#meenu a	{	display:block;	vertical-align:middle;	text-align:left;	text-decoration:none;	font:14px verdana;	text-shadow: #FF0033 0 0 1px;	cursor:pointer;
					padding:1px;	color:#EFEFEF; 	font-family:verdana;	background-repeat:repeat;	background-position: 0;	border-width:0 0 0 0px;	border-style:solid;	}
	ul#meenu ul li	{	float:none;	margin:10px 0 0;	}
	ul#meenu ul a	{	text-align:left;	padding:4px;	border-width:0;	border-radius:0px;	font:15px Tahoma;	color:#EFEFEF;	text-decoration:none;	}
	
									/*  Main Meenu */
	ul#meenu li:hover>a,ul#meenu li a.pressed {	border-color:#000000;	border-style:solid;	/*color:black;*/	background-color:#666666; height:auto; width:auto;
												text-shadow:#FF0033 0 0 1px;	background-position:0 100px;	text-decoration:none;	}
	ul#meenu span	{	display:block;	overflow:visible;	background-position:right center;	background-repeat:no-repeat;	padding-right:0px;	}
	ul#meenu ul span 	{	padding-right:12px;	}
	ul#meenu ul li:hover>a,ul#meenu ul li a.pressed	{	background-image:none;	color:#000;	text-decoration:none;	}
	
</style>




<div class="meenudiv">
      <ul id="meenu">	
    	        
        <li><a href="admin_page.php" style="height:30px; line-height:30px; width:198px;"><div style="padding-left:10px;"><b>Home</b></div></a>
	     
	    </li>
        
        <li><a href="admin_aboutus.php" style="height:30px; line-height:30px; width:198px;"><div style="padding-left:10px;"><b>About Us</b></div></a>
	     
	    </li>
        
        <li><a href="#" style="height:40px; line-height:30px; width:198px;"><div style="padding-left:10px;"><b>Garments</b></div></a>
        	    <ul style="margin-left:80px; margin-top:-15px;">
                	<li><a href="admin_insert_garments.php?product=t_shirt"><b>T-Shirt</b></a></li>
                    <li><a href="admin_insert_garments.php?product=shirt"><b>Shirt</b></a></li>
                    <li><a href="admin_insert_garments.php?product=jeans"><b>Jeans</b></a></li>
                    <li><a href="admin_insert_garments.php?product=pants"><b>Pants</b></a></li>
                    <li><a href="admin_insert_garments.php?product=saries"><b>Saries</b></a></li>
                    <li><a href="admin_insert_garments.php?product=suits"><b>Suits</b></a></li>
                    <li><a href="admin_insert_garments.php?product=shoes"><b>Shoes</b></a></li>
                    <li><a href="admin_insert_garments.php?product=hat"><b>Hat</b></a></li>
                            
                </ul>

        
        
	    </li>
        
        <li><a href="#" style="height:40px; line-height:30px; width:198px;"><div style="padding-left:10px;"><b>Electronics</b></div></a>
	     		<ul style="margin-left:80px; margin-top:-15px;">
                	<li><a href="admin_insert_electronics.php?product=lcd"><b>LCD/TFT</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=tv"><b>Smart TV</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=laptops"><b>Laptop</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=desktops"><b>Desktop</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=mobiles"><b>Mobile</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=cameras"><b>Camera</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=fridge"><b>Fridge</b></a></li>
                    <li><a href="admin_insert_electronics.php?product=washing_machine"><b>Washing Machine</b></a></li>
                            
                </ul>
	    </li>
        
        <li><a href="#" style="height:40px; line-height:30px; width:198px;"><div style="padding-left:10px;"><b>Jewelry</b></div></a>
	     		<ul style="margin-left:80px; margin-top:-15px;">
                	<li><a href="admin_insert_jewelry.php?product=rings"><b>Rings</b></a></li>
                    <li><a href="admin_insert_jewelry.php?product=necklaces"><b>Necklace</b></a></li>
                    <li><a href="admin_insert_jewelry.php?product=ear_rings"><b>Ear Rings</b></a></li>
                    <li><a href="admin_insert_jewelry.php?product=kangans"><b>Kangans</b></a></li>
                                                
                </ul>
	    </li>
                       
                
       <li><a href="admin_contactus.php" style="height:30px; line-height:30px; width:198px;"><div style="padding-left:10px;"><b>Contact Us</b></div></a>
	     
	   </li>
    </ul>
        
  </div>   
</div>


