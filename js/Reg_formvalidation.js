function checkform()
	{	
		var x=document.RegisterUserForm.name.value;
		if(x==null || x=="")
		{
			alert("Name must be filled");
			return false;
		}
		else
		{
			var y = document.RegisterUserForm.tel.value;
			if(y.length!=10)
			{
			alert("Phone Number not valid");
			return false;
			}
			
			else
			{
				var z = document.RegisterUserForm.email.value;
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if (!(z.match(mailformat)))
					{
						alert("Not a valid e-mail address");
						return false;
					}
				
					else
					{
						var w = document.RegisterUserForm.password.value;
						var passw=  /^[A-Za-z]\w{7,14}$/;  
						if(!(w.match(passw))) 
							{
							alert("First character must be a letter, must contain numeric digits, character only");
							return false;
							}
							
						else if(w.length < 8)
							{
							alert("Length of Password Must be atleast 8");							
							return false;
							}													
						else 
							{
							
							if(!(document.RegisterUserForm.acceptTerms.checked))
									{
										alert("You must abide by Terms and Conditions");
										return false;
									}
							else{
								return true;
							}
							}
				}				
			}		
		}		
	}