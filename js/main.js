$(document).ready( function() {
    $("#login1").click(function() {
        $("#fade_div").css({"display":"inline"});
        $("#loginform_div").css({"display":"inline"});
    });
});


$(document).ready( function() {
    $("#x_img1").click(function() {
        $("#fade_div").css({"display":"none"});
        $("#loginform_div").css({"display":"none"});        
	 });
});

$(document).ready( function() {
    $("#register1").click(function() {
        $("#fade_div").css({"display":"inline"});
        $("#registerform_div").css({"display":"inline"});
    });
});


$(document).ready( function() {
    $("#x_img2").click(function() {
        $("#fade_div").css({"display":"none"});
        $("#registerform_div").css({"display":"none"});        
	 });
});