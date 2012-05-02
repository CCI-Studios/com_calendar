<? defined("KOOWA") or die('Nooku is not installed or enabled'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$calendar->id)?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('Calendar Details')?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?></label>
					<input image="text" name="title" id="field_title" value="<?=$calendar->title;?>" />
				</li>
			</ul>
		</fieldset>
	</div>
</form>
