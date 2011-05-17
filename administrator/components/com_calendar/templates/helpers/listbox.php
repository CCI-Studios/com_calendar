<?php

class ComCalendarTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	
	public function calendars($config = array())
	{
		$config = new KConfig($config);
		
		$config->append(array(
			'model' => 'calendars',
			'name'	=> 'calendar_calendar_id',
			'value'	=> 'id',
			'text'	=>	'title',
		));
		
		return parent::_listbox($config);
	}
	
}