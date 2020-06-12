<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>category/add">Add Category</a>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['name']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
</div>