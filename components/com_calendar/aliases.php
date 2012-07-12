<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KService::setAlias('com://site/calendar.model.events', 	'com://admin/calendar.model.events');
KService::setAlias('com://site/calendar.model.calendars',	'com://admin/calendar.model.calendars');
KService::setAlias('com://site/calendar.database.row.event',	'com://admin/calendar.database.row.event');