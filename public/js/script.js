function growParagraph() {
	var para = document.querySelector(".description");
	para.style.height = para.scrollHeight + "px";
}

function shrinkParagraph() {
	var para = document.querySelector(".description");
	para.style.height = 0;
}