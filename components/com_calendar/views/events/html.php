<?php

class ComCalendarViewEventsHtml extends ComDefaultViewHtml
{

	public function display()
	{

		$itemid = JSite::getMenu('site')
			->getItems('link', 'index.php?option=com_calendar&view=calendar&id='. $this->getModel()->calendar_calendar_id, true);

		$link = 'index.php?';

		if ($itemid) {
			$link .= 'Itemid='. $itemid->id;
		} else {
			$link .= 'option=com_calendar&view=calendar&id='.$state->calendar_calendar_id;
		}
		$this->assign('link', $link);

		return parent::display();
	}

}