$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(10,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				if(html == "not")
					{
						j("#in-out").css({"display":"inline"});
						j("#in_out_menu").css({"display":"none"});
					}
				else
					{
						j("#in-out").css({"display":"none"});
						j("#in_out_menu").css({"display":"inline"});
						
					}
			  }
			})
		})
	});
});

$(document).ready(function(){
  $("#lo_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "POST",
            url: 'check_session.php',
            cache: false,
            success: function(data)
            {
			$("#foot_div").css({"display":"none"});
             $("#content").load('exphome.php');	
			}
        });
    });
});


$(document).ready(function(){
  $("#po_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                 $("#content").load('profile.php'); // www.example.com/file.php
            }
        });
      });
});

$(document).ready(function(){
  $("#edit_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                 $("#content").load('user_edit.php'); // www.example.com/file.php
            }
        });
      });
});



$(document).ready(function(){
  $("#home_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                $("#content").load('exphome.php'); // www.example.com/file.php
            }
        });
      });
});

$(document).ready(function(){
  $("#gal_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                $("#content").load('imageslider/Imageslider1.php'); 
            }
        });
      });
});

$(document).ready(function(){
  $("#discus_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
                $("#foot_div").css({"display":"none"});
				$("#content").load('findex.php');
            }
        });
      });
});

$(document).ready(function(){
  $("#oth_web").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                $("#content").load('other_websites_main.php'); 
            }
        });
     });
});

$(document).ready(function(){
  $("#book_crawl").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                $("#content").load('bookscrawl.php');
				$("#content").load('loading.php');
            }
        });
      });
});





$(document).ready(function(){
  $("#today_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
				$("#foot_div").css({"display":"none"});
                $("#content").load('mapsofindia.php');
				$("#content").load('loading.php');
            }
        });
      });
});


$(document).ready(function(){
$("#histtv_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
			$("#foot_div").css({"display":"none"});
            $("#content").load("historytv18XML.php");
            }
        });
    });
});