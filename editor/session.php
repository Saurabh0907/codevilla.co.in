<?php

if (isset($_SESSION['user_id']))
{
	echo '<script language="javascript">;
		  alert("SET");
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
		  alert("NOT SET");
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