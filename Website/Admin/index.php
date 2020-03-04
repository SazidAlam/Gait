<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gait Admin Dashboard</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>


</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">Gait</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> Welcome Sazid
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 aa">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-gear"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-block btn-secondary" data-toggle="modal" data-target="">
            <i class="fas fa-check"></i> Pending Post
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fa fa-plus"></i> Add Post
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fa fa-plus"></i> Add Category
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-info btn-block" data-toggle="modal">
            <i class="fas fa-dollar-sign"></i> Payment Tracking
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Date Posted</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td>Mouse</td>
                  <td>ENHANCE GAMING MOUSE BUNGEE</td>
                  <td>February 10, 2020</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td>Mouse</td>
                  <td>XXL EXTENDED GAMING MOUSE MAT</td>
                  <td>February 10, 2020</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td>TableTop</td>
                  <td>TABLETOP DICE CASE</td>
                  <td>February 09, 2020</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td>Headset</td>
                  <td>HEADSET STAND AND GAMING HUB</td>
                  <td>February 09, 2020</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">5</td>
                  <td>TableTop</td>
                  <td>ENHANCE TABLETOP DAMAGE MARKER</td>
                  <td>February 08, 2020</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">6</td>
                  <td>Headset</td>
                  <td>ENHANCE GAMING HEADSET STANDs</td>
                  <td>February 07, 2020</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-secondary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> 6
              </h1>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> 4
              </h1>
              <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> 2
              </h1>
              <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <footer id="main-footer" class="ab">
    <div class="">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2020 Gait</p>
        </div>
      </div>
    </div>
  </footer> -->


  <!-- POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Post</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control">
                <option value="">Mouse</option>
                <option value="">Headset</option>
                <option value="">TableTop</option>
                <option value="">Keyboard</option>
              </select>
            </div>
            <div class="form-group">
              <label for="file">Image Upload</label>
              <input type="file" class="form-control-file" onchange="ValidateSize(this)">
              <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" onclick="saveChange()" data-dismiss="modal" id="aa">Save Changes</button>
        </div>
      </div>
    </div>
  </div>


  <!-- CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-warning" onclick="saveChange()" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
