<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/admin.css" />
<style src="media://com_calendar/css/admin.css" />

<form action="<?= @route() ?>" method="get">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('Num')?></th>
				<th width="5">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column'=>'title'))?></th>
				<th width="5"><?= @text('id') ?></th>
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
			foreach ($calendars as $calendar): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$calendar))?></td>
				<td><?= $calendar->title ?></td>
				<td align="center"><?= $calendar->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($calendars)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No Calendars Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>