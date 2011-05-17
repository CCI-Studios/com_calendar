<?php

class ComCalendarViewCalendarHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$cal = $this->getModel()->getItem();
		
		$eventModel = KFactory::tmp('site::com.calendar.model.events');
		if (is_numeric($cal->id)) 
			$eventModel->set('calendar_calendar_id', $cal->id);
		else
			$eventModel->set('calendar_calendar_id', 0);
		$events = $eventModel->getlist();
		$this->assign('events', $events);
	
		$month = KRequest::get('get.month', 'int', date('n'));
		$year = KRequest::get('get.year', 'int', date('Y'));
		$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$this->assign('month', $month);
		$this->assign('year', $year);
		$this->assign('total_days', $daysInMonth);
		$this->assign('day_padding', date('w', strtotime(sprintf('%04d-%02d-%02d', $year, $month, 0))) + 1);
		
		$this->assign('today', date('Y-m-d'));
		if ($month == 1)
			$this->assign('prev_month', 'view=calendar&month=12&year='. ($year-1) .'&id='. $cal->id);
		else
			$this->assign('prev_month', 'view=calendar&month='. ($month-1) .'&year='. $year .'&id='. $cal->id);
			
		if ($month == 12)
			$this->assign('next_month', 'view=calendar&month=1&year='. ($year+1) .'&id='. $cal->id);
		else
			$this->assign('next_month', 'view=calendar&month='. ($month+1) .'&year='. $year .'&id='. $cal->id);

		return parent::display();
	}
}