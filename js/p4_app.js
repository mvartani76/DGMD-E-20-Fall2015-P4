$(document).ready(function(){
	console.log("Document Loaded");
         
	// This is my Part 1 Hover Effect Code section - this is demonstrated in index.php
	$('.womanaskingformoneypic').hover(function(){
		$('.womanaskingformoneypic').attr({
			'src': './images/woman-asking-for-money.jpg'
		});

		// This is some filtering code in combination with the Hover Effect
		// The paragraph text color alternates between red and a shade of blue
		// when the user hovers over the woman-asking-for-money picture
		$('#sobstoryquotes p').filter(':odd').css('color', 'red' );
		$('#sobstoryquotes p').filter(':even').css('color', '#0c9eed' );
	},
	function(){
		$('.womanaskingformoneypic').attr({
			'src': './images/woman-asking-for-money-pre.jpg'
		});

		// Do not need any filtering for the exit hover as all of the p text will be white
		$('#sobstoryquotes p').css('color', 'white' );
	}); // end hover over woman asking for money pictures
	// End of Part 1 Click Effect Code Section


	// Part 1 form if/else validation

	$('#firstname').focusout(function(event){
		if ($('#firstname').val().length == 0) {
			$('#firstname').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#firstname').css('background-color', '#fff');
		}
	}); // end firstname focusout

	$('#lastname').focusout(function(event){
		if ($('#lastname').val().length == 0) {
			$('#lastname').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#lastname').css('background-color', '#fff');
		}
	}); // end lastname focusout

	$('#streetaddr1').focusout(function(event){
		if ($('#streetaddr1').val().length == 0) {
			$('#streetaddr1').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#streetaddr1').css('background-color', '#fff');
		}
	}); // end streetaddr1 focusout

	$('#city').focusout(function(event){
		if ($('#city').val().length == 0) {
			$('#city').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#city').css('background-color', '#fff');
		}
	}); // end city focusout

	$('#state_prov').focusout(function(event){
		if ($('#state_prov').val().length == 0) {
			$('#state_prov').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#state_prov').css('background-color', '#fff');
		}
	}); // end state_prov focusout

	$('#zip_post_code').focusout(function(event){
		if ($('#zip_post_code').val().length == 0) {
			$('#zip_post_code').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#zip_post_code').css('background-color', '#fff');
		}
	}); // end zip_post_code focusout

	$('#country').focusout(function(event){
		if ($('#country').val().length == 0) {
			$('#country').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#country').css('background-color', '#fff');
		}
	}); // end country focusout

	$('#emailaddr').focusout(function(event){
		if ($('#emailaddr').val().length == 0) {
			$('#emailaddr').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#emailaddr').css('background-color', '#fff');
		}
	}); // end emailaddr focusout

	$('#confirmemailaddr').focusout(function(event){
		if ($('#confirmemailaddr').val().length == 0) {
			$('#confirmemailaddr').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#confirmemailaddr').css('background-color', '#fff');
		}
	}); // end confirmemailaddr focusout

	$('#phonenumber').focusout(function(event){
		if ($('#phonenumber').val().length == 0) {
			$('#phonenumber').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#phonenumber').css('background-color', '#fff');
		}
	}); // end phonenumber focusout

	$('#weburl').focusout(function(event){
		if ($('#weburl').val().length == 0) {
			$('#weburl').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#weburl').css('background-color', '#fff');
		}
	}); // end weburl focusout

	$('#username').focusout(function(event){
		if ($('#username').val().length == 0) {
			$('#username').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#username').css('background-color', '#fff');
		}
	}); // end username focusout

	$('#userpassword').focusout(function(event){
		if ($('#userpassword').val().length == 0) {
			$('#userpassword').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#userpassword').css('background-color', '#fff');
		}
	}); // end userpassword focusout

	$('#confirmuserpassword').focusout(function(event){
		if ($('#confirmuserpassword').val().length == 0) {
			$('#confirmuserpassword').css('background-color', '#0c9eed');
			event.preventDefault();
		} else {
			$('#confirmuserpassword').css('background-color', '#fff');
		}
	}); // end confirmuserpassword focusout	

	// Make sure that password length >= 5
	$('#userpassword').focusout(function(event){
		if ($('#userpassword').val().length < 5) {
			alert('Password must be at least 5 characters');
			event.preventDefault();
		}
	}); // end userpassword focusout

	// Flag errors when button is depressed
	$('button#register-submit').click(function(submit){
		$('#firstname + .error').html(' ');
		$('#lastname + .error').html(' ');
		$('#streetaddr1 + .error').html(' ');
		$('#city + .error').html(' ');
		$('#state_prov + .error').html(' ');
		$('#zip_post_code + .error').html(' ');
		$('#country + .error').html(' ');
		$('#emailaddr + .error').html(' ');
		$('#confirmemailaddr + .error').html(' ');
		$('#phonenumber + .error').html(' ');
		$('#username + .error').html(' ');
		$('#userpassword + .error').html(' ');
		$('#confirmuserpassword + .error').html(' ');

		if ($('#firstname').val().length == 0) {
			$('#firstname + .error').html('Please enter your first name...');
			submit.preventDefault();
		} else {
			$('#firstname + .error').html(' ');
		}

		if ($('#lastname').val().length == 0) {
			$('#lastname + .error').html('Please enter your last name...');
			submit.preventDefault();
		} else {
			$('#lastname + .error').html(' ');
		}

		if ($('#streetaddr1').val().length == 0) {
			$('#streetaddr1 + .error').html('Please enter the street address...');
			submit.preventDefault();
		} else {
			$('#streetaddr1 + .error').html(' ');
		}

		if ($('#city').val().length == 0) {
			$('#city + .error').html('Please enter the city...');
			submit.preventDefault();
		} else {
			$('#city + .error').html(' ');
		}

		if ($('#state_prov').val().length == 0) {
			$('#state_prov + .error').html('Please enter state/province...');
			submit.preventDefault();
		} else {
			$('#state_prov + .error').html(' ');
		}

		if ($('#zip_post_code').val().length == 0) {
			$('#zip_post_code + .error').html('Please enter the zip/post code...');
			submit.preventDefault();
		} else {
			$('#zip_post_code + .error').html(' ');
		}

		if ($('#country').val().length == 0) {
			$('#country + .error').html('Please enter the country...');
			submit.preventDefault();
		} else {
			$('#country + .error').html(' ');
		}

		if ($('#emailaddr').val().length == 0) {
			$('#emailaddr + .error').html('Please enter an email address...');
			submit.preventDefault();
		} else {
			$('#emailaddr + .error').html(' ');
		}

		if ($('#phonenumber').val().length == 0) {
			$('#phonenumber + .error').html('Please enter your phone number...');
			submit.preventDefault();
		} else {
			$('#phonenumber + .error').html(' ');
		}

		if ($('#username').val().length == 0) {
			$('#username + .error').html('Please enter a username...');
			submit.preventDefault();
		} else {
			$('#username + .error').html(' ');
		}

		if ($('#userpassword').val().length == 0) {
			$('#userpassword + .error').html('Please enter a user password...');
			submit.preventDefault();
		} else {
			$('#userpassword + .error').html(' ');
		}

		if ($('#emailaddr').val() != $('#confirmemailaddr').val()) {
			$('#confirmemailaddr + .error').html('Email addresses do not match...');
			submit.preventDefault();
		} else {
			$('#confirmemailaddr + .error').html(' ');
		}

		if ($('#userpassword').val() != $('#confirmuserpassword').val()) {
			$('#confirmuserpassword + .error').html('Passwords do not match...');
			submit.preventDefault();
		} else {
			$('#confirmuserpassword + .error').html(' ');
		}
	}); // end flag errors when button is depressed
	// End of Part 1 if/else form validation

	$('.paperondeskpic').fadeOut(5000).fadeIn(5000);

	// FadeIn effect used in login.php
	$('.logincontainer').hide();
	$('.logincontainer').fadeIn(3000);
	
	// Bind an event to window.orientationchange that, when the device is turned,
	// gets the orientation and displays it to on screen.
	$( window ).on( "orientationchange", function( event ) {
  	$( "#orientation" ).text( "This device is in " + event.orientation + " mode!" );
	});
	
	$('#mobileinternetswipe').bind('swipeleft', function(event){
		$('#mobileinternetswipe').removeClass().addClass('mobileinternet-one');
	}); //end swipe left

	$('#mobileinternetswipe').bind('swiperight', function(event){
		$('#mobileinternetswipe').removeClass().addClass('mobileinternet-two');
	}); //end swipe right

}); // end ready