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
		
		
		function call_clear()
		{
		editor.setValue("");
		document.getElementById('filename').value = "";
		}

		
		function logout()
		{	
		$.get( "session/session_end.php", function( data ) {
					window.location.reload();	
		});
		}
				
		</script>
		<script>
			var editor;
			  $(function () {
        $('textarea[data-editor]').each(function () {
            var textarea = $(this);

            var mode = textarea.data('editor');

            var editDiv = $('<div>', {
                position: 'absolute',
                width: textarea.width(),
                height: textarea.height(),
                'class': textarea.attr('class')
            }).insertBefore(textarea);

            textarea.css('display', 'none');

            editor = ace.edit(editDiv[0]);
            

            editor.renderer.setShowGutter(true);
            editor.getSession().setValue(textarea.val());
            editor.getSession().setMode("ace/mode/" + mode);
            // editor.setTheme("ace/theme/idle_fingers");

            // copy back to textarea on form submit...
            textarea.closest('form').submit(function () {
                textarea.val(editor.getSession().getValue());
            })
      

        });
    });
			</script>
<script>
		function selee() {
		var theme=$("#select option:selected").text();
		editor.setTheme("ace/theme/"+theme);
	}
		function selmod() {
			var mode=$("#lang1 option:selected").text();
			editor.getSession().setMode("ace/mode/" + mode);
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
	
	 
	<div class ="editor" id="edit1" style="z-index:1000;margin-top:-4%;">
		<div class="field">
			<input type="text" style="padding-top:20px;padding-bottom:20px;" name="filename" id="filename" placeholder="Filename (e.g. treehouse.txt)">
		</div>
		
		<div class="field">
		<form id="code" action="#" method="post" style="display: inline;">
				<textarea name="content" data-editor="javascript"  id="content" placeholder="Type your content here..."></textarea>
			<br>
							<span class="glyphicon glyphicon-leaf" aria-hidden="true" ></span>
	
							<select onChange="selee()" id="select" style="width:26%;">
							<option selected>default</option>
							<option>ambiance</option>
							<option>chaos</option>
							<option>chrome</option>
							<option>clouds</option>
							<option>cobalt</option>
							<option>dawn</option>
							<option>eclipse</option>
							<option>github</option>
							<option>kuroir</option>
							<option>twilight</option>
							<option>merbivore</option>
							<option>crimson_editor</option>
							<option>dreamweaver</option>
							<option>idle_fingers</option>
							<option>katzenmilch</option>
							<option>kr_theme</option>
							<option>monokai</option>
							<option>tomorrow</option>
							<option>solarized_light</option>
							<option>terminal</option>
							<option>textmate</option>
							<option>vibrant_ink</option>
							<option>xcode</option>
							</select>
	
							<span class="glyphicon glyphicon-th-large" aria-hidden="true" ></span>
	
					   <select name="lang1" id="lang1" style="width:26%;">
			   
							<option value="1" selected="selected">c_cpp</option>
							<option value="27">csharp</option>
							<option value="35">javascript</option>
							<option value="10">java</option>
							<option value="3">perl</option>
							<option value="29">php</option>
							<option value="4">python</option>
							<option value="117">r</option>
							<option value="17">ruby</option>
							<option value="38">tcl</option>
							<option value="40">mysql</option>
					
							<option><br></option>
							<option><b>No Compiler for Following</b></option>
					
							<option>css</option>
							<option>django</option>
							<option>html</option>
							<option>json</option>
							<option>latex</option>
							<option>matlab</option>
							<option>mysql</option>
							<option>objectivec</option>
							<option>vbscript</option>
							<option>verilog</option>
							<option>xml</option>
						</select>
				
					<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Compile" />
			</form>&nbsp
			
			<button id="but" class="btn btn-default" onclick="call_drop()">Dropbox</button>
			<button id="save_but" class="btn btn-primary btn-sm" onclick="call_save()">Save</button>
			<button id="clear_but" class="btn btn-primary btn-sm" onclick="call_clear()">Clear</button>
			
			<br><br><label for="input" class="lead">Input: <span class="description">(Data that will be given to the program on the stdin.)</span></label>
			<div id="textarea1" contenteditable name="input1" id="input1"></div>
			<img id="load_gif_id" src="img/loading.gif" style="margin-left:48%;margin-top:2%;margin-bottom:2%;height:50px;width:50px;"></img>
				 <div id="response">
					<label for="input" class="lead">Output:</label>
					<div class="meta"></div>
					<div class="output"></div>
				</div>
			</div>
	
	
	</div>
	
			
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/main.js"></script>	
	<script src="open_files.js"></script>
	<script src="save_files.js"></script>
	<script src="js/script.js"></script>
	<script src="script_ideone.js"></script>

	
</body>
<div id="fade_div"></div>
<div id="loginform_div"><img id="x_img1" src="img/cross.png"><?php include 'Loginform.php'; ?></div>
<div id="registerform_div"><img id="x_img2" src="img/cross.png"><?php include 'Registerform.php'; ?></div>
</html>