<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>member/add">Add New Member</a>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['name']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<h4><?php echo $item['email']; ?></h4>
			<br />
			<h4><?php echo $item['contact_no']; ?></h4>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
	
</div>