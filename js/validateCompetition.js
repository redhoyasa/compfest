

$(document).ready(function(){
	//global vars
	var form = $(".form-horizontal");
	var name = $("#inputNamaTim");
	var nameInfo = $("#nameInfo");
	var email = $("#inputEmail");
	var emailInfo = $("#emailInfo");
	var pass = $("#inputPassword");
	var passInfo = $("#passInfo");
	var institusi = $("#inputInstitution");
	var institusiInfo = $("#institutionInfo");
	var competiton = $("#competition")
	var competitionInfo = $("#inputCompetition");
	var okStatus = "Status : Ok";
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	pass.blur(validatePass);
	institusi.blur(validateInstitution);
	competition.blur(validateCompetition);
	//On key press
	name.keyup(validateName);
	email.keyup(validateEmail);
	pass.keyup(validatePass);
	institusi.keyup(validateInstitution);
	competition.keyup(validateCompetition);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validatePass() & validateInstitution())
			return true
		else
			return false;
	});
	
	//validation functions

	
	function validateInstitution(){
		// not valid
		if (institusi.val().length < 1){
			institusi.addClass("error");
			institusiInfo.text("Jangan lupa isi yang ini juga!");
			institusiInfo.addClass("error");
			return false;
		// valid
		} else {
			institusi.removeClass("error");
			institusiInfo.text(okStatus);
			institusiInfo.removeClass("error");
			return true;
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
			nameInfo.text("Nama Tim minimal 4 karakter bro!");
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
	function validatePass(){
		
		//it's NOT valid
		if(pass.val().length <5){
			pass.addClass("error");
			passInfo.text("Setidaknya ada 6 karakter, boleh angka atau huruf");
			passInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			pass.removeClass("error");
			passInfo.text(okStatus);
			passInfo.removeClass("error");
			return true;
		}
	}
	 
});