var cv;




function myScript(e){
   e.preventDefault();
	console.log(e.target)
html2canvas(document.querySelector(".wc-backbone-modal-main"),{scrollY: 0}).then(canvas => {
  console.log(canvas)
let data 
  canvas.toBlob(blob => navigator.clipboard.write([new ClipboardItem({'image/png': blob})]).then(x =>window.open(e.target.href,'_blank') ));
  
  

});
}


/*
  const canvas = document.createElement("canvas");
canvas.width = 100;
canvas.height = 100;
document.body.appendChild(canvas);
const ctx = canvas.getContext("2d");
ctx.fillRect(0, 0, canvas.width, canvas.height);
ctx.fillStyle = "#eee";
ctx.fillRect(10, 10, 50, 50);

 canvas.toBlob(blob => navigator.clipboard.write([new ClipboardItem({'image/png': blob})]));
 */

	//cv.toBlob(blob => navigator.clipboard.write([new ClipboardItem({'image/png': blob})]));
	//
//poner un on click
