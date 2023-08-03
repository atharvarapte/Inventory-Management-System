<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a style="text-decoration:none" href="index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">ADMIN PANEL</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a style="text-decoration:none" href="#" class="d-block">admin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('/')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Customer <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_customer');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_customer');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Vendor <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_vendor');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_vendor');?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Vendor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Product <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_product');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_product');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Inward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_inward');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Inward</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_inward');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Inward</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Outward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_outward');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Outward</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_outward');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Outward</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_performa');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Performa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_performa');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Performa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('/summary');?>" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Stock Summary<i class="fas fa-angle-left right"></i></p>
            </a> 
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>REPORTS<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/reportinw');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Inward</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/reportout');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Outward</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

        <!-- Sidebar Menu -->


    </aside>


    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h2 class="m-0"></h2>
            </div><!-- /.col -->


            <div class="container" style="width: 150%;">
              <h2 id="history">V I E W &nbsp; V E N D O R S</h2>
              <hr>
              <a href="<?= base_url('/add_vendor') ?>" class="btn btn-sm btn-outline-primary offset-10"><i
                  class="fa fa-plus" aria-hidden="true"></i> Add Vendor</a>
              <table class="table table-responsive-md table-hover align-content-md-center mt-3" id="myTable">
                <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Vendor Name</th>
                    <th>Address</th>
                    <th>Contact Person</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Gst No</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1; 
                  foreach ($vendors as $row) {?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$row['name']?></td>
                      <td><?=$row['address']?></td>
                      <td><?=$row['contact_person']?></td>
                      <td><?=$row['number']?></td>
                      <td><?=$row['email']?></td>
                      <td><?=$row['gst_no']?></td>
                      <td>
                        <button class="btn btn-outline-success" onclick="editVendor(<?php print_r($row['id']); ?>);"><i class="fas fa-edit"></i> Edit</button>&nbsp;<button class="btn btn-outline-danger" onclick="deleteVendor(<?php print_r($row['id']); ?>);"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                      </td>
                    </tr>
                  <?php }?>
                </tbody>
              </table>

            </div>



            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">LORD's</a>.</strong>All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">

    </aside>
  </div>





  <script>
    function add() {
      $row = $("#item tr").length;
      $row = $row + 1;
      $("#item tr:last").after("<tr id='row" + $row + "'><td><input style='width: 125px;' type='text' name='prod[]'></td><td><input style='width: 125px;' type='text' name='qty[]'></td><td><input style='width: 150px;' type='text' name='rate[]'></td><td><input style='width: 150px;' type='text' name='freight[]'></td><td><input style='width: 100px;' type='text' name='gst[]'></td><td>    <select class='form-select' style='width: 200px;' type='text' name='unit[]'><option selected>Unit</option><option>No.</option><option>Nos</option><option>Mtr</option><option>Lot</option></select></td><td><input type='button' class='mx-2 btn btn-sm btn-outline-danger' value='Delete' onclick=del('row" + $row + "')></td></tr>");
    }

    function del() {
      // event.target will be the input element.
      var td = event.target.parentNode;
      var tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
    }

    function viewInwardProd(id) {
      //alert(id);
      window.location.href = "<?= base_url('/vinwprod') ?>/" + id;
    }

    function editVendor(id) {
      //alert(id);
      window.location.href = "<?= base_url('/edit_vendor') ?>/" + id;
    }

    function deleteVendor(id) {
      alert("Are you sure ! Do you want to delete this Vendor ?");
      window.location.href = "<?= base_url('/delete_vendor') ?>/" + id;

    }

    function invoice(id) {
      window.location.href = "<?= base_url('/viewInvoice') ?>/" + id;

    }

  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <!--<script src="dist/js/demo.js"></script>-->
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
  </script>

</body>

</html>