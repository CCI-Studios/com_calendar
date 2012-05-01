<?php
defined('KOOWA') or die;

class ComCalendarDispatcher extends ComDefaultDispatcher
{

	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller' => 'calendar'
		));

		parent::_initialize($config);
	}

}