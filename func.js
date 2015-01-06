var upload = (function () {

	var form = $("#form");

	function send_data() {

		form.on("submit", function () {

			upload_file().done(function () {
				alert("OK");
			});

		});

		return false;

	}

	function upload_file() {

		var fd = new FormData(form.get(0));
		var d = new $.Deferred();

		$.ajax({

			url: "upload.php", 
			type: "post",
			data: fd,
			processData: false,
			contentType: false,
			success: d.resolve,
			error: d.reject

		});

		return d.promise();

	}

	return {

		init: function () {
			send_data();
		}

	};

} ());

window.onload = upload.init();