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
				}
				
			.login_div
			{
				display:none;
			}
			</style>";
}
else
{
	echo '<script language="javascript">;
		 </script>';
	echo "<style>
				.overlay_div
					{
						background-image: url(img/black.jpeg);
						background-position: center;
						opacity:.20;
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
			
			</style>";
	
}

?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>CodeVilla - A House where you can code.</title>
	<link href="css/br_styles.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
	<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="njoa4ck2yv5w7n7"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<style>
		.bg1{
			visibility: hidden;
		}
		.bg2 
		{
		  background-image: url(img/loading.gif);
		  background-repeat: no-repeat;
		  background-position: center; 
		}
		
		body{background: linear-gradient(rgba(118, 89, 89, 0.35), rgba(118, 89, 89, 0.35)), url('img/fabric.png');}
	</style>
	
		<script>
		
		//alert("Saurabh Garg");
		function call_clear()
		{
		document.getElementById('content').value = "";
		document.getElementById('filename').value = "";
		}

		
		function logout()
		{	
		$.get( "session/session_end.php", function( data ) {
					window.location.reload();	
		});
		}
				
		</script>

</head>
<body>
	
	<div class="filemanager" style="z-index:1000">

		<div class="search">
			<input type="search" placeholder="Find a file.." />
		</div>

		<div class="breadcrumbs" style="margin-top:10%"></div>

		<div id="new_ele" class="overlay_div">
			<ul class="data"></ul>
		</div>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>

	</div>
	
	<div class="login_div" style="z-index:1002">
		<a id="login1" rel="icon"><img title="Login" alt="Login" height="60px" width="60px" src="img/login2.png" onmouseover="this.src='img/login1.png'" onmouseout="this.src='img/login2.png'" style="cursor:pointer"></img></a>&nbsp;&nbsp;
		<a id="register1" rel="icon"><img title="Register" alt="Register" height="60px" width="60px" src="img/register2.png" onmouseover="this.src='img/register1.png'" onmouseout="this.src='img/register2.png'" style="cursor:pointer"></img></a>
				
	</div>
	
	
	<div class ="editor" style="z-index:1000">
		<div class="field">
			<input type="text" name="filename" id="filename" placeholder="Filename (e.g. treehouse.txt)">
		</div>
		<div class="field">
			<textarea name="content" id="content" placeholder="Type your content here..."></textarea>
		</div>
		<div class="field">
			<div id="container"></div>
			<button id="but" onclick="call_drop()">Dropbox</button>
			<button id="save_but" onclick="call_save()">Save</button>
			<button id="clear_but" onclick="call_clear()">Clear</button>
			<br>
			<button id="logout" onclick="logout()">Logout</button>
		</div>
	
		
	</div>
	<!-- Include our script files -->
	
	<!--<script>
	$.get("session/return_session.php",function(data)
		{
			if(data=="N_O_T_S_E_T")
			{
			document.getElementById('loadarea').src= 'script.js';
			}
			else
			{
			document.getElementById('loadarea').src= 'script.js';
			}
		});
	</script>-->
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/main.js"></script>	
	<script src="open_files.js"></script>
	<script src="save_files.js"></script>
	<script src="js/script.js"></script>
	
</body>
<div id="fade_div"></div>
<div id="loginform_div"><img id="x_img1" src="img/cross.png"><?php include 'Loginform.php'; ?></div>
<div id="registerform_div"><img id="x_img2" src="img/cross.png"><?php include 'Registerform.php'; ?></div>
</html>