<? defined("KOOWA") or die('Nooku is not installed or enabled'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$event->id)?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('Calendar Details')?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input image="text" name="title" id="field_title" value="<?=$event->title;?>" />
				</li>

				<li>
					<label for="field_location"><?= @text('Location') ?>:</label>
					<input type="text" name="location" id="field_location" value="<?=$event->location;?>" />
				</li>

				<li>
					<label for="field_date"><?= @text('Date') ?>:</label>
					<?= @helper('behavior.calendar', array(
						'date'		=> $event->date,
						'format'	=> '%Y-%m-%d',
						'name'		=> 'date',
					)) ?>
				</li>

				<li>
					<label for="field_start_time"><?= @text('Start Time') ?>:</label>
					<input type="text" name="start_time" id="field_start_time" value="<?=$event->start_time;?>" />
				</li>

				<li>
					<label for="field_end_time"><?= @text('End Time') ?>:</label>
					<input type="text" name="end_time" id="field_end_time" value="<?=$event->end_time;?>" />
				</li>

				<li>
					<label for="field_intro"><?= @text('Intro') ?>:</label>
					<input type="text" name="intro" id="field_intro" value="<?=$event->intro;?>" />
				</li>

				<li>
					<label for="field_calendar_id"><?= @text('Calendar') ?>:</label>
					<?= @helper('listbox.calendars') ?>
				</li>
		</fieldset>
		
		<fieldset>
			<legend><?= @text('description'); ?></legend>
			<?= @editor(array())?>
		</fieldset>
	</div>
</form>
