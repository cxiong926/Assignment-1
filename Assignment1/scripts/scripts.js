$(document).ready(function() {
	$("#survey").submit(function(event) {

		let message = "";
		
		let eInput = $("#email").val();
		let mInput = $('input[name=major]:checked').val();
		let gInput = $('input[name=grade]:checked').val();
		let tInput = $('input[name=topping]:checked').val();
		
		if(eInput == ""){
			message += ("Please enter your email address\n");
		}
		if(mInput == null){
			message += ("Please select your major\n");
		}
		
		if(gInput == null){
			message += ("Please select your expected grade\n");
		}
		
		if(tInput == null){
			message += ("Please select your favorite topping\n");
		}
		if(message.length > 0){
			alert(message);
			event.preventDefault();
		}
		
		/* checkValue(eInput, "Email");
		checkValue(mInput, "Major");
		checkValue(gInput, "Grade");
		checkValue(tInput, "Favorite Topping"); */
		
		//errorMessage(message);
	});
		
});

/* function checkValue(input, type) {
	if(input == undefined || input == ""){
		message += type + "\n";
		}
}

function errorMessage(message){
	if(message.length > 0){
		alert("\nPlease check the following choices\n\n" + message);
		event.preventDefault();
	}
} */