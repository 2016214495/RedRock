window.onload = function () {
var container = document.querySelector("#container");
var list = document.querySelector("#list");
var buttons = document.querySelector("#buttons").querySelectorAll("span");
var prev = document.querySelector("#prev");
var next = document.querySelector("#next");
var index = 1;

function lightButtons () {
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i].className == 'on') {
            buttons[i].className ='';
            break;
        }
    }
    buttons[index - 1].className = 'on';
}
function getStyle(list,"left") {
    if (list.currentStyle) {
        return list.currentStyle[left];
    }
    else{
        return getComputerStyle(list,false)[left];
    }
}
function move(dis) {
    list.style.left = parseInt(getStyle(list,"left")) + dis + 'px';
    if (list.style.left > -600) {
        list.style.left = -3000 + 'px';
    }
    if (list.style.left < -3000) {
        list.style.left = -600 + 'px';
    }

}
next.onclick = function () {
    if (index == 5) {
        index = 1;
    }
    else{
        index += 1;
    }
    ligheButtons();
    move(-600);
}
prew.onclick = function () {
    if (index == 1) {
        index = 5;
    }
    else{
        index -= 1;
    }
    ligheButtons 
    move(600);
}
}
