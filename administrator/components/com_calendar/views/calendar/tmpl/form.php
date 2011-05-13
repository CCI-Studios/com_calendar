<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$calendar->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:50%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Calendar Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input image="text" name="title" id="field_title" value="<?=$calendar->title;?>" /><br/>
	</fieldset>
</div>
</form>
