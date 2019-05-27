$('#modal-contact').on('show.bs.modal', function (event) {
	//event.preventDefault();
	$('.statusMsg').html('');
});

$('#modal-service').on('show.bs.modal', function (event) {
	//event.preventDefault();
	$('.statusMsg').html('');
	var type = $('#modal-service').data('subtype'); //getter
	$('#myModalLabel').html(type);
})

$( "#btn-yoga" ).click(function() {
  $('#modal-service').data('subtype','Yoga'); //setter
});

$( "#btn-zumba" ).click(function() {
	  $('#modal-service').data('subtype','Zumba'); //setter
});

$( "#btn-pop-dance" ).click(function() {
  $('#modal-service').data('subtype','Pop Dance'); //setter
});

$( "#btn-meditation" ).click(function() {
  $('#modal-service').data('subtype','Meditation'); //setter
});

$( "#btn-sexy-tease" ).click(function() {
  $('#modal-service').data('subtype','Sexy Tease Dance'); //setter
});


function submitContactForm($url){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    
    var inputName = $('#inputContactName');
    var inputEmail = $('#inputContactEmail');
    var inputMessage = $('#inputContactMessage');
    
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
    	var $data = 'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message;
    	console.log("data: " + $data) 
        $.ajax({
            type:'POST',
            url: $url,
            dataType: "json",
            data: $data,
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

function submitSubscriptionForm($url){
	
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var serviceType = $("input[name='serviceType']:checked").val();
    
    var inputDate = $('#inputDate');
    var inputName = $('#inputName');
    var inputContactNumber = $('#inputContactNumber');
    var inputEmail = $('#inputEmail');
    var inputMessage = $('#inputMessage');
    
    inputDate.next().html('');
    inputName.next().html('');
    inputContactNumber.next().html('');
    inputEmail.next().html('');
    inputMessage.next().html('');
    
    var date = inputDate.val();
    var name = inputName.val();
    var contactNumber = inputContactNumber.val();
    var email = inputEmail.val();
    var message = inputMessage.val();
    
    var param = "";
    if(serviceType == '0' && date.trim() === '' ){
    	inputDate.next().html('<span style="color:red;">Please enter your desired date.</span>');
    	inputDate.focus();
        return false;
    }else if(name.trim() == '' ){
        inputName.next().html('<span style="color:red;">Please enter your name.</span>');
        inputName.focus();
        return false;
    }else if(contactNumber.trim() == '' ){
    	inputContactNumber.next().html('<span style="color:red;">Please enter your contact number.</span>');
    	inputContactNumber.focus();
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
    	
    	$serviceName = $('#modal-service').data('subtype'); //getter
    	param += '&serviceName='+$serviceName;
    	param += '&serviceType='+serviceType;
    	
    	if (serviceType === '0'){
    		param += '&date='+date;
    	}
    	
    	param += '&name='+name;
    	param += '&contactNumber='+contactNumber;
    	param += '&email='+email;
    	param += '&message='+message;
    	
    	var $data = 'subscriptionForm=1' + param;
    	console.log("data: " + $data) 
        $.ajax({
            type:'POST',
            url: $url,
            dataType: "json",
            data: $data,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
                $('#form-loader').show();
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
            error: function(xhr, status, error) {
            	console.log("Error >> " + xhr + " " + status + " " + error)
            },
            complete: function() { 
                $('#form-loader').hide();
            }
        });
    }
}

function submitSpaceRent($url){
	
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var serviceType = $("input[name='serviceType']:checked").val();
    
    var inputDate = $('#srBookDate');
    var inputHoursUse = $('#srHoursUse');
    var inputName = $('#srInputName');
    var inputContactNumber = $('#srInputContactNumber');
    var inputEmail = $('#srInputEmail');
    var inputMessage = $('#srInputMessage');
    
    inputDate.next().html('');
    inputHoursUse.next().html('');
    inputName.next().html('');
    inputContactNumber.next().html('');
    inputEmail.next().html('');
    inputMessage.next().html('');
    
    var date = inputDate.val();
    var hoursUse = inputHoursUse.val();
    console.log('Hours user: ' + hoursUse);
    var name = inputName.val();
    var contactNumber = inputContactNumber.val();
    var email = inputEmail.val();
    var message = inputMessage.val();
    
    var param = "";
    
    if(date.trim() === '' ){
    	inputDate.next().html('<span style="color:red;">Please enter your desired date.</span>');
    	inputDate.focus();
        return false;
    }else if(hoursUse == null ){
    	inputHoursUse.next().html('<span style="color:red;">Select hours of use.</span>');
    	inputHoursUse.focus();
        return false;
    }else if(name.trim() == '' ){
        inputName.next().html('<span style="color:red;">Please enter your name.</span>');
        inputName.focus();
        return false;
    }else if(contactNumber.trim() == '' ){
    	inputContactNumber.next().html('<span style="color:red;">Please enter your contact number.</span>');
    	inputContactNumber.focus();
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
    	
    	
    	param += '&date='+date;
    	param += '&hoursUse='+hoursUse;
    	param += '&name='+name;
    	param += '&contactNumber='+contactNumber;
    	param += '&email='+email;
    	param += '&message='+message;
    	
    	var $data = 'spaceRental=1' + param;
    	console.log("data: " + $data) 
        $.ajax({
            type:'POST',
            url: $url,
            dataType: "json",
            data: $data,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
                $('#sr-form-loader').show();
            },
            success:function(response){
                if(response.status == 'OK'){
                    inputName.val('');
                    inputEmail.val('');
                    inputMessage.val('');
                    $('.srStatusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.srStatusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            },
            error: function(xhr, status, error) {
            	console.log("Error >> " + xhr + " " + status + " " + error)
            },
            complete: function() { 
                $('#sr-form-loader').hide();
            }
        });
    }
}

