var keepLooping=true;
var i=1;

function myFunction() {
    while(keepLooping) {
        console.log("i= " + i);
        document.write(i + "<br>");
        i++;
        
        if (i==10) {
            keepLooping=false;
        }
    }
}