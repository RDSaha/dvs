<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ODC</title>
<link href="img/favicon1.png" rel="shortcut icon" type="image/png">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-address-book" style="font-size:24px"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ODC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>

  <!--     <li class="nav-item">
        <a class="nav-link" href="music.php" target="popup" onclick="window.open('music.php' , 'name', 'width=850 height= 600 ' )">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Music Player</span></a>
      </li> -->
<!-- 
      <li class="nav-item">
        <a class="nav-link" href="compliers.php" target="popup" onclick="window.open('compliers.php' , 'name', 'width=850 height= 600' )">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Compliers</span></a>
      </li> -->

s
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" onClick="javascript:history.go(-2)"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h1 class="h3 mb-2 text-gray-800">SCHEMES</h1>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
              <!-- Dropdown - Messages -->
              
            </li>

               

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Name of the Department</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <?php 
                      if (isset($_SESSION["username"]) && isset($_SESSION["password"]))
                      {
                      ?>
                      <th>1</th>
                      <th><a href="user/dept_s_user.php">School Education</a></th>
                    </tr>
                    <tr>
                      <th>2</th>
                      <th><a href = "user/dept_tevtsd_user.php">Technical Education & Vocational Training and Skill Development</a></th>
                    </tr>
                    <tr>
                      <th>3</th>
                      <th><a href = 'user/dept_bcw_user.php'>Backward Classes Welfare</a></th>
                    </tr>
                    <tr>
                      <th>4</th>
                      <th><a href = "user/dept_cdwdsw_user.php">Child Development and Women Development & Social Welfare</a></th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th><a href = "user/dept_a_user.php">Agriculture</a></th>
                      </tr>
                  <tr>
                      <th>6</th>
                      <th><a href = "user/dept_e_user.php" >Environment</a></th>
                    </tr>
                    <tr>
                    <th>7</th>
                    <th><a href = "user/dept_he_user.php" >Higher Education</a></th>
                  </tr>
                  <tr>
                    <th>8</th>
                    <th><a href = "user/dept_hfw_user.php" >Health & Family Welfare</a></th>
                  </tr>
                  <tr>
                    <th>9</th>
                    <th><a href = "user/dept_pw_user.php"  >Public Works</a></th>
                  </tr>
                  <tr>
                    <th>10</th>
                    <th><a href = "user/dept_st_user.php" >Science & Technology</a></th>
                  </tr>
                <?php 
                    }
                    else
                    {
                      header('Refresh: 2; URL =logout.php');
                    }
                ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
