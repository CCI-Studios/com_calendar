<style src="media://com_calendar/css/site.css" />

<div class="com_calendar">
	<div id="com_calendar_event" class="event">
		<h1 class="componentheading"><?= $event->title?></h1>
		
		<p>
			<? if (($event->date != '') || ($event->time != '')) {
				echo @text('Time') .': ';
				if ($event->date != '')
					echo date('l F jS, Y', strtotime($event->date));
				if ($event->date != '' && ($event->start_time != '' || $event->end_time != ''))
					echo ' at ';
				if ($event->start_time != '')
					echo $event->start_time;
				echo '<br/>';
			} ?>
		
			<? if ($event->location != ''): ?>
				<?= @text('Place')?>: <?= $event->location?>
			<? endif; ?>
		</p>
		
		<?= isset($event->description)? $event->description:'' ?>
		
		<p class="back">
			<a href="<?= JRoute::_($link) ?>"><?= @text('Back')?></a>
		</p>
	</div>
</div>
