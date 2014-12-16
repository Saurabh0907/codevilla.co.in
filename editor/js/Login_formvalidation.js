function checklogin()
	{
		var z = document.LoginUserForm.email.value;
		var atpos=z.indexOf("@");
		var dotpos=z.lastIndexOf(".");
		if (!z)
		{
		alert("Enter e-mail address");
		return false;
		}
				
		else
		{
		var w = document.LoginUserForm.password.value;
		if(w==null || w=="")
			{
			alert("Password must be filled");
			return false;
			}
		else if(w.length < 8)
			{
			alert("Length of Password Must is atleast 8");							
			return false;
			}
		else 
			{
			return true;
			}
		}
	}		

	
	