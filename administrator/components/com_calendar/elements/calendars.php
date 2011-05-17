<?php

class JElementCalendars extends JElement
{
	var $_name = 'Organization';
	
	public function fetchElement($name, $value, &$node, $control_name)
	{
		$lb = KFactory::tmp('admin::com.calendar.template.helper.listbox');
		return $lb->calendars(array('name'=>$control_name.'['.$name.']', 'selected'=>$value));
	}
}