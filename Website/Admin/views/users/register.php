<div>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i> Gait Admin</h1>
        </div>
      </div>
    </div>
</header>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register Admin</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
      </div>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>

  <?php endif; ?>
  
</div>