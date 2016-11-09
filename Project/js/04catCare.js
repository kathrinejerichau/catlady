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
contextRight.canvas.height = 60;
contextRight.font = "18px defaulFont";
contextRight.fillStyle = "#4e3d42";
console.log(canvasRight.width);
console.log(canvasRight.height);




var textArray = ["Cats enjoy a warm cozy place", "Cats are obsessed with catnip ", "raaaawr"];

var textIndex = 0;

var imageObj = new Image();
imageObj.src = "img/catCareTips.jpg";




function swapText() {
	contextRight.clearRect(0, 0, contextRight.canvas.width, contextRight.canvas.height);
	//contextRight.drawImage(imageObj, 0, 0, rightWidth, rightWidth * imageObj.height / imageObj.width);
	//drawBubble(contextRight, 160, 190, 150, 80, 10);
	drawText("Cat Care Tip:", 20, 20);
	drawText(textArray[textIndex], 25, 40);
	textIndex++;
	if (textIndex > 2) {
		textIndex = 0;
	}
}

/* Draw a text (string) on (x, y) */
function drawText(text, x, y) {
	contextRight.fillText(text, x, y);
}

function drawBubble(ctx, x, y, w, h, radius)
{
  var r = x + w;
  var b = y + h;
  ctx.beginPath();
  ctx.strokeStyle="black";
  ctx.lineWidth="2";
  ctx.moveTo(x+radius, y);
  ctx.lineTo(x+radius/2, y-10);
  ctx.lineTo(x+radius * 2, y);
  ctx.lineTo(r-radius, y);
  ctx.quadraticCurveTo(r, y, r, y+radius);
  ctx.lineTo(r, y+h-radius);
  ctx.quadraticCurveTo(r, b, r-radius, b);
  ctx.lineTo(x+radius, b);
  ctx.quadraticCurveTo(x, b, x, b-radius);
  ctx.lineTo(x, y+radius);
  ctx.quadraticCurveTo(x, y, x+radius, y);
  ctx.stroke();
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