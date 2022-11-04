<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD App using PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa fa-code" aria-hidden="true"></i></i>&nbsp OOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h4 class="text-center text-danger font-weight-normal my-3">CRUD Application using PHP-OOP, PDO-MYSQL & Ajax</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h4 class="mt-2 text-primary">All users in Database!</h4>
    </div>
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary m-1 float-end"  data-bs-toggle="modal" data-bs-target="#addModal"><i class="fa fa-user" aria-hidden="true" ></i>&nbsp;Add new User</button>
      <a href="#" class="btn btn-success m-1 float-end"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;Export to Excel</a>
    </div>
  </div>
  <hr class="my-1">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive" id="showUser">
        <table class="table table-striped table-sm table-borderd">
        <thead class="text-center">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php for($i=1; $i<100; $i++): ?>
          <tr class="text-center text-secondary">
            <td><?= $i?></td>
            <td>User <?= $i?></td>
            <td>User <?= $i?></td>
            <td><?= $i?>@user.com</td>
            <td>012345789</td>
            <td>
              <a href="#" title="View Details" class="text-sucess"><i class="fa fa-info-circle fa-lg" style="color: green;">&nbsp;</i></a>
              <a href="#" title="Edit" class="text-primary"><i class="fa fa-pencil fa-lg" style="color: blue;">&nbsp;</i></a>
              <a href="#" title="Delete" class="text-danger"><i class="fa fa-trash  fa-lg" style="color: red;">&nbsp;</i></a>
            </td>
          </tr>
          <?php endfor; ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("table").DataTable();
      });

    </script>
  </body>
</html>