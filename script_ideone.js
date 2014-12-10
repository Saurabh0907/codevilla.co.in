jQuery(document).ready(function($) {
    $('#code').submit( function(e){
        var data = $(this).serialize();
        var source = editor.getValue();
        e.preventDefault();
        
        if( source == '' ) {
            alert( 'No source code provided');
            return false;
        }
        
      document.getElementById('load_gif_id').style.display = 'block';  
        $.ajax({
            type: 'post',
            url: 'process.php',
            dataType: 'json',
            data: data + '&process=1',
            cache: false,
            success: function(response){
	      document.getElementById('load_gif_id').style.display = 'none';  
                $('#response').show();
                //alert(response);
                console.log(response.raw);
                if( response.status == 'success' ) {
                    $('.meta').text( response.meta );
                    $('.output').html('<pre>' + response.output + '</pre>');
                    
                    if( response.cmpinfo ) {
                        $('.cmpinfo').remove();
                        $('.meta').after('<div class="cmpinfo"></div>');
                        $('.cmpinfo').html('<strong>Compiler Info: </strong><br>' + response.cmpinfo );
                    }
                    
                } else {
                    //$('.output').html('<pre>' + response + '</pre>');
                    alert( response.output );
                }
                //alert( response.msg );
            }
        });
        
        return false;
    });
});
