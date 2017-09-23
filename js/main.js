/**
 * Created by Andrei Gh on 1/30/2016.
 */
jQuery(document).ready(function($){
    $('#subscriber-form').submit(function(){
        e.preventDefault();
        //alert ('Submit');
        //serialize form
        var subscriberData=$('#subscriber-form').serialize();
        //submit form
        $.ajax({
            type:'post',
            url:$('#subscriber-form').attr('action'),
            data:subscriberData
        }).done(function(response){
            //if success
            $('#form-msg').removeClass('error');
            $('#form-msg').addClass('success');
            //get message text
            $('#form-msg').text(response);
            $('#name').val();
            $('#email').val();
        }).fail(function(data){
            $('#form-msg').removeClass('success');
            $('#form-msg').addClass('error');
            if(data.responseText!==''){
                $('#form-msg').text(responseText);
            }
            else{
                $('#form-msg').text('Message wasn\'t sent');
            }


        });
    });
});