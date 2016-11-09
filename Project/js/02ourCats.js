var slideIndex = 0;


catSlideshow();
function catSlideshow() {

    var catImg = document.getElementsByClassName("catPictures");
    for (var i = 0; i < catImg.length; i++) {
       catImg[i].style.display = "none";
    }		
	
    slideIndex++;
    if (slideIndex> catImg.length) {
	slideIndex = 1
	} 		//resetter slideIndex til 1 når telleren over går forbi catImg.length

    catImg[slideIndex-1].style.display = "block";

    setTimeout(catSlideshow, 5000); // setTimeout funker bedre enn setInterval
}

