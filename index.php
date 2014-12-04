<?php
session_start();

include 'Database_Connect.php';

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

?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
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
		
		html,body{
			height:100%;
			background: linear-gradient(rgba(85, 84, 88, 0.2), rgba(93, 89, 108, 0.2)), url('img/fabric.png');
		}
		#sg:hover + #sgi{
			display : block;
			}
		#gp:hover #gpi{
			display : block;
			}
		#sm:hover #smi{
			display : block;
			}
	
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
	
	
	<div class ="editor" style="z-index:1000">
		<div class="field">
			<input type="text" style="padding-top:20px;padding-bottom:20px;" name="filename" id="filename" placeholder="Filename (e.g. treehouse.txt)">
		</div>
		<div class="field">
			<textarea name="content" id="content" placeholder="Type your content here..."></textarea>
		</div>
		<div class="field">
			<div id="container"></div>
			<button id="but" class="btn btn-default" onclick="call_drop()">Dropbox</button>
			<button id="save_but" class="btn btn-primary btn-sm" onclick="call_save()">Save</button>
			<button id="clear_but" class="btn btn-primary btn-sm" onclick="call_clear()">Clear</button>
			<br>
			</div>
	
		
	</div>
	
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/main.js"></script>	
	<script src="open_files.js"></script>
	<script src="save_files.js"></script>
	<script src="js/script.js"></script>

<div class="navbar navbar-inverse navbar-fixed-bottom">
   <div class="navbar-inner">
       <div class="container">
           <div class="nav-collapse collapse">
               <ul class="nav pull-left"> 
                    <li><a id="" style="cursor:pointer;color:#EFEFEF;"><b>Developers :</b></a></li>               
                    <li><a id="gp" style="cursor:pointer;color:#EFEFEF;">Gaurav Pandvia</a></li>
                    <li><a id="sg" style="cursor:pointer;color:#EFEFEF;">Saurabh Garg</a></li>
                    <li><a id="sm" style="cursor:pointer;color:#EFEFEF;">Shikher Mishra</a></li>
               </ul>
               <ul class="nav pull-right">
                    <li><a id="" style="cursor:pointer;color:#EFEFEF;"><b>Get Social :</b></a></li>               
                    <li><a id="" style="cursor:pointer;color:#EFEFEF;">FB</a></li>
                    <li><a id="" style="cursor:pointer;color:#EFEFEF;">GO</a></li>
                    <li><a id="" style="cursor:pointer;color:#EFEFEF;">Tw</a></li>
               </ul>
           </div>
       </div>
   </div>
</div>

	
</body>
<div id="fade_div"></div>
<div id="loginform_div"><img id="x_img1" src="img/cross.png"><?php include 'Loginform.php'; ?></div>
<div id="registerform_div"><img id="x_img2" src="img/cross.png"><?php include 'Registerform.php'; ?></div>
</html>