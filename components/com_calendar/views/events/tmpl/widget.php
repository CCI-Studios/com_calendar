<div class="mod_calendar">
	<ul class="events">
		<? foreach ($events as $event): ?>
			<li class="event">
				<div class="date">
					<? if ($event->date != ''): ?>
						<?= date('F d, Y', strtotime($event->date)); ?>
					<? endif; ?>
					<? if ($event->date != '' && $event->start_time != ''): ?>
					 | 
					<? endif; ?>
					<? if ($event->start_time != ''): ?>	
						<?= $event->start_time ?>
					<? endif; ?>
				</div>
				<div class="intro"><?= $event->description ?></div>
			</li>
		<? endforeach; ?>
	</ul>
	
	<div class="readmore"><div>
		<a href="<?= JRoute::_($link)?>"><?= @text('View Calendar')?></a>
	</div></div>
</div>
