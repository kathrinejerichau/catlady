/*
FILE NAME: 07contact.js
WRITTEN BY: Fredrik I. Forså
WHEN: November 2016
PURPOSE: JavaScript to the contact form.
		Reset button, and very basic form validator, 
		making sure the form has content.
*/

//Function to reset form
function rsForm(){
	document.getElementById("contactForm").reset();
}

//Function to validate form
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