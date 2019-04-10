var keepLooping=true;
var i=1;

function myFunction() {
    do {
        console.log("i= " + i);
        document.write(i + "<br>");
        i++;
        
        if (i==10) {
            keepLooping=false;
        }
    }
    while (keepLooping==true);
}