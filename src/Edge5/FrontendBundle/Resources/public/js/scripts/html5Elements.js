define(["jquery"], function($) {
	return {
		generateHtml5Elements: function() {

			document.createElement("article");
			document.createElement("footer");
			document.createElement("aside");
			document.createElement("section");
			document.createElement("header");
			document.createElement("hgroup");
			document.createElement("nav");

			return true;
		}
	}
});