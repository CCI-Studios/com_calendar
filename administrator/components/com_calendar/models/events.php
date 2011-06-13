<?php

class ComCalendarModelEvents extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('day', 'int')
			->insert('month', 'int')
			->insert('year', 'int')
			->insert('calendar_calendar_id', 'int')
			->insert('future', 'boolean', false);
	}
	
	protected function _buildQueryOrder(KDatabaseQuery $query)
	{
		if (!$this->_state->sort) {
			$query->order('date', strtoupper($this->_state->direction));
		} 
		
		parent::_buildQueryOrder($query);
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
				
		if (is_numeric($state->day)) {
			$query->where('DAYOFMONTH(tbl.date)', '=', $state->day);
		}
		if (is_numeric($this->_state->month)) {
			$query->where('MONTH(tbl.date)', '=', $state->month);
		}
		if (is_numeric($state->year)) {
			$query->where('YEAR(tbl.date)', '=', $state->year);
		}
		
		if ($state->future) {
			$query->where('tbl.date', '>=', date('Y-m-d'));
		}
		
		if (is_numeric($state->calendar_calendar_id)) {
			$query->where('tbl.calendar_calendar_id', '=', $state->calendar_calendar_id);
		}
		
		parent::_buildQueryWhere($query);
	}
}