//alert("script loaded");
/*var myButton = document.getElementById("search");
myButton.addEventListener("click", function(event){
    alert("panel");
    $("#left-panel").panel("open");
},false);


*/
$(document).on('pageinit', function() {
    setTimeout(function () {
        alert("panel");
        $('#left-panel').panel('open');
    }, 100); // delay above zero
});