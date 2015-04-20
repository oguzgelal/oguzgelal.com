$(document).ready(function(){
	$(document).on('click', '.contact-form-submit', function(){
		var name = $('.contact-form-name').val();
		var phone = $('.contact-form-phone').val();
		var email = $('.contact-form-email').val();
		var message = $('.contact-form-message').val();
		var ok = true;

		if (email.length === 0){
			var bcolor = $('.contact-form-email').css('border-color');
			$('.contact-form-email').css('border-color', 'red');
			setTimeout(function(){ $('.contact-form-email').css('border-color', bcolor); },1000);
			ok = false;
		}
		if (message.length === 0){
			var bcolor = $('.contact-form-message').css('border-color');
			$('.contact-form-message').css('border-color', 'red');
			setTimeout(function(){ $('.contact-form-message').css('border-color', bcolor); },1000);
			ok = false;
		}

		if (ok){
			var buttonVal = $('.contact-form-submit').html();
			$('.contact-form-submit').html(" <i class='fa fa-spin fa-spinner' style='font-size: 13px; vertical-align: middle;'></i>");
			$.ajax({
				type: "POST",
				url: "/send",
				data: {
					name: name,
					phone: phone,
					email: email,
					message: message
				}
			}).fail(function(e){
				sweetAlert("Oops...", "Sorry, message could not be sent. Worry not, you can allways reach me at o.gelal77@gmail.com", "error");
			}).success(function(msg) {
				$('.contact-form-submit').html(buttonVal);
				$('.contact-form-name').val("");
				$('.contact-form-phone').val("");
				$('.contact-form-email').val("");
				$('.contact-form-message').val("");
				if (msg=="1"){ sweetAlert("Thanks", "I got your message. I'll get back to you as fast as I can.", "success"); }
				else{ sweetAlert("Oops...", "Sorry, message could not be sent. Worry not, you can allways reach me at o.gelal77@gmail.com", "error"); }
			});	
		}
	});

});