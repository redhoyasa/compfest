
$(document).ready(function(){
	//global vars
	var form = $(".form-horizontal");
	var name = $("#inputNama");
	var nameInfo = $("#nameInfo");
	var email = $("#inputEmail");
	var emailInfo = $("#emailInfo");
	var noId = $("#inputNoid");
	var noIdInfo = $("#noIdInfo");
	var noTelp = $("#inputNoTl");
	var teleponInfo = $("#teleponInfo");
	var okStatus = "Status : Ok";
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	noId.blur(validateNoId);
	noTelp.blur(validateNoTelp);
	//On key press
	name.keyup(validateName);
	email.keyup(validateEmail);
	noId.keyup(validateNoId);
	noTelp.keyup(validateNoTelp);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validateNoId() & validateNoTelp())
			return true
		else
			return false;
	});
	
	//validation functions
	
	function validateNoTelp(){
		var a = $("#noTelp").val();
		var filter = /[0-9]/;
		if (noTelp.val().length < 1){
			noTelp.addClass("error");
			teleponInfo.text("Jangan lupa isi yang ini juga!");
			teleponInfo.addClass("error");
			return false;
		} else {
			noTelp.removeClass("error");
			teleponInfo.text(okStatus);
			teleponInfo.removeClass("error");
			return false;
		}
	}
	function validateNoId(){
		if (noId.val().length < 1){
			noId.addClass("error");
			noIdInfo.text("Harus diisi yo!");
			noIdInfo.addClass("error");
			return false;
		} else {
			noId.removeClass("error");
			noIdInfo.text(okStatus);
			noIdInfo.removeClass("error");
			return false;
		}
	}

	function validateEmail(){
		//testing regular expression
		var a = $("#inputEmail").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text(okStatus);
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Masukkan email yang valid sob!");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("Nama minimal 4 karakter bro!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(okStatus);
			nameInfo.removeClass("error");
			return true;
		}
	}
	
});