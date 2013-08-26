$(document).ready(function(){
	//global vars

	checkBoxes();


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
	
	/*On blur
	name.blur(validateName);
	email.blur(validateEmail);
	noId.blur(validateNoId);
	noTelp.blur(validateNoTelp);*/
	//On key press
	name.focusout(validateName);
	email.focusout(validateEmail);
	//noTelp.focusout(validateNoTelp);
	checkBox();
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
			emailInfo.text(okStatus);
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			emailInfo.text("Masukkan email yang valid sob!");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			nameInfo.text("Minimal 4 karakter");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			nameInfo.removeClass("error");
			return true;
		}
	}


	function checkBox(){
		$('input[type="checkbox"]').click(function(){
			var   x = $(this);
			var   v = "#sem-"+x.attr("id").split("-")[1];
			console.log(v);
			var val = x.attr("data-check");
			var mov = $(v);
			if (val == "0"){
				x.attr("data-check","1");
				console.log("lululu");
				mov.removeClass("hidden").addClass("display");
				//mov.find("textarea").text("");
			} else {
				x.attr("data-check","0");
				console.log("lalala");
				mov.addClass("hidden").removeClass("display");
			}

			checkBoxes();
		});

	}

	function checkBoxes()
	{
		for (var i = 1; i <= 6; i++)
		{
			var checked = $('#seminar-' + i).attr("checked");
			if (checked == "checked")
				//$('#sem-'+i).attr("data-check","1");
				$('#sem-'+i).removeAttr("checked").removeClass("hidden").addClass("display");

			else
				$('#sem-'+i).addClass("hidden").removeClass("display");
		}
		
		var checked = $('#lain').attr("checked");

		if (checked == "checked")
			$('#other').removeAttr("checked").removeClass("hidden").addClass("display");
		else
			$('#other').addClass("hidden").removeClass("display");
	}
	
});