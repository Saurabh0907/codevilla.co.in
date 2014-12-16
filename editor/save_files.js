function ajaxFunction_save(name,content)
{
				var ajaxRequest1;	
				var filepath;
					try{ajaxRequest1 = new XMLHttpRequest();
					} catch (e){
						try{
							ajaxRequest1 = new ActiveXObject("Msxml2.XMLHTTP");
						} catch (e) {
							try{
								ajaxRequest1 = new ActiveXObject("Microsoft.XMLHTTP");
							} catch (e){
								alert("Your browser broke!");
								return false;
							}
						}
					}
					
					ajaxRequest1.onreadystatechange = function(){
						if(ajaxRequest1.readyState == 4){
							filepath = ajaxRequest1.responseText;
							//alert(filepath);
							filepath = "http://codevilla.co.in/".concat(filepath);
							Dropbox.save(filepath, name);
									}
								}
								
							var params = "name="+name+"&content="+content;
							
							ajaxRequest1.open("POST", "save_files.php", true);	
							
							ajaxRequest1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							ajaxRequest1.setRequestHeader("Content-length", params.length);
							ajaxRequest1.setRequestHeader("Connection", "close");
							ajaxRequest1.send(params); 
								
								
							//ajaxRequest1.open("GET", "put_data.php?name="+name+"&content="+content, true);	
							//ajaxRequest1.send(null); 
}
function call_save()
		{
//			var content = document.getElementById("content").value;
			var content= editor.getValue();
			var name = document.getElementById("filename").value;
			ajaxFunction_save(name,content);
		}
		