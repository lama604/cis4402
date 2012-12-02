jQuery(document).ready(function(){
	jQuery('#gc_google_view_toggle_status').bind('click', function(e) {
		jQuery('#gc_google_view_list').slideToggle('slow', function(){
			var oldImage = jQuery('#gc_google_view_toggle_status').attr('src');
			var gcalImage = oldImage;
			var path = oldImage.substring(0, oldImage.lastIndexOf('/'));
			
			if (jQuery('#gc_google_view_list').is(":hidden"))
				gcalImage = path + '/down.png';
			else
				gcalImage = path + '/up.png';
			
			jQuery('#gc_google_view_toggle_status').attr('src', gcalImage);
		});
	});
});

function updateGCalendarFrame(calendar) {
	var orig_url = window.document.getElementById('gcalendar_frame').src;
	var new_url = "";
	if (calendar.checked) {
		new_url = orig_url + calendar.value;
	} else {
		new_url = orig_url.replace(calendar.value, "");
	}
	window.document.getElementById('gcalendar_frame').src = new_url;
}
