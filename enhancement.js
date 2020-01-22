//JavaScript
var i = 0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "image1.gif";
path[1] = "image2.gif";
path[2] = "image3.gif";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("swapImage()",3000);
}


