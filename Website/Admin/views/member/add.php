<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add New Member</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="contact_no" class="form-control" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>member">Cancel</a>
    </form>
  </div>
</div>
    <?php endif; ?>
    
</div>
