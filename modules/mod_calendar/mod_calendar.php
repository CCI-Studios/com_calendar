<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::load('site::com.calendar.mappings');
echo KFactory::get('site::mod.calendar.html', array(
	'params' 	=> $params,
	'module'	=> $module,
	'attribs'	=> $attribs
))->display();