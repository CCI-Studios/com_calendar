<div class="mod_calendar">
	<ul class="events">
		<? foreach ($events as $event): ?>
			<li class="event">
				<div class="date">
					<? if ($event->date != ''): ?>
						<?= date('F d, Y', strtotime($event->date)); ?>
					<? endif; ?>
					<? if ($event->date != '' && $event->time != ''): ?>
					 | 
					<? endif; ?>
					<? if ($event->time != ''): ?>	
						<?= $event->time ?>
					<? endif; ?>
				</div>
				<div class="intro"><?= $event->description ?></div>
			</li>
		<? endforeach; ?>
	</ul>
	
	<div class="readmore"><div>
		<a href="<?= @route('view=calendar&id='.$state->calendar_calendar_id)?>"><?= @text('View Calendar')?></a>
	</div></div>
</div>
