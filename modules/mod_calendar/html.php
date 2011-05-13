<?php

class ModCalendarHtml extends ModDefaultHtml
{
	
	public function display()
	{
		return '<div id="mod-calendar-'.$this->module->id.'" class="mod-calendar">'.
					KFactory::tmp('site::com.calendar.controller.events')
						->limit('3')
						->display().
				'</div>';
	}
}