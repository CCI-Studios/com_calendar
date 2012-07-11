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
				<th width="10"><?= @helper('grid.checkall') ?></th>
				<th><?= @helper('grid.sort', array('column'=>'title'))?></th>
				<th width="150"><?= @text('Color') ?></th>
				<th width="5"><?= @helper('grid.sort', array('column' => 'id', 'title' => 'ID')) ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="5">
					<?= @helper('paginator.pagination', array('total' => $total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($categories as $category): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $category))?></td>
				<td><a href="<?= @route('view=category&id='. $category->id) ?>">
					<?= $category->title ?>
				</a></td>
				<td align="center"><div style="width: 140px; height: 1em; background: #<?= $category->color; ?>;"></div></td>
				<td align="center"><?= $calendar->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($categories)): ?>
			<tr>
				<td align="center" colspan="5">
					<?= @text('No Categories Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>