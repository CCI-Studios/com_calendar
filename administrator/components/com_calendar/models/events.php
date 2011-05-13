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
			->insert('calendar_calendar_id', 'int');
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
		}
		if (is_numeric($this->_state->month)) {
			$query->where('MONTH(tbl.date)', '=', $this->_state->month);
		}
		if (is_numeric($this->_state->year)) {
			$query->where('YEAR(tbl.date)', '=', $this->_state->year);
		}
		
		if (is_numeric($this->_state->calendar_calendar_id)) {
			$query->where('tbl.calendar_calendar_id', '=', $this->_state->calendar_calendar_id);
		}
		
		parent::_buildQueryWhere($query);
	}
}