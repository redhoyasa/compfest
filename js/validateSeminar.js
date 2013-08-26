
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
	var motivation1 = $("#motivation-1");
	var motivation2 = $("#motivation-2");
	var motivation1Info = $("#motivationInfo-1");
	var motivation2Info = $("#motivationInfo-2");
	var okStatus = "Status : Ok";
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	noId.blur(validateNoId);
	noTelp.blur(validateNoTelp);
	motivation1.blur(validateMotivation1);
	motivation2.blur(validateMotivation2);
	//On key press
	name.keyup(validateName);
	email.keyup(validateEmail);
	noId.keyup(validateNoId);
	noTelp.keyup(validateNoTelp);
	motivation1.keyup(validateMotivation1);
	motivation2.keyup(validateMotivation2);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validateNoId() & validateNoTelp() & validateMotivation1()& validateMotivation2())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateMotivation1(){
		if (motivation1.val().length < 50){
			motivation1.addClass("error");
			motivation1Info.text("Minimal 50 karakter");
			return false;
		} else {
			motivation1.removeClass("error");
			return true;
		}
	}
	
	function validateMotivation2(){
		if (motivation2.val().length < 50){
			motivation2.addClass("error");
			motivation2Info.text("Minimal 50 karakter");
			return false;
		} else {
			motivation2.removeClass("error");
			return true;
		}
	}
	function validateNoTelp(){
		var a = $("#noTelp").val();
		var filter = /[0-9]/;
		if (noTelp.val().length < 8){
			noTelp.addClass("error");
			teleponInfo.text("Jangan lupa isi yang ini juga!");
			teleponInfo.addClass("error");
			return false;
		} else {
			noTelp.removeClass("error");
			noTelp.addClass("ok");
			teleponInfo.text(okStatus);
			teleponInfo.removeClass("error");
			teleponInfo.addClass("ok");
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
			noId.addClass("ok");
			noIdInfo.text(okStatus);
			noIdInfo.removeClass("error");
			noIdInfo.addClass("ok");
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
			email.addClass("ok");

			emailInfo.text(okStatus);
			emailInfo.removeClass("error");
			emailInfo.addClass("ok");

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
			name.addClass("ok");
			nameInfo.text(okStatus);
			nameInfo.removeClass("error");
			nameInfo.addClass("ok");
			return true;
		}
	}
	
});