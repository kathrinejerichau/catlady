

const donationList = [];

function donationCounter(){
	
	var donation = document.getElementById("NewDonation").value;
	if (donation>0) 	{
    var donatedNumber = Number(donation);
  
    donationList.push(donatedNumber);

var totalDonations = donationList.reduce(sum, 0);

function sum(a, b){
	return a + b;
}

  document.getElementById("output").innerHTML = ("Thank you for all your support. So far " + donationList.length
  + " contributors has donated to our shelter. Their contributions amounts to a total of "
  + totalDonations + "$ to help local cats.");

	document.getElementById("donationForm").reset();
}
}
