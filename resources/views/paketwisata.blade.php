<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Az Travel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                
                <div class="sidebar-brand-text mx-3">AZ TRAVEL </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="paketwisata">Paket Wisata</a>
                        <a class="collapse-item" href="destinasiwisata">Destinasi</a>
                        <a class="collapse-item" href="konfirmasipesanan">Konfirmasi Pesanan</a>
                        <a class="collapse-item" href="lihatpesanan">Lihat Pesanan</a>
                    </div>
                </div>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Az Travel</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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

                <h1 class="h3 mb-2 text-gray-800">Tabel Paket Wisata</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Paket Wisata
                              </button>
                            <!--<a href="tambahPaketWisata" class="btn btn-primary">Tambah Data</a>-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">TAMBAH PAKET WISATA</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/paketwisata/store" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-6">NAMA PAKET WISATA </label><br><br>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" name="nama_paket_wisata" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-6">NAMA DESTINASI WISATA</label><br><br>
                                                <div class="col-6">
                                                    <select class="form-select" aria-label="Default select example" name="id_destinasi_wisata">
                                                        @foreach($destinasi_wisata as $dw)
                                                        <option value={{ $dw->id_destinasi_wisata }}>{{ $dw->nama_destinasi_wisata }}</option>
                                                        @endforeach
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-6">HARGA RP.</label><br><br>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" name="harga_paket_wisata" placeholder="">
                                                </div>
                                            </div>  
                                            
                                            <input type="submit" class="btn btn-primary" value="Simpan Data">
                                            <a href="/paketwisata"> 
                                                <button type="button" class="btn btn-primary">Kembali</button>
                                            </a>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table table-borderless">
                                        <tr>
                                            <th scope="col">Nama Paket Wisata </th>
                                            <th scope="col">Destinasi Wisata</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Ubah</th>
                                            <th scope="col">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($detailwisata as $pw)
                                    <tr>
                                        <td>{{$pw->nama_paket_wisata}}</td>
                                        <td>{{$pw->nama_destinasi_wisata}}</td>
                                        <td>{{$pw->harga_paket_wisata}}</td>
                                        <td>
                                            <a button type="button" class="btn btn-warning" style="color:black !important;"
                                            data-bs-toggle="modal" data-bs-target="#editModal{{ $pw->id_paket_wisata }}">Edit</button></a>
                                        </td>
                                        <div class="modal fade" id="editModal{{ $pw->id_paket_wisata }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/paketwisata/update" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group row">
                                                            <label class="col-6">NAMA PAKET WISATA </label><br><br>
                                                            <input type="hidden" class="form-control" name="id" value={{ $pw->id}}>
                                                            <input type="hidden" class="form-control" name="id_paket_wisata" value={{ $pw->id_paket_wisata}}>
                                                            <div class="col-6">
                                                                <input type="text" class="form-control" name="nama_paket_wisata" value={{ $pw->nama_paket_wisata }}>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-6 ">NAMA DESTINASI WISATA</label><br><br>
                                                            <div class="col-6">
                                                                <select class="form-select" aria-label="Default select example" name="id_destinasi_wisata">
                                                                    @foreach($destinasi_wisata as $dw)
                                                                    <?php if ($dw->id_destinasi_wisata == $pw->id_destinasi_wisata){ ?>
                                                                    <option value={{ $pw->id_destinasi_wisata }} selected > {{ $pw->nama_destinasi_wisata }}</option>
                                                                    <?php } else { ?>
                                                                    <option value={{ $dw->id_destinasi_wisata }} > {{ $dw->nama_destinasi_wisata }}</option>
                                                                    <?php } ?>
                                                                    @endforeach
                                                                  </select>
                                                            </div>
                                                        </div>
                                                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                                                        <a href="/paketwisata"> 
                                                            <button type="button" class="btn btn-primary">Kembali</button>
                                                        </a>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                        <td>
                                        <a href="/paketwisata/hapus/{{ $pw->id }}" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                            <button type="button" class="btn btn-danger" style="color:black !important;">Hapus</button></a>
                                        </a>
                                        </td>
                                    </tr>
                                    @endforeach
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
                        <span>Copyright &copy; Az Travel. 2022</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
