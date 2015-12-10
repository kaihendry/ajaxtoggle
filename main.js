window.addEventListener('load', function() {
	var buttons = document.getElementsByTagName("button");
	for (var i = 0; i < buttons.length; i++) {
		buttons[i].addEventListener("click", function( event ) {
			var r = new XMLHttpRequest();
			r.open("POST", "mute.php", true);
			r.onreadystatechange = function () {
				if (r.readyState != 4 || r.status != 200) return;
				console.log("Success: " + r.responseText);
			};
			r.send("id=1111");
		});
	}
});
