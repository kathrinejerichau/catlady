/*
FILE NAME: 08donate.js
WRITTEN BY: Lars G. Thyholdt & Fredrik I. Forså
WHEN: November 2016
PURPOSE: JavaScript to the donation form.
		Counter to users total donations,
		Summary of amount donated,
		Reset function (same as 07contact.js)
*/

//List for all donations (resets on page load :( )
const donationList = [];

//Summary function, sums "a + b", returns new value
function sum(a, b){
	return a + b;
}

// Called on Donation-button-click
function donationCounter(){
	//Retrieves value
	var donation = document.getElementById("NewDonation").value;
	
	//Tests that donation is > 0, pushes to array if true
	if (donation>0) 	{
	var donatedNumber = Number(donation);  
	donationList.push(donatedNumber);

	//Converts from string to number, sums all donations  
	var totalDonations = donationList.reduce(sum, 0);

	//Prints text with values to "output"
	if (donationList.length<2){
		document.getElementById("output").innerHTML = ("Thank you for all your support. So far " + donationList.length 
		+ " contributor has donated to our shelter. Your contribution of" 
		+ totalDonations + "$ allows us to help local cats.");
	}
	else {
		document.getElementById("output").innerHTML = ("Thank you for all your support. So far " + donationList.length 
		+ " contributors has donated to our shelter. Their contributions amounts to a total of " 
		+ totalDonations + "$ to help local cats.");
	}
}
}

//Resets form
function rsForm(){
	document.getElementById("donationForm").reset();
}