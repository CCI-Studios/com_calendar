<?php

class ComCalendarDatabaseRowEvent extends ComCciDatabaseRowRelated
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->belongs_to('category');
	}

}