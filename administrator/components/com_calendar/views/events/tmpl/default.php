<? defined('KOOWA') or die('Nooku not installed'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_calendar/css/admin.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('#')?></th>
				<th width="10">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column'=>'title'))?></th>
				<th width="200"><?= @helper('grid.sort', array('column'=>'date'))?></th>
				<th width="5"><?= @helper('grid.sort', array('column' => 'id', 'title' => 'ID')) ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="99">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($events as $event): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$event))?></td>
				<td><a href="<?= @route('view=event&id='.$event->id)?>">
					<?= $event->title ?>
				</a></td>
				<td align="center"><?= $event->date .', '. $event->start_time .' - '. $event->end_time ?></td>
				<td align="center"><?= $event->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($events)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No Events Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>