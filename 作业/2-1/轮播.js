window.onload = function() {
    var picture = document.querySelector("#picture");
    var imgs = document.querySelector("#picul");
    var prev = document.querySelector("#prev");
    var next = document.querySelector("#next");
    var buttons = document.querySelectorAll("buttons .sp");
    var count = 0;
    var left = getComputedStyle(imgs).left;
    var timer = setInterval(move(600),3000);
    function move(offset) {
        if ((parseInt(left) <= 0) && (parseInt(left) >= -2400)) {
            imgs.style.left = left + offset + 'px';
        }
        else {
            if (parseInt(left) >= 0) {
                imgs.style.left = left + offset + 'px';
            }
            if (parseInt(left) <= -2400) {
                imgs.style.left = left + offset + 'px';
            }
        }
    }
    next.onclick = function() {
        clearInterval(timer);
        move(-600);
    }
    prev.onclick = function() {
        clearInterval(timer);
        move(600);
    }
}