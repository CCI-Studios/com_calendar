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
		if (is_numeric($this->_state->day)) {
			$query->where('DAYOFMONTH(tbl.date)', '=', $this->_state->day);
		$state = $this->_state;
		}
		if (is_numeric($this->_state->month)) {
			$query->where('MONTH(tbl.date)', '=', $this->_state->month);
		}
		if (is_numeric($this->_state->year)) {
			$query->where('YEAR(tbl.date)', '=', $this->_state->year);
		}
		
		if (is_numeric($this->_state->calendar_calendar_id)) {
			$query->where('tbl.calendar_calendar_id', '=', $this->_state->calendar_calendar_id);
		if ($state->future) {
			$query->where('tbl.date', '>=', date('Y-m-d'));
		}
		}
		
		parent::_buildQueryWhere($query);
	}
}