<div class="mod_calendar">
	<ul class="events">
		<? foreach ($events as $event): ?>
			<li class="event">
				<div class="title">
					<a href="<?= @route('view=event&id='. $event->id . $itemid) ?>">
						<?= $event->title ?>
					</a>
				</div>
				<div class="intro"><?= $event->intro ?></div>
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
			</li>
		<? endforeach; ?>
	</ul>
	
	<div class="readmore"><div>
		<a href="<?= JRoute::_($link)?>"><?= @text('View Calendar')?></a>
	</div></div>
</div>
