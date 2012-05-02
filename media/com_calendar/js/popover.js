window.addEvent('domready', function() {
	var overlay = $('popover_event'),
		o = null;

	$$('.calendar .event a').addEvent('click', function(event) {
		event = new Event(event);
		event.stop();

		overlay.setProperty('href', this.getProperty('href') + 'layout=widget#popover_event');
		o = new Koowa.Overlay(overlay, '{evalScripts:false}');
		return false;
	});
});
