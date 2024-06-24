<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url("sb2/vendor/fontawesome-free/css/all.min.css");?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url("sb2/css/sb-admin-2.min.css");?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("/dashboard");?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PT. XYZ TEKNOLOGI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url("/dashboard");?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Member</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="#">List Member</a>
                        <a class="collapse-item" href="/listKelas">List Kelas</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="">
                        PT. XYZ TEKNOLOGI
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url("/baseDisplay/1");?>">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Base Display
                                </a>
                                <a class="dropdown-item" href="<?= base_url("/baseDisplay/2");?>">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Base Table
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List Member</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#insertModal" ><i
                            class="fas fa-download fa-sm text-white-50"></i>Tambah Member Manual</a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Jenis Membership</th>
                                            <th>Role</th>
                                            <th>Valid</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Jenis Membership</th>
                                            <th>Role</th>
                                            <th>Valid</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if($member): ?>
                                            <?php foreach($member as $members): ?>  
                                                <tr>
                                                    <td>
                                                        <button data-toggle="modal" data-target="#editModal" class="btn btn-primary edit-btn" onclick="showUser(<?php echo htmlspecialchars(json_encode($members)); ?>)">Edit</button>
                                                        <a href="<?=base_url('/deleteMember/'.$members['id'])?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                    <td><?php echo $members['username']; ?></td>
                                                    <td><?php echo $members['email']; ?></td>
                                                    <td><?php echo ($members['membership'] == 1) ? "BEGINNER" : (($members['membership'] == 2) ? "BEGINNER PLUS" : (($members['membership'] == 3) ? "PROFESSIONAL" : "BELUM LANGGANAN")); ?></td>
                                                    <td><?php echo $members['role']  == 1 ? "ADMIN" : "MEMBER" ; ?></td>
                                                    <td><?php echo $members['is_valid'] == 1 ? "VALID" : "TIDAK"; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PT.XYZ TEKNOLOGI 2024</span>
                    </div>
                </div>
            </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?= base_url("/");?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Insert Modal-->
    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content m-5 p-5">
                <form action="http://localhost:8080/tambahMember" method="POST">
                    <table>
                        <tr> 
                            <td class="py-3 font-weight-bolder" colspan="3" align="center">Form Input Admin / Member</td>
                        </tr>
    
                        <tr> 
                            <td> Masukan Username</td>
                        <td> <input type="text" name="username" placeholder="Username"> </td>
                        </tr>
                            <tr> 
                            <td> Masukan Email</td>
                            <td> <input type="text" name="email" placeholder="Email"> </td>
                        </tr>
                        <tr> 
                            <td> Pilih Role</td>
                            <td> 
                                <select name="role" >
                                    <option value="1">Admin</option>
                                    <option value="2">Member</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document_edit">
            <div class="modal-content m-5 p-5">
                <form action="<?=base_url("/editMember")?>" method="POST">
                    <table>
                        <tr> 
                            <td class="py-3 font-weight-bolder" colspan="3" align="center">Form Edit Data Kelas</td>
                        </tr>
    
                        <tr hidden> 
                            <td> Masukan ID KELAS</td>
                        <td> <input readonly type="text" name="id" id="edit-id" placeholder="id Mahasiswa" value=""> </td>
                        <tr> 
                            <td> Masukan Username</td>
                        <td> <input type="text" name="username" id="edit-name" placeholder="Username"> </td>
                        </tr>
                            <tr> 
                            <td> Masukan Email</td>
                            <td> <input type="text" name="email" id="edit-email" placeholder="Email"> </td>
                        </tr>
                        <tr> 
                            <td> Pilih Role</td>
                            <td> 
                                <select name="role" id="edit-role">
                                    <option value="1">Admin</option>
                                    <option value="2">Member</option>
                                </select>
                            </td>
                        </tr>
                        <tr> 
                            <td> Valid</td>
                            <td> <input type="checkbox" id="edit-is-valid" name="is_valid" > </td>
                        </tr>
                    </table>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url("sb2/vendor/jquery/jquery.min.js");?>"></script>
    <script src="<?=base_url("sb2/vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url("sb2/vendor/jquery-easing/jquery.easing.min.js");?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url("sb2/js/sb-admin-2.min.js");?>"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url("sb2/vendor/chart.js/Chart.min.js");?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url("sb2/js/demo/chart-area-demo.js");?>"></script>
    <script src="<?=base_url("sb2/js/demo/chart-pie-demo.js");?>"></script>

    <script>
        function showUser(data){
            var id = document.getElementById('edit-id');
            var nameInput = document.getElementById('edit-name');
            var emailInput = document.getElementById('edit-email');
            var role = document.getElementById('edit-role');
            var isValid = document.getElementById('edit-is-valid');
        
            // Setel nilai input dengan nama pengguna
            id.value = data['id'];
            nameInput.value = data['username'];
            emailInput.value = data['email'];
            role.value = data['role'];
            isValid.checked = data['is_valid'] == 1;
        }
    </script>
</body>

</html>