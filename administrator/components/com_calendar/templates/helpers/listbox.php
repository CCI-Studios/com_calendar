<?php

class ComCalendarTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	
	public function calendars($config = array())
	{
		$config = new KConfig($config);
		
		$config->append(array(
			'model'		=> 'calendars',
			'name'		=> 'calendar_calendar_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'deselect'	=> false,
		));
		
		return parent::_listbox($config);
	}

	public function categories($config = array())
	{
		$config = new KConfig($config);
		
		$config->append(array(
			'model'		=> 'categories',
			'name'		=> 'calendar_category_id',
			'value'		=> 'id',
			'text'		=> 'title',
			//'deselect'	=> false,
		));
		
		return parent::_listbox($config);
	}
	
}