<script src="https://apis.google.com/js/client:platform.js" async defer></script>
<script src = "https://plus.google.com/js/client:plusone.js"></script>

<?php
session_start();

include 'Database_Connect1.php';

if (isset($_SESSION['user_id']))
{
	echo '<script language="javascript">;
		 </script>';
		 
	echo "<style>
			.overlay_div
				{
				background: linear-gradient(rgba(0, 0, 0, 0.08), rgba(0, 0, 0, 0.08)), url('img/fabric.png');
				border-radius: 25px;
				}
				
			.login_div
			{
				display:none;
			}
			
			#login1{display:none;}
			#logout{display:block;}
			</style>";
}
else
{
	echo '<script language="javascript">;
		 </script>';
	echo "<style>
				.overlay_div
					{
					background: url('img/fabric.png');
						background-position: center;
						opacity:.04;
						z-index:1001;
						pointer-events:none;
						
					}
					
				.login_div
					{
						float:left;
						width: 35%;
						position: absolute;
						margin: auto 50px;
						margin-top:25%;
						margin-left:10%;
						display: block;
					}
					
					#logout{display:none;}
					#login1{display:block;}

								
			</style>";
	
}

$email = $_SESSION['sg_email'];
$name = $_SESSION['sg_name'];
unset($_SESSION['sg_email']);
unset($_SESSION['sg_name']);

$url = 'http://codevilla.co.in';
$login = mysql_query("SELECT * FROM user1 WHERE email='$email' and name='$name'");
$x = mysql_fetch_assoc($login);
if (mysql_num_rows($login) == 1) 
{
session_start();
$_SESSION['user_id'] = $x['identity'];
header( "Location: $url" );
}
else {
}
?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<title>CodeVilla - A House where you can code.</title>
	<link href="css/br_styles.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
	<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="njoa4ck2yv5w7n7"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="acm/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
	<style>
		.bg2 
		{
		background: linear-gradient(rgba(85, 84, 88, 0.2), rgba(93, 89, 108, 0.2)), url('img/fabric.png');
		background-repeat: no-repeat;
		background-position: center; 
		}
		
		html,body{
			height:100%;
			background: linear-gradient(rgba(85, 84, 88, 0.2), rgba(93, 89, 108, 0.2)), url('img/fabric.png');
		}
		
	</style>
	
		<script>

		
		
		function logout()
		{	
		$.get( "session/session_end.php", function( data ) {
					window.location.reload();	
		});
		}
				
		</script>
		<script type="text/javascript" src="js/Reg_formvalidation.js"></script>
<style type="text/css">

        #registration {
				position:absolute;
				margin-top:4%;
				margin-left:31%;
				font-family:sans-serif; 
				font-size: 12px;
				-webkit-user-select: none;
				color: #fff;
				background-color:#1d1711;
				-webkit-border-radius: 10px;
				-moz-border-radius: 10px; border-radius: 10px;*/
				margin: 20px;
				width: 32%;
					}

 #registration a {
				color: #8c910b;
				text-shadow: 0px -1px 0px #000;
      }
	  
#registration fieldset {
				padding: 20px;
      }
	  
input.text {
      -webkit-border-radius: 15px;
      -webkit-box-shadow: 0px 2px 15px #999;
	 		  
	  -moz-border-radius: 15px;
      -moz-box-shadow: 0px 5px 15px #777;
		
	  border-radius: 10px;
      background: #fff url('img/formicon.png') no-repeat;
	  
	  border:none;
      
	  font-size: 14px;
      width: 100%;
      padding: 15px 16px 15px 30px;
      color:#1d1711;
      
}	  


 input#email { 
 	margin:2%;
 	background-position: 4px 5px;
	}
	
 input#password { 
 	margin:2%; 
 	background-position: 4px -20px, 0px 0px;
	}
	
 input#name {  
 	margin:2%;
 	background-position: 4px -46px, 0px 0px; 
	}
	
 input#tel {  
 	margin:2%;
 	background-position: 4px -76px, 0px 0px; 
	}
	
#registration h2 {
	color: #fff;
	text-align: center;
	padding: 18px;
	margin: 0px;
	font-weight: normal;
	font-size: 24px;
	font-family: Helvetica;
	}
	
	#registration p {
      position: relative;
      }
	
#registerNew {
	width: 203px;
	height: 40px;
	border: none;
	text-indent: -9999px;
	background: url('img/createAccountButton.png') no-repeat;
	cursor: pointer;
	float: right;
	}
	
	#registerNew:hover { background-position: 0px -41px; }
	#registerNew:active { background-position: 0px -82px; }
	
	#Old_User{
			background: url(images/buttons1.png) no-repeat;
			height: 37px;
			width: 37px;
			position: absolute;
			top:3px;
		}
		
	#load_gifr
 	{display:none;
 	}
 
</style>		
</head>
<body>
	
<div class="navbar navbar-inverse navbar-fixed-top">
   <div class="navbar-inner">
       <div class="container">
           <a class="brand" style="color:#EFEFEF;margin-left:-15%;"><img onclick="window.location.reload()" style="cursor:pointer;margin-top:-1%;" alt="Brand" src="img/c3.png">&nbsp<b>CodeVilla - A House where you can Code</b></a>
           <div class="nav-collapse collapse">
               <ul class="nav pull-right">
                    <li><a id="register1" style="cursor:pointer;color:#EFEFEF;">Register</a></li>
                    <li><a id="login1" style="cursor:pointer;color:#EFEFEF;">Login</a></li>
                    <li><a id="logout" onclick="logout()" style="cursor:pointer;color:#EFEFEF;">Logout</a></li>
               </ul>
           </div>
       </div>
   </div>
</div>


<div id="main_reg">
<div id="registration">
 <h2>Create an Account</h2>

 <form autocomplete="off" id="RegisterUserForm12" name="RegisterUserForm" action="Reg_Login_db1.php" method="POST" autocomplete="off">
 	<fieldset>
        <p><input autocomplete="off" id="name12" name="name" type="text" class="text" value="" placeholder="Name"/></p>
        
		<p><input autocomplete="off" id="tel" name="tel" type="tel" class="text" value="" placeholder="Phone Number"/></p>
        
        <p><input autocomplete="off" id="email12" name="email" type="email" class="text" value="" placeholder="Email"/></p>
        
        <p><input autocomplete="off" id="password" name="password" class="text" type="password" placeholder="Password"/></p>
		<p> First character must be a letter, must contain numeric digits and characters only </p>
           
        <p>
			<img id="load_gifr" src="img/loading.gif" style="height:40px;width:40px;"></img>
            <button id="registerNew" type="submit" name="continue" value="submit" onClick="return checkform();">Register</button>
        </p>
 	</fieldset>

 </form>
</div>
</div>
	
			
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/main.js"></script>	
	<script src="open_files.js"></script>
	<script src="save_files.js"></script>
	<script src="js/script.js"></script>
	<script src="script_ideone.js"></script>
<script>document.getElementById('email12').value="<?php echo $email; ?>";document.getElementById('name12').value="<?php echo $name; ?>";</script>
	
</body>
<div id="fade_div"></div>
<div id="loginform_div"><img id="x_img1" src="img/cross.png"><?php include 'Loginform.php'; ?></div>
<div id="registerform_div"><img id="x_img2" src="img/cross.png"><?php include 'Registerform.php'; ?></div>
</html>