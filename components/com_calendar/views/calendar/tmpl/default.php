<?= JHtml::_('behavior.mootools')?>
<script src="media://lib_koowa/js/koowa.js" />
<?php
	//<script src="media://com_calendar/js/popover.js" /> 
?>
<style src="media://com_calendar/css/site.css" />

<div class="com_calendar">
	<h1 class="componentheading">
		<?= @escape($calendar->title); ?>
	</h1>
	
	<table class="calendar">
		<thead>
			<tr>
				<th align="center"><a href="<?= @route($prev_month) ?>">&lt;&lt;</a></th>
				<th colspan="5" class="title">
                    <?= date('F, Y', strtotime($year .'-'. $month .'-01'))?>
				</th>
				<th align="center"><a href="<?= @route($next_month)?>">&gt;&gt;</a></th>
			</tr>
			
			<tr>
				<th align="center">Sun</th>
				<th align="center">Mon</th>
				<th align="center">Tues</th>
				<th align="center">Wed</th>
				<th align="center">Thurs</th>
				<th align="center">Fri</th>
				<th align="center">Sat</th>
			</tr>
		</thead>
		
		<tbody>
			<? for ($day = 1; $day <= $total_days; $day++): ?>
				<? if ($day == 1 || ($day + $day_padding) % 7 == 1): ?>
					<tr class="week">
				<? endif; ?>
			
				<? if ($day == 1 && $day_padding != 7): ?>
					<td class="day padding" colspan="<?= $day_padding ?>"></td>
				<? endif; ?>

				<? $date_str = sprintf('%04d-%02d-%02d', $year, $month, $day) ?>
				<td class="day <?= ($today == $date_str)? 'today':'' ?>"><div>
					<div class="date"><?= $day ?></div>
					<? foreach ($events as $event): ?>
						<? if ($event->date == $date_str): ?>
							<div class="event">
								<div class="title"><a href="<?= @route('view=event&id='.$event->id) ?>"><?= $event->title?>:</a></div>
								<div class="intro"><?= $event->intro ?></div>
							</div>
						<? endif; ?>
					<? endforeach; ?>
				</div></td>
			
				<? if ($day == $total_days && ($total_days + $day_padding) % 7 != 0): ?>
					<td class="day padding" colspan="<?= 7 - ($total_days + $day_padding) % 7 ?>"></td>
				<? endif; ?>
		
				<? if ($day == $total_days || ($day + $day_padding) % 7 == 0): ?>
					</tr>
				<? endif; ?>
			<? endfor; ?>
		</tbody>
	</table>
	
	<div id="popover_event"></div>
</div>
