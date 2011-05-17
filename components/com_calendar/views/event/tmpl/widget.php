<div id="popover_event"><div>
	<h1 class="componentheading"><?= $event->title?></h1>
	
	<p>
		<? if (($event->date != '') || ($event->time != '')) {
			echo @text('Time') .': ';
			if ($event->date != '')
				echo date('l F jS, Y', strtotime($event->date));
			if ($event->date != '' && $event->time != '')
				echo ' at ';
			if ($event->time != '')
				echo $event->time;
			echo '<br/>';
		} ?>
	
		<? if ($event->location != ''): ?>
			<?= @text('Place')?>: <?= $event->location?>
		<? endif; ?>
	</p>
	
	<?= isset($event->description)? $event->description:'' ?>
</div></div>
