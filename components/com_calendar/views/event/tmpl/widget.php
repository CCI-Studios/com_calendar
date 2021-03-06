<div id="popover_event"><div>
	<h2><?= $event->title?></h2>
	
	<p>
		<? if (($event->date != '') || ($event->time != '')) {
			echo @text('Time') .': ';
			if ($event->date != '')
				echo date('l F jS, Y', strtotime($event->date));
			if ($event->date != '' && $event->start_time != '')
				echo ' at ';
			if ($event->start_time != '')
				echo $event->start_time;
			echo '<br/>';
		} ?>
	
		<? if ($event->location != ''): ?>
			<?= @text('Place')?>: <?= $event->location?>
		<? endif; ?>
	</p>
	
	<?= isset($event->description)? $event->description : '' ?>
</div></div>
