/*
FILE NAME: 08donate.js
WRITTEN BY: Martin Kvalheim
WHEN: November 2016
PURPOSE: JavaScript to the entertainment-page.
		On image click, changes style to block.
		The rest is done via css.
*/
 function onClick(element) {
  document.getElementById("modImg").src = element.src;
  document.getElementById("funModal").style.display = "block";
}
