

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
	//var competition = $("#competition")
	//var competitionInfo = $("#inputCompetition");
	var okStatus = "Benar";
	
	//On blur
	name.blur(validateName);
	pass.blur(validatePass);
	institusi.blur(validateInstitution);
	//competition.blur(validateCompetition);
	//On key press
	name.keyup(validateName);
	pass.keyup(validatePass);
	institusi.keyup(validateInstitution);
	//competition.keyup(validateCompetition);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validatePass() & validateInstitution())
			return true;
		else
			return false;
	});
	
	//validation functions

	
	function validateInstitution(){
		// not valid
		if (institusi.val().length < 1){
			institusi.removeClass("good");
			institusiInfo.removeClass("good-info");
			institusi.addClass("error");
			institusiInfo.text("Jangan lupa isi yang ini juga!");
			institusiInfo.addClass("error");
			return false;
		// valid
		} else {
			institusi.removeClass("error");
			institusi.addClass("good");
			institusiInfo.addClass("good-info");
			institusiInfo.text(okStatus);
			institusiInfo.removeClass("error");
			return true;
		}
		
	}
	function validateEmail(){
		//testing regular expression
		var a = $("#inputEmail").val();
		var filter = /?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\]/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			email.addClass("good");
			emailInfo.text(okStatus);
			emailInfo.removeClass("error");
			emailInfo.addClass("good-info");
			return true;
		}
		//if it's NOT valid
		else{
			email.removeClass("good");
			email.addClass("error");
			emailInfo.removeClass("good-info");
			emailInfo.text("Email tidak valid!");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.removeClass("good");
			nameInfo.removeClass("good-info");
			name.addClass("error");
			nameInfo.text("Nama Tim minimal 4 karakter");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			name.addClass("good");
			nameInfo.text(okStatus);
			nameInfo.removeClass("error");
			nameInfo.addClass("good-info");
			return true;
		}
	}
	function validatePass(){
		
		//it's NOT valid
		if(pass.val().length <5){
			pass.removeClass("good");
			passnInfo.removeClass("good-info");
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
			pass.addClass("good");
			passInfo.addClass("good-info");
			return true;
		}
	}
	 
});