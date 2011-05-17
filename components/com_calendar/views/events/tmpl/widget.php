<div class="mod_calendar">
	<ul class="events">
		<? foreach ($events as $event): ?>
			<li class="event">
				<div class="date"><?= $event->date ?> | <?= $event->time ?></div>
				<div class="intro"><?= $event->description ?></div>
			</li>
		<? endforeach; ?>
	</ul>
	
	<div class="readmore"><div>
		<a href="<?= @route('view=calendar&id='.$state->calendar_calendar_id)?>"><?= @text('View Calendar')?></a>
	</div></div>
</div>
