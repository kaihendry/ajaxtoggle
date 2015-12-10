$(document).ready(function() {
	$('button').click(function() {
		var that = $(this);
		var action = $(this).text();
		var id = $(this).attr('data-id');
		console.log(action, id);
		$.post("mute.php", {
			id: id,
			success: function() { that.text( action == "Mute" ? "Unmute" : "Mute" ); }
		});
	});
});

$(document).ajaxError(function(event, request, settings) {
	console.log("Error requesting page " + settings.url);
});
