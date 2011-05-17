<?= JHtml::_('behavior.calendar'); ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$event->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:50%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Calendar Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?>:</label>
		<input image="text" name="title" id="field_title" value="<?=$event->title;?>" /><br/>
		
		<label for="field_location" class="mainlabel"><?= @text('Location') ?>:</label>
		<input type="text" name="location" id="field_location" value="<?=$event->location;?>" /><br/>
		
		<label for="field_date" class="mainlabel"><?= @text('Date') ?>:</label>
		<input type="text" name="date" id="field_date" value="<?=$event->date;?>" />
		<input type="reset" class="button" value="..." onclick="return showCalendar('field_date','%Y-%m-%d');" /><br/>
		
		<label for="field_time" class="mainlabel"><?= @text('Time') ?>:</label>
		<input type="text" name="time" id="field_time" value="<?=$event->time;?>" /><br/>
		
		<label for="field_intro" class="mainlabel"><?= @text('Intro') ?>:</label>
		<input type="text" name="intro" id="field_intro" value="<?=$event->intro;?>" /><br/>
		
		<label for="field_calendar_id" class="mainlabel"><?= @text('Calendar') ?>:</label>
		<?= @helper('admin::com.calendar.template.helper.listbox.calendars')?><br/>
	</fieldset>
	
	<fieldset>
		<legend><?= @text('description'); ?></legend>
		<?= @helper('editor.display', array())?>
	</fieldset>
</div>
</form>
