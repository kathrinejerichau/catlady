var slideIndex = 0;
catSlideshow();
function catSlideshow() {
    var i;
    var catImg = document.getElementsByClassName("catPictures");
    for (i = 0; i < catImg.length; i++) {
       catImg[i].style.display = "none";
    }		
	
    slideIndex++;
    if (slideIndex> catImg.length) {
	slideIndex = 1
	} 		//resetter slideIndex til 1 når telleren over går forbi catImg.length

    catImg[slideIndex-1].style.display = "block";

    setTimeout(catSlideshow, 5000); // setTimeout funker bedre enn setInterval
}

var catArray = [];
var cat0 = {catInfo:"CatCarl", catSrc:"img/ourCats/catCarl"};
var cat1 = {catInfo:"CatCunt", catSrc:"img/ourCats/catCunt"};
var cat2 = {catInfo:"CatCute", catSrc:"img/ourCats/catCute"};
var cat3 = {catInfo:"CatCreative", catSrc:"img/ourCats/catCreative"};

catArray.push(cat0, cat1, cat2, cat4);
console.log(catArray);