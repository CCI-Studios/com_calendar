<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::load('com://site/calendar.mappings');
echo KService::get('com://site/calendar.dispatcher')->dispatch();