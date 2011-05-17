<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::load('site::com.calendar.mappings');
KFactory::tmp('site::mod.calendar.html', array(
	'params' 	=> $params,
	'module'	=> $module,
	'attribs'	=> $attribs
))->display();