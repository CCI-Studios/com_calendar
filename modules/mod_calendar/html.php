<?php

class ModCalendarHtml extends ModDefaultHtml
{
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'model'	=> 'com://site/calendar.model.calendars',
		));
		
		parent::_initialize($config);
	}
	
	public function display()
	{	
		return KFactory::tmp('com://site/calendar.controller.events')
				->limit(3)
				->layout('widget')
				->set('calendar_calendar_id', $this->params->get('calendar_id'))
				->future(true)
				->display();
	}
}