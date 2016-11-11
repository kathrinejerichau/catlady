/*
FILE NAME: 02ourCats.js
WRITTEN BY: Fredrik I. Forså & Lars G. Thyholdt
WHEN: November 2016
PURPOSE: The slideshow for 02ourCats.php.
*/

//Array and object creation
var catArray = [];
var c0 = {catInfo:"Adorable Anton", catSrc:"img/pages/02ourCats/cat00.png"};
var c1 = {catInfo:"Elegant Eric", catSrc:"img/pages/02ourCats/cat01.png"};
var c2 = {catInfo:"Lazy Larry", catSrc:"img/pages/02ourCats/cat02.png"};
var c3 = {catInfo:"Sleepy Steve", catSrc:"img/pages/02ourCats/cat03.png"};
var c4 = {catInfo:"Upperton", catSrc:"img/pages/02ourCats/cat04.png"};
var c5 = {catInfo:"Curious Currybomb", catSrc:"img/pages/02ourCats/cat05.png"};
var c6 = {catInfo:"Butterbread", catSrc:"img/pages/02ourCats/cat06.png"};
var c7 = {catInfo:"Mr Whitepaw", catSrc:"img/pages/02ourCats/cat07.png"};
var c8 = {catInfo:"Anxious Adam", catSrc:"img/pages/02ourCats/cat08.png"};
var c9 = {catInfo:"Bossy Bernt", catSrc:"img/pages/02ourCats/cat09.png"};
var c10 = {catInfo:"Dr. Johnson", catSrc:"img/pages/02ourCats/cat10.png"};
var c11 = {catInfo:"Sneaky Sofia", catSrc:"img/pages/02ourCats/cat11.png"};
var c12 = {catInfo:"Lean Lars", catSrc:"img/pages/02ourCats/cat12.png"};
var c13 = {catInfo:"Mushy Martin", catSrc:"img/pages/02ourCats/cat13.png"};
var c14 = {catInfo:"Fabulous Fredrik", catSrc:"img/pages/02ourCats/cat14.png"};
var c15 = {catInfo:"Kind Kathrine", catSrc:"img/pages/02ourCats/cat15.png"};

//Pushes objects to array 
catArray.push(c0, c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15);

//Counter begins at zero
var i = 0;

function catSlideShow(){
	//Adds values from catArray[i] to various DOMs.
	document.getElementById("catNumber").innerHTML = i+1 + " / " + catArray.length;
	document.getElementById("catImg").src = catArray[i].catSrc;
	document.getElementById("catImg").alt = catArray[i].catInfo;
	document.getElementById("catText").innerHTML = catArray[i].catInfo;

		
	//Resets or increases i (resets if last array entry has been reached)
	if (i+1 == catArray.length){
		i = 0;
	}	
	else{
		i++;
	}
		
	//Timeout sets ms delay before function runs again
	setTimeout(catSlideShow, 3000);
}

//Calls function above
catSlideShow();