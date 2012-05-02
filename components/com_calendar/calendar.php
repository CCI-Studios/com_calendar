<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/calendar.aliases');
echo KService::get('com://site/calendar.dispatcher')->dispatch();