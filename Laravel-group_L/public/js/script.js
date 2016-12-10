
$(document).ready(function(){
    move();
    function move() {
        var elem = document.getElementById("myBar");
        var width = 0.5;
        var id = setInterval(frame, 20);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
            } else {
                width ++;
                elem.style.width = width + '%';
            }
        }
    }
    var myVar = setInterval(move, 2000);
});