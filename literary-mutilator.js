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
function allowDrop(event) {
	event.preventDefault();
}
/**
 *makes the text draggable?
 **/
function drag(event) {
}
/**
 *
 **/
function drop(event) {
	//event.preventDefault();
	event.target.appendChild(document.getElementById("drag1"));
}