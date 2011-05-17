(function(window, document) {

	function setupEvent(event, calendar) {
		var link = event.getElement('a');
		
		link.addEvents({
			click: function(e) {
				var popover, coords, overlay;
				e = new Event(e);
				e.stop();
				
				closePopup();
				popover = $('popover_event');
				popover.setProperty('href', link.getProperty('href') + '&layout=widget');
				overlay = new Koowa.Overlay(popover, "{evalScripts: false}").send();
				
				overlay.addEvent('onComplete', function() {
					popover = $('popover_event');
					
					popover.inject(event, 'after');
					coords = event.getCoordinates(calendar);

					popover.setStyles({
						display: 'block',
						left: coords.left+coords.width,
						top: coords.top
					});
				});
			}
		});
	}
	
	function closePopup() {
		$('popover_event').setStyle('display', 'none');
	}
	
	window.addEvent('domready', function() {
		var events, i;
		calendars = $$('.com_calendar');
		calendars.each(function(calendar) {
			events = $$('.com_calendar .event');
			
			events.each(function(event) {
				setupEvent(event, calendar);
			});
		});
	});
	
	window.addEvent('click', function(e) {
		var popover, found;
		
		found = false;
		e = new Event(e);
		popover = $('popover_event');
		
		if (e.target === popover)
			return;
			
		e.target.getParents().each(function (parent) {
			if (parent === popover) {
				found = true;
			}
		});
		
		if (!found) {
			closePopup();
		}
	});
})(this, this.document);

