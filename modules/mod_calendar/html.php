<?php

class ModCalendarHtml extends ModDefaultHtml
{
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'model'	=> 'site::com.calendar.model.calendars',
		));
		
		parent::_initialize($config);
	}
	
	public function display()
	{	
		echo KFactory::tmp('site::com.calendar.controller.events')
				->limit(2)
				->layout('widget')
				->set('calendar_calendar_id', $this->params->get('calendar_id'))
				->display();
	}
}