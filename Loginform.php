<html>
<head>
<title></title>

<script src="js/Login_formvalidation.js"></script>
<style type="text/css">


html{margin: 0; padding: 0; border: none;}


        #login {
				position:absolute;
				margin-top:8%;
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

 	  
#login fieldset {
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
      padding: 7px 8px 7px 30px;
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

#login h2 {
	color: #fff;
	text-align: center;
	padding: 18px;
	margin: 0px;
	font-weight: normal;
	font-size: 24px;
	font-family: Helvetica;
	}
	
	#login p {
      position: relative;
      }
	
#LoginOld {
	width: 203px;
	height: 40px;
	border: none;
	text-indent: -9999px;
	background: url('img/LoginAccountButton.png') no-repeat;
	cursor: pointer;
	float: right;
	}
	
	#LoginOld:hover { background-position: 0px -41px; }
	#LoginOld:active { background-position: 0px -82px; }
	
	
	
	#Home_User{
			background: url(images/House.png) no-repeat;
			height: 37px;
			width: 37px;
			position: absolute;
			top:-5px;
		}
 
</style>



<script>
$(document).ready( function() {
	$("#LoginUserForm").submit(function(event) {
	event.preventDefault();
	var z = checklogin();
	if(z == true)
	{
	
		
		$.ajax({
			url:"Login_Login_db.php",
			data: $("#LoginUserForm").serialize(),
			type:"POST",
			success: function(txt) {
				//alert(txt);
				if(txt == '1')
				{
				alert("Logged In Successfully");
				$("#fade_div").css({"display":"none"});
				$("#loginform_div").css({"display":"none"});
				document.getElementById("LoginUserForm").reset();
				window.location.reload();
				}
				else
				{
				alert("Invalid Username Or Password");
				}
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

<body bgcolor="#ebe9e2">

<div id="login">
 <h2>Login</h2>

 <form autocomplete="off" id="LoginUserForm" name="LoginUserForm" action="Login_Login_db.php" autocomplete="off">
 	<fieldset>
        <p><input autocomplete="off" id="email" name="email" class="text" value="" placeholder="Email"/></p>
        <p><input autocomplete="off" id="password" name="password" class="text" type="password" placeholder="Password"/></p>
                
        <p>
			<!--<a title="Forgot Password" id="forgot" ><img src="images/password.png"></img></a>-->
			<button id="LoginOld" type="submit" >Login</button>
        </p>
 	</fieldset>

 </form>
</div>

</body>
</html>
