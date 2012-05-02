<?php

class ComCalendarViewEventsHtml extends ComDefaultViewHtml
{

	public function display()
	{

		$itemid = JSite::getMenu('site')
			->getItems('link', 'index.php?option=com_calendar&view=calendar&id='. $this->getModel()->calendar_calendar_id, true);

		$link = 'index.php?';

		if ($itemid) {
			$itemid = '&Itemid='. $itemid->id;
			$link .= 'Itemid='. $itemid;
		} else {
			$itemid = '';
			$link .= 'option=com_calendar&view=calendar&id='.$state->calendar_calendar_id;
		}
		$this->assign('link', $link);
		$this->assign('itemid', $itemid);

		return parent::display();
	}

}