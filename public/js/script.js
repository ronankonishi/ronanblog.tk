function growParagraph(id) {
	var para = document.querySelector(".description-" + id);
	para.style.height = para.scrollHeight + "px";
}

function shrinkParagraph(id) {
	var para = document.querySelector(".description-" + id);
	para.style.height = 0;
}