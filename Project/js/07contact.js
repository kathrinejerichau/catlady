//javascript for contactForm
function rsForm(){
	document.getElementById("contactForm").reset();
}

function validateForm(){
	var inputName = document.getElementById("contactName").value;
	var inputEmail = document.getElementById("contactEmail").value;
	var inputTextArea = document.getElementById("contactTextBox").value;

	console.log(inputName + inputEmail + inputTextArea);

if((inputName && inputEmail && inputTextArea) == (null || "")){
	alert("Please fill out all fields");
	return false;
}
}