<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-liquid.ID</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center klik_menu" id="#dashboard" href="#">
                <div class="sidebar-brand-icon"><i class="fas fa-cloud"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-liquid.ID</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link klik_menu" id="dashboard" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="liquid" href="#">
                    <i class="fas fa-vial"></i>
                    <span>Liquid</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="Jadwal" href="#">
                    <i class="fas fa-info-circle"></i>
                    <span>Info Liquid</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


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
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid val">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.val').load('dashboard.php');
            $('.klik_menu').on('click', function() {
                let menu = $(this).attr('id');
                console.log(menu);
                if (menu == "dashboard") {
                    $('.val').load('dashboard.php');
                } else if (menu == "liquid") {
                    $('.val').load('barang.php');
                    loadTableliquid();
                } else if (menu == "Jadwal") {
                    $('.val').load('tipebarang.php');
                    loadTableJadwal();
                }
            });
            $('.val').on('click', '.addUst', function() {
                var nama = $('[name="createNama"]').val();
                var nohp = $('[name="createNoHp"]').val();
                var alamat = $('[name="createAlamat"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/liquid_id/liquid",
                    data: {
                        nama_liquid: nama,
                        no_hp_liquid: nohp,
                        alamat_liquid: alamat
                    },
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        loadTableliquid();
                        var nama = $('[name="createNama"]').val("");
                        var nohp = $('[name="createNoHp"]').val("");
                        var alamat = $('[name="createAlamat"]').val("");
                    }
                });
            });
            $('.val').on('click', '.editUst', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/liquid_id/liquid?id_liquid=${id}`,
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id"]').val(element.id_liquid);
                            $('[name="updateNama"]').val(element.nama_liquid);
                            $('[name="updateNoHp"]').val(element.no_hp_liquid);
                            $('[name="updateAlamat"]').val(element.alamat_liquid);
                        });
                    }
                });
            });
            $('.val').on('click', '.updateUst', function() {
                var id = $('[name="id"]').val();
                var nama = $('[name="updateNama"]').val();
                var nohp = $('[name="updateNoHp"]').val();
                var alamat = $('[name="updateAlamat"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/liquid_id/liquid",
                    data: {
                        id_liquid: id,
                        nama_liquid: nama,
                        no_hp_liquid: nohp,
                        alamat_liquid: alamat
                    },
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        loadTableliquid();
                        $('[name="id"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateNoHp"]').val("");
                        $('[name="updateAlamat"]').val("");
                        console.log(response);
                    }
                });
            });
            $('.val').on('click', '.deleteUst', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/liquid_id/liquid",
                        data: {
                            id_liquid: id
                        },
                        dataType: "JSON",
                        headers: {
                            'API-TOKEN': "6789"
                        },
                        success: function(response) {
                            loadTableliquid();
                        }
                    });
                }

            });



            function loadTableliquid() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/liquid_id/liquid`,
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_liquid}</td>
                                        <td>${element.nama_liquid}</td>
                                        <td>${element.alamat_liquid}</td>
                                        <td>${element.no_hp_liquid}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_liquid}" class="btn btn-success btn-sm rounded-0 editUst" type="button" data-toggle="modal" data-target="#updateModalCenterUst"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_liquid}" class="btn btn-danger btn-sm rounded-0 deleteUst" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_liquid').html(html);
                    }
                });
            }

            $('.val').on('click', '.create', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/liquid_id/liquid`,
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        var html = "<option>Pilih liquid</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_liquid}">${element.nama_liquid}</option>`;
                        });
                        $('.inputUst').html(html);
                    }
                });
            });

            $('.val').on('click', '.addMsj', function() {
                var id = $('[name="id_ust"]').val();
                var tanggal = $('[name="createTanggal"]').val();
                var mulai = $('[name="createMulai"]').val();
                var selesai = $('[name="createSelesai"]').val();
                var nama = $('[name="createNama"]').val();
                var alamat = $('[name="createAlamat"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/liquid_id/jadwal",
                    data: {
                        liquid_id: id,
                        tanggal: tanggal,
                        waktu_mulai: mulai,
                        waktu_selesai: selesai,
                        nama_masjid: nama,
                        alamat_masjid: alamat
                    },
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        loadTableJadwal();
                        $('[name="id_ust"]').val("");
                        $('[name="createTanggal"]').val("");
                        $('[name="createMulai"]').val("");
                        $('[name="createSelesai"]').val("");
                        $('[name="createNama"]').val("");
                        $('[name="createAlamat"]').val("");
                    }
                });
            });

            $('.val').on('click', '.editMsj', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/liquid_id/liquid`,
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        var html = "<option>Pilih liquid</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_liquid}">${element.nama_liquid}</option>`;
                        });
                        $('.inputUpUst').html(html);
                    }
                });
                var id = $(this).attr('key');

                $.ajax({
                    type: "GET",
                    url: `http://localhost/liquid_id/jadwal?id_jadwal=${id}`,
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id"]').val(element.id_jadwal);
                            $('[name="update_id_ust"]').val(element.liquid_id);
                            $('[name="updateTanggal"]').val(element.tanggal);
                            $('[name="updateMulai"]').val(element.waktu_mulai);
                            $('[name="updateSelesai"]').val(element.waktu_selesai);
                            $('[name="updateNama"]').val(element.nama_masjid);
                            $('[name="updateAlamat"]').val(element.alamat_masjid);
                        });
                    }
                });
            });

            $('.val').on('click', '.updateMsj', function() {
                var id = $('[name="id"]').val();
                var id_ust = $('[name="update_id_ust"]').val();
                var tanggal = $('[name="updateTanggal"]').val();
                var mulai = $('[name="updateMulai"]').val();
                var selesai = $('[name="updateSelesai"]').val();
                var nama = $('[name="updateNama"]').val();
                var alamat = $('[name="updateAlamat"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/liquid_id/jadwal",
                    data: {
                        id_jadwal: id,
                        liquid_id: id_ust,
                        tanggal: tanggal,
                        waktu_mulai: mulai,
                        waktu_selesai: selesai,
                        nama_masjid: nama,
                        alamat_masjid: alamat
                    },
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        loadTableJadwal();
                        $('[name="id"]').val("");
                        $('[name="update_id_ust"]').val("");
                        $('[name="updateTanggal"]').val("");
                        $('[name="updateMulai"]').val("");
                        $('[name="updateSelesai"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateAlamat"]').val("");

                    }
                });
            });

            $('.val').on('click', '.deleteMsj', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/liquid_id/jadwal",
                        data: {
                            id_jadwal: id
                        },
                        dataType: "JSON",
                        headers: {
                            'API-TOKEN': "6789"
                        },
                        success: function(response) {
                            loadTableJadwal();
                        }
                    });
                }

            });

            function loadTableJadwal() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/liquid_id/jadwal`,
                    dataType: "JSON",
                    headers: {
                        'API-TOKEN': "6789"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.liquid_id}</td>
                                        <td>${element.tanggal}</td>
                                        <td>${element.waktu_mulai}</td>
                                        <td>${element.waktu_selesai}</td>
                                        <td>${element.nama_masjid}</td>
                                        <td>${element.alamat_masjid}</td>
                                        <td>
                                        <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_jadwal}" class="btn btn-success btn-sm rounded-0 editMsj" type="button" data-toggle="modal" data-target="#updateModalCenterMsj"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_jadwal}" class="btn btn-danger btn-sm rounded-0 deleteMsj" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_jadwal').html(html);
                    }
                });
            }
        });
    </script>
    <td></td>
</body>

</html>