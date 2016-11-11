/*
FILE NAME: 04catCare.php
WRITTEN BY: Sofia Ø. Jacobsson & Kathrine J. Nissen
WHEN: November 2016
PURPOSE: JavaScrpt to display cat care tips on cat care page. 
*/

// Setup right canvas
var bodyRight = document.getElementById('bodyRight');
var rightWidth = bodyRight.offsetWidth;
// Get elements from php document
var rightHeight = bodyRight.offsetHeight;
const canvasRight = document.getElementById('catCareRight');
const contextRight = canvasRight.getContext('2d');
// Set width and height for the canvas
contextRight.canvas.width = 250;
contextRight.canvas.height = 100;

contextRight.font = "18px defaultFont"; // Set font size for canvas
contextRight.fillStyle = "#4e3d42";     // Set font color for canvas

/* Array which holds the cat care tips. 
  Each string of text must have a maximum lengh of 100 characters. 
  This is because of the width of the canvas, and that the tips are supposed to be displayed on one line. 
*/
var textArray = ["Cats enjoy a warm cozy place  to rest", "Cats are obsessed with catnip,give them some and they will  go crazy", "Kittens like to play with     things that move. Create your your toy with a string and    some paper"];
var textIndex = 0;

/* function swapText swaps the text (cat care tips) displayed in the canvas 'catCareRight'.

*/
function swapText() {
  contextRight.clearRect(0, 0, contextRight.canvas.width, contextRight.canvas.height);
  lines = textArray[textIndex].match(/.{1,30}/g);
  contextRight.canvas.height = 25 * lines.length; // Set the height for the canvas depending on the amount of rows to be displayed.
  contextRight.font = "18px defaultFont";         // Set font size for canvas
  // Draw each line
  for (var i = 0; i < lines.length; i++) {
    drawText(lines[i], 10, 15+i*25);
  }
  textIndex++;
  // Reset textIndex to match the array of text strings
  if (textIndex > textArray.length-1) {
    textIndex = 0;
  }
}

/* Draw a text (string) on (x, y) */
function drawText(text, x, y) {
	contextRight.fillText(text, x, y);
}

// Draw on the canvas with function swaptext every 5 seconds.
swapText();
setInterval(swapText, 5000);