<style src="media://com_calendar/css/site.css" />

<h1 class="componentheading">Events</h1>

<div class="com_calendar">
	<div class="events">
		<? foreach ($events as $event): ?>
			<div class="event">
				<div class="date">
					<h2><?= $event->date ?> | <?= $event->start_time ?></h2>
				</div>
				<div class="intro">
					<?= $event->description ?>
				</div>
			</div>
		<? endforeach; ?>
	</div>
</div>