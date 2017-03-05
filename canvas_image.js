//Making canvas object
var canvas = document.getElementById("myCanvas");

//Making a context object
var context = canvas.getContext("2d");

//Setting color
context.fillStyle = "#121212";

//Setting font
context.font = "40px Trebuchet MS";

//Putting the text on the canvas
context.fillText("Van bewegen wordt ik blij!", 60, 70);
//Making an image
var image = new Image();
//idle image
image.src = "./images/sad.png";
//Setting points for image
var x = 250;
var y = 150;
var speedX = 0;
var speedY = 0;

context.drawImage(image, x, y, image.width/3, image.height/3);


setInterval(updateGame, 20);
//Making the image move
function updateGame () {
   context.clearRect(0, 0, canvas.width, canvas.height);
   newPos();
   context.fillText("Van bewegen wordt ik blij!", 60, 70);
   context.drawImage(image, x, y, image.width/3, image.height/3);
}

function newPos () {
   x += speedX;
   y += speedY;
}

var speed = 2
function move (direction) {
   image.src = "./images/happy.png";
   if ( direction == 'right') {
      speedX = speed;
   }
   if (direction == 'down') {
      speedY = speed;
   }
    if ( direction == 'up') {
      speedY = -speed;
   }
   if (direction == 'left') {
      speedX = -speed;
   }
}
//Stopping the moving image and setting it to idle
function stop () {
   speedX = 0;
   speedY = 0;
   image.src = "./images/sad.png";   
}