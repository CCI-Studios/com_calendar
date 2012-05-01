<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

echo KService::get('com://admin/calendar.dispatcher')->dispatch();