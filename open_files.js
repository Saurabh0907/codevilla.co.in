options = {
						success: function(files) {
							alert("Here's the file link: " + files[0].link)
						},
						cancel: function() {},

						linkType: "preview",

						multiselect: false, // or true

						extensions: ['.html', '.php', '.txt', '.c', '.cpp', '.java'],
					};
			
			
				function ajaxFunction(link,type){
					var ajaxRequest;
					
					try{ajaxRequest = new XMLHttpRequest();
					} catch (e){
						try{
							ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
						} catch (e) {
							try{
								ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
							} catch (e){
								alert("Your browser broke!");
								return false;
							}
						}
					}
					
					
					ajaxRequest.onreadystatechange = function(){
						if(ajaxRequest.readyState == 4){
							$('#content').removeClass('bg2');
							document.getElementById('content').innerHTML = ajaxRequest.responseText;
									}
								}
							document.getElementById('content').innerHTML = "";
							if(type=="DROP")
									{
										var n = link.length;
										link = link.slice(8,n);
									}
							$('#content').removeAttr('placeholder');
							$('#content').addClass('bg2');
							
							ajaxRequest.open("GET", "get_data.php?src="+link+"&type="+type+"/", true);	
							ajaxRequest.send(null); 
							}
		
		function call_display(link,name,type)
		{
			var n = name.lastIndexOf("/");
			name = name.substring(n+1);				
			if(type=="DROP")
			{
			$('#filename').val(name);
			ajaxFunction(link,type);
			}
			else
			{
			$('#filename').val(name);
			ajaxFunction(link,type);
			}
		}
		
		function call_drop()
		{
	
				var link="";
				var name="";
					options = {
						success: function(files) {
							name=files[0].name;
							link = files[0].link;
							call_display(link,name,"DROP");
						},
						cancel: function() {},
						linkType: "direct",
						multiselect: false, // or true
						extensions: ['.html', '.php', '.txt', '.c', '.cpp', '.java'],
					};
		$('#but').addClass('bg1');
		var button = Dropbox.createChooseButton(options);
		document.getElementById("container").appendChild(button);
		}
		
//GET LOCAL FILES
		
				
		$(function(){
				$('#new_ele').on('click', '.files > a', function (event) {
					call_display($(this).attr('href'),$(this).attr('title'),"LOCAL");
					event.preventDefault();
				});
			});
		