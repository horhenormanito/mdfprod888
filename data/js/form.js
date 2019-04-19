$('#modalForm').on('show.bs.modal', function (event) {
	$('.statusMsg').html('');
})

function submitContactForm($url){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    
    var inputName = $('#inputName');
    var inputEmail = $('#inputEmail');
    var inputMessage = $('#inputMessage');
    
    inputName.next().html('');
    inputEmail.next().html('');
    inputMessage.next().html('');
    
    var name = inputName.val();
    var email = inputEmail.val();
    var message = inputMessage.val();
    
    if(name.trim() == '' ){
        inputName.next().html('<span style="color:red;">Please enter your name.</span>');
        inputName.focus();
        return false;
    }else if(email.trim() == '' ){
    	inputEmail.next().html('<span style="color:red;">Please enter your email.</span>');
        inputEmail.focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
    	inputEmail.next().html('<span style="color:red;">Please enter valid email.</span>');
        inputEmail.focus();
        return false;
    }else if(message.trim() == '' ){
    	inputMessage.next().html('<span style="color:red;">Please enter your message.</span>');
        inputMessage.focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url: $url,
            dataType: "json",
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
                $('#contact-form-loader').show();
            },
            success:function(response){
                if(response.status == 'OK'){
                    inputName.val('');
                    inputEmail.val('');
                    inputMessage.val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            },
            complete: function() { 
                $('#contact-form-loader').hide();
            }
        });
    }
}