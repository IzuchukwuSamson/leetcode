<!DOCTYPE html>
<html lang="en">

<head>
  <title>CRUD Application with OOPs in PHP using Jquery AJAX and MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

  <div class="card text-center" style="padding:15px;">
    <h3>CRUD Application Using PHP-OOPs Jquery AJAX, DataTable with SweetAlert</h3>
  </div><br><br>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>All Customers from Database Records</h4>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal">
          <i class="fa fa-plus"></i> Add New Record</button>
        <a href="action.php?export=excel" class="btn btn-success m-1 float-right"> <i class="fa fa-download"></i>
          Export To Excel</a>
      </div>
    </div><br>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive" id="tableData">
          <h3 class="text-center text-success" style="margin-top: 150px;">Loading...</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Record  Modal -->
  <div class="modal" id="addModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formData">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
            </div>
            <div class="form-group">
              <label for="date">Date of birth:</label>
              <input type="date" class="form-control" name="dob" placeholder="Enter dob" required="">
            </div>
            <hr>
            <div class="form-group float-right">
              <button type="submit" class="btn btn-success" id="submit">Submit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Record  Modal -->
  <div class="modal" id="editModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form id="EditformData">
            <input type="hidden" name="id" id="edit-form-id">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="uname" id="name" placeholder="Enter name" required="">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="uemail" id="email" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" name="uusername" id="username" placeholder="Enter username"
                required="">
            </div>
            <div class="form-group">
              <label for="date">Date of birth:</label>
              <input type="date" class="form-control" name="udob" id="dob" placeholder="Enter dob" required="">
            </div>
            <hr>
            <div class="form-group float-right">
              <button type="submit" class="btn btn-primary" id="update">Update</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>