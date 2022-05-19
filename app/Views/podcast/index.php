<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    img.scaled {
        width: 100%;
        height: 100%;
    }
    </style>

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
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Podcast</div>
            </a>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url("/Podcast"); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>



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

                        <!-- Nav Item - Alerts -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Podcast</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables Podcast</h1>
                    <p class="mb-4">Table Menampilkan data terkait title dan category. Tombol detail berfungsi
                        menampilkan Keseluruhan data Podcast</p>



                    <!-- Jika Gagal -->
                    <?php if(!$berhasil == null) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $berhasil; ?>
                    </div>
                    <?php endif; ?>
                    <?php if(!$gagal == null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $gagal; ?>
                    </div>
                    <?php endif; ?>
                    <?php if(!$deleteBerhasil == null) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $deleteBerhasil; ?>
                    </div>
                    <?php endif; ?>
                    <!-- -------- -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Table Podcast</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <button type="button mb-2" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modalTambah">
                                        Tambah Data
                                    </button>
                                    <br></br>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?= base_url("Podcast/save"); ?>" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div>
                                                                <small>Title</small>
                                                                <label for="title" class="form-label"></label>
                                                                <input type="text" class="form-control" id="title"
                                                                    name="title" placeholder="Isikan Title disini">
                                                            </div>
                                                            <div>
                                                                <small>Category</small>
                                                                <label for="category" class="form-label"></label>
                                                                <input type="text" class="form-control" id="category"
                                                                    name="category"
                                                                    placeholder="isikan Category disini">
                                                            </div>
                                                            <div>
                                                                <small>Voice</small>
                                                                <label for="voice" class="form-label"></label>
                                                                <input required class="form-control" type="file"
                                                                    name="voice" id="voice" multiple>
                                                            </div>
                                                            <div>
                                                                <small>Image</small>
                                                                <label for="image" class="form-label"></label>
                                                                <input required class="form-control" name="image"
                                                                    type="file" id="image" multiple
                                                                    placeholder="Masukan Gambar">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Tambah</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Detail</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($podcast as $p): ?>
                                        <tr>
                                            <td class="text-center"><?= $p["title"] ?></td>
                                            <td class="text-center"><?= $p["category"] ?></td>
                                            <td class="text-center">
                                                <button type="button mb-2" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal<?= $p["id"] ?>">
                                                    Detail
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>

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
                        <span>Copyright &copy; https://gustimuhammadadzaky.github.io</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <?php
    $no = 0;
    foreach ($podcast as $m):
    $no++; ?>
    <div class="modal fade" id="exampleModal<?= $m["id"] ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img class=scaled src="<?= $m["image_url"] ?>" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $m["title"] ?></h5>
                                                <p class="card-text"><?= $m["category"] ?></p>
                                                <audio controls class="container">
                                                    <source src="<?= $m["voice_url"] ?>" type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="<?= base_url("podcast/delete" ); ?>/<?= $m["id"]; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('apakah anda yakin?')">Delate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

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