$(document).ready(function(){
	var wrap = document.getElementById("wrap");

	document.addEventListener("scroll", function(e) {
		wrap.classList.toggle(
			"fix-search",
			document.body.scrollTop > 147
			);
	});
});