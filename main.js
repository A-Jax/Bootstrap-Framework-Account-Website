function sendContact() {
                
    jQuery.ajax({
    url: "contact_mail.php", // send information to php file
    data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
    type: "POST", // declare type of post
    success:function(data){ // if successful (true) call function in if statement. Displayed to Div.
    $("#mail-status").html(data);
    $('textarea').val('');
    $('input').val('');
    },
    error:function (){} // if failed (false) call function in if statement. Displayed to Div.
    });

}