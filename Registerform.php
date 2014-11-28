<html>
<head>

<title></title>
<script type="text/javascript" src="js/Reg_formvalidation.js"></script>
<style type="text/css">


html{margin: 0; padding: 0; border: none;}

	

        #registration {
				position:absolute;
				margin-top:7%;
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
 
</style>
<script>
$(document).ready( function() {
	$("#RegisterUserForm").submit(function(event) {
	event.preventDefault();
	var z = checkform();
	if(z == true)
	{
	
		
		$.ajax({
			url:"Reg_Login_db.php",
			data: $("#RegisterUserForm").serialize(),
			type:"POST",
			success: function(txt) {
				alert(txt);
				$("#fade_div").css({"display":"none"});
				$("#registerform_div").css({"display":"none"});
				document.getElementById("RegisterUserForm").reset();
			},
			error: function(txt) {
				console.log(txt);
			},
			cache:false
		});
	}
	else
	{
	
	}
	
	});
});

</script>

</head>

<body>
<div id="main_reg">
<div id="registration">
 <h2>Create an Account</h2>

 <form autocomplete="off" id="RegisterUserForm" name="RegisterUserForm" action="Reg_Login_db.php" method="POST" autocomplete="off">
 	<fieldset>
        <p><input autocomplete="off" id="name" name="name" type="text" class="text" value="" placeholder="Name" /></p>
        
		<p><input autocomplete="off" id="tel" name="tel" type="tel" class="text" value="" placeholder="Phone Number"/></p>
        
        <p><input autocomplete="off" id="email" name="email" type="email" class="text" value="" placeholder="Email"/></p>
        
        <p><input autocomplete="off" id="password" name="password" class="text" type="password" placeholder="Password"/></p>
		<p> First character must be a letter, must contain numeric digits and characters only </p>
        
        <p><input autocomplete="off" id="acceptTerms" name="acceptTerms" type="checkbox" />
            <label for="acceptTerms">I agree to the <a href="">Terms and Conditions</a></label>
        </p>
        
        <p>
			<!--<a href="javascript:ajaxpage('login.php','main_reg');" title="Already A User" id="Old_User" class="logleft flip" style="left: 0px; opacity: 1;"></a>-->
            <button id="registerNew" type="submit" name="continue" value="submit" onClick="return checkform();">Register</button>
        </p>
 	</fieldset>

 </form>
</div>
</div>
</body>
</html>
