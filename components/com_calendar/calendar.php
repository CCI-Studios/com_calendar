<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::load('site::com.calendar.mappings');
echo KFactory::get('site::com.calendar.dispatcher')->dispatch();