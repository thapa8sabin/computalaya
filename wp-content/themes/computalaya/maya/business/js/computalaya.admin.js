jQuery(document).ready(function($){
	
	var mediaUploader;



	$('#upload-button').on('click',function(e){
		e.preventDefault();
		if (mediaUploader) {
			mediaUploader.open();

			return;
		}

		mediaUploader = wp.media.frames.file_frame = wp.media({
			title : 'Choose a profile picture',
			button : {
				text: 'Choose Picture'
			},
			multiple:false
		});

		mediaUploader.on('select',function(e){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile-picture').val(attachment.url);
		});

		mediaUploader.open();
	});

	$('#remove-picture').on('click',function(e){
		e.preventDefault();
		var answer = confirm('Are you sure that you want to remove banner image?');
		if (answer) {
			$('#profile-picture').val('');
			$('.computalaya-general-form').submit();
		}
		return;
	});
});