<div id="content">
	<h1>Feel Tracker</h1>

	<?php foreach ($feelings as $id=>$feeling): ?>
		<div style="background:<?php echo $feeling['color']; ?>;">
			<p><?php echo $feeling['name']; ?></p>
		</div>
	<?php endforeach ?>
	
</div>