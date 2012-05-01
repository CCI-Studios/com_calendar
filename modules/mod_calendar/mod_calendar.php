<?php
defined('KOOWA') or die;

KLoader::load('com://site/calendar.mappings');
echo KService::get('mod://site/calendar.html')
	->module($module)
	->display();