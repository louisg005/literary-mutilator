/**
 *changes the text color on a click event
 **/
function clickEvent() {
	document.getElementById("click").style.color = "blue";
}
/**
 *changes the text font when moused over
 **/
function mouseOver() {
	document.getElementById("mouse").style.fontFamily = "impact,charcoal,sans-serif";
}
/**
 *reverts the text font when moused out
 **/
function mouseOut() {
	document.getElementById("mouse").style.font = "initial"
}
/**
 *
 **/
function allowDrop(ev) {
	ev.preventDefault();
}
/**
 *makes the text draggable?
 **/
function drag(ev) {
	ev.dataTransfer.setData("text", ev.target.id);
}
/**
 *
 **/
function drop(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
	ev.target.appendChild(document.getElementById(data));
}