<?php

class ComCalendarViewHtml extends ComDefaultViewHtml
{
	
	public function __construct(KConfig $config)
	{
		$config->views = array(
			'calendars'	=> JText::_('Calendars'),
			'events'	=> JText::_('Events'),
		);
		
		parent::__construct($config);
	}
}