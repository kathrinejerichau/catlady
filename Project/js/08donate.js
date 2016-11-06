

function donationCounter(donation){{
	var totalDonations = 0
	//var donationList = document.createElement("LI");
	donation = document.getElementById("NewDonation").value;
	
	donationList.appendChild(donation);
	//totalDonations += donation
	//console.log(totalDonations)
}
	var donationList = [1,3, 5, 8]

var totalDonations = donationList.reduce(sum, 0);
	
document.getElementById("output").innerHTML = (donationList);
}

function sum(a, b){
	return a + b;
}

console.log(totalDonations);
