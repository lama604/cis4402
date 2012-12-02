jQuery(document).ready(function(){
	jQuery('#gc_gcalendar_view_toggle_status').bind('click', function(e) {
		jQuery('#gc_gcalendar_view_list').slideToggle('slow', function(){
			var oldImage = jQuery('#gc_gcalendar_view_toggle_status').attr('src');
			var gcalImage = oldImage;
			var path = oldImage.substring(0, oldImage.lastIndexOf('/'));
			
			if (jQuery('#gc_gcalendar_view_list').is(":hidden"))
				gcalImage = path + '/down.png';
			else
				gcalImage = path + '/up.png';
			
			jQuery('#gc_gcalendar_view_toggle_status').attr('src', gcalImage);
		});
	});
});

function updateGCalendarFrame(calendar) {
	if (calendar.checked) {
		jQuery('#gcalendar_component').fullCalendar('addEventSource', calendar.value);
	} else {
		jQuery('#gcalendar_component').fullCalendar('removeEventSource', calendar.value);
	}
}