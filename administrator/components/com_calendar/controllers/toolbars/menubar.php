<?php
defined('KOOWA') or die;

class ComCalendarControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{

	public function getCommands()
	{
		$name = $this->getController()->getIdentifier()->name;

		$this->addCommand('Calendars', array(
			'href'		=> JRoute::_('index.php?option=com_calendar&view=calendars'),
			'active'	=> ($name === 'calendar')
		));

		$this->addCommand('Events', array(
			'href'		=> JRoute::_('index.php?option=com_calendar&view=events'),
			'active'	=> ($name === 'event')
		));

		return parent::getCommands();
	}

}