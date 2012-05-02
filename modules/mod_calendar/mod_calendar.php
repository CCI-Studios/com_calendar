<?php
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/calendar.aliases');
echo KService::get('mod://site/calendar.html')
	->module($module)
	->display();