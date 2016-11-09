// Setup left canvas
/*var bodyLeft = document.getElementById('bodyLeft');
var leftWidth = bodyLeft.offsetWidth;
var leftHeight = bodyLeft.offsetHeight;
const canvasLeft = document.getElementById('catCareLeft');
const contextLeft = canvasLeft.getContext('2d');
contextLeft.canvas.width = window.innerWidth;
*/

// Setup right canvas


var bodyRight = document.getElementById('bodyRight');
var rightWidth = bodyRight.offsetWidth;
var rightHeight = bodyRight.offsetHeight;
const canvasRight = document.getElementById('catCareRight');
const contextRight = canvasRight.getContext('2d');
contextRight.canvas.width = 250;
contextRight.canvas.height = 100;
contextRight.font = "18px defaultFont";
contextRight.fillStyle = "#4e3d42";
console.log(canvasRight.width);
console.log(canvasRight.height);

/* Array which holds the cat care tips. 
  Each string of text must have a maximum lengh of 25 characters. 
  This is because of the width of the canvas, and that the tips are supposed to be displayed on one line. 
*/
var textArray = ["Cats enjoy a warm cozy place  to rest", "Cats are obsessed with catnip,give them some and they will  go crazy", "Kittens like to play with     things that move. Create your your toy with a string and    some paper"];
var textIndex = 0;

function swapText() {
  contextRight.clearRect(0, 0, contextRight.canvas.width, contextRight.canvas.height);
  lines = textArray[textIndex].match(/.{1,30}/g);
  contextRight.canvas.height = 25 * lines.length;
  contextRight.font = "18px defaultFont";
  for (var i = 0; i < lines.length; i++) {
    drawText(lines[i], 10, 15+i*25);
  }
  textIndex++;
  if (textIndex > 2) {
    textIndex = 0;
  }
}

/* Draw a text (string) on (x, y) */
function drawText(text, x, y) {
	contextRight.fillText(text, x, y);
}


drawText("Cat Care Tip:", 20, 20);
swapText();
setInterval(swapText, 5000);



/*
Du kan skapa en metod som heter typ swapText()

[3:41]  
Som cyklar igenom textsträngarna, och byter innerHTML på ett element

[3:41]  
Sedan finns det setInterval(metod, timeout)

[3:42]  
Den kommer att köra metoden efter varje timeout, i ms

[3:42]  
Så

[3:42]  
 ```setInterval(swapText, 10000);
```

[3:42]  
Är typ magiskt :')

[3:42]  
Sedan får swapText hålla koll på vilken sträng du är vid just nu, och vilken som är nästa
*/