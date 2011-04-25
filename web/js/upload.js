$(function() {
	$("#uploader").plupload({
		// General settings
		runtimes : 'flash,html5,browserplus,silverlight,gears,html4',
		url : '../../js/plupload/js/upload.php',
		max_file_size : '7mb',
		max_file_count: 20, // user can add no more then 20 files at a time
		chunk_size : '5mb',
		unique_names : true,
		multiple_queues : true,

		// Resize images on clientside if we can
		resize : {width : 640, height : 480, quality : 90},

		// Rename files by clicking on their titles
		rename: true,

		// Sort files
		sortable: true,

		// Specify what files to browse for
		filters : [
			{title : "Image files", extensions : "jpg,gif,png"}
		],

		// Flash settings
		flash_swf_url : '../../js/plupload/js/plupload.flash.swf',

		// Silverlight settings
		silverlight_xap_url : '../../js/plupload/js/plupload.silverlight.xap'
	});

	// Client side form validation
	$('form').submit(function(e) {
		var uploader = $('#uploader').plupload('getUploader');

		// Validate number of uploaded files
		if (uploader.total.uploaded == 0) {
			// Files in queue upload them first
			if (uploader.files.length > 0) {
				// When all files are uploaded submit form
				uploader.bind('UploadProgress', function() {
					if (uploader.total.uploaded == uploader.files.length)
						$('form').submit();
				});

				uploader.start();
			} else
				alert('You must at least upload one file.');

			e.preventDefault();
		}
	});

});