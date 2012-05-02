CREATE TABLE IF NOT EXISTS `#__calendar_calendars` (
	`calendar_calendar_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__calendar_events` (
	`calendar_event_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL,
	`location` VARCHAR(250) NOT NULL,
	`date` DATE NOT NULL,
	`start_time` VARCHAR(20) NOT NULL,
	`end_time` VARCHAR(20) NOT NULL,
	`intro` VARCHAR(250) NOT NULL,
	`description` TEXT NOT NULL,
	
	`calendar_calendar_id` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;