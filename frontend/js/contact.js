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
			$.ajax({
				type: "POST",
				url: "/send",
				data: { name: name, phone: phone, email: email, message: message }
			}).fail(function(e){
				$('body').append(e.responseText);
			}).success(function(msg) {
				alert(msg);
			});	
		}
	});

});