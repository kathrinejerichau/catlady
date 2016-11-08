console.log('hej');

var bodyLeft = document.getElementById('bodyLeft');
var leftWidth = bodyLeft.offsetWidth;
console.log(leftWidth);
const canvasLeft = document.getElementById('catCareLeft');
const contextLeft = canvasLeft.getContext('2d');
contextLeft.canvas.width = window.innerWidth;

var textArray = ["meow", "purr", "raaaawr"];

function swapText() {
	// body...
}

/* Draw a text (string) on (x, y) */
function drawText(text, x, y) {
	contextLeft.fillText(text, x, y);
}

drawText("hej", 20, 20);
catTips();

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