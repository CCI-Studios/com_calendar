<br>

<div class="com_calendar-categories legend">
	<h2>Locations</h2>
	<ul>
		<? foreach($categories as $category): ?>
			<li style="color: #<?=$category->color?>"><?= $category->title ?></li>
		<? endforeach; ?>
	</ul>
</div>