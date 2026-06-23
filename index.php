<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Template – Bootstrap 5.3 Murni</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/bootstrap-icons/bootstrap-icons.min.css">
    <!-- Extenxions DataTable -->
    <link rel="stylesheet" href="dist/datatables/css/buttons.dataTables.css">
    <link rel="stylesheet" href="dist/datatables/css/dataTables.dataTables.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <i class="bi bi-shield-lock-fill"></i>
                    Admin Template Bootstrap Dimma
                </a>


                <div class="d-flex align-items-center ms-auto">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <button type="button" class="navbar-toggler ms-2" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- SIDEBAR / NAV MENU -->
    <nav class="navbar navbar-expand-lg bg-secondary border-bottom shadow-sm" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="laporan.php"><i class="bi bi-bar-chart-line"></i>Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-people"></i>Pengguna</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-gear"></i>Pengaturan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Keamanan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Keluar</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="container-fluid p-4">
        <div class="row">
            <div class="col-12">

                <h1 class="h3 mb-3">Dashboard</h1>

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="bg-primary-subtle border border-primary-subtle rounded-3 p-3 mb-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="bi bi-house-door"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>

                <!-- Tabel Data -->
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center bg-success text-white">
                        <h5 class="mb-0">Daftar Pengguna</h5>
                        <a href="#" class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i>Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped align-middle" id="example">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <a href="#" class="btn btn-warning btn-sm me-2" title="Edit"><i class="bi bi-pencil-square"></i>Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="bi bi-trash"></i>Hapus</a>
                                        </th>
                                        <td>Budi Santoso</td>
                                        <td>budi@example.com</td>
                                        <td>Admin</td>
                                        <td class="text-end">
                                            <span class="badge text-bg-success">Aktif</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Contoh Form -->
                <div class="card shadow-sm mt-4">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Contoh Form Lengkap</h5>
                    </div>

                    <div class="card-body">
                        <form>

                            <!-- 1. Textfield -->
                            <div>
                                <label for="formNama" class="form-label">Nama Lengkap (Textfield)</label>
                                <input type="text" class="form-control" id="formNama" placeholder="Masukkan nama Anda">
                            </div>

                            <!-- 2. Textarea -->
                            <div>
                                <label for="formAlamat" class="form-label">Alamat (Textarea)</label>
                                <textarea class="form-control" id="formAlamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                            </div>

                            <!-- 3. Combobox -->
                            <div class="mb-3">
                                <label for="formPekerjaan" class="form-label">Pekerjaan (Combobox/Select)</label>
                                <select class="form-select" id="formPekerjaan" aria-label="Pilih Pekerjaan">
                                    <option selected>— Pilih Pekerjaan —</option>
                                    <option value="1">Pegawai Negeri Sipil</option>
                                    <option value="2">Karyawan Swasta</option>
                                    <option value="3">Wiraswasta</option>
                                    <option value="4">Lainnya</option>
                                </select>
                            </div>

                            <!-- 4. Checkbox -->
                            <div class="mb-3">
                                <label class="form-label">Hobi (Checkbox)</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkMembaca">
                                    <label class="form-check-label" for="checkMembaca">Membaca</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkOlahraga">
                                    <label class="form-check-label" for="checkOlahraga">Olahraga</label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="checkMusik">
                                    <label class="form-check-label" for="checkMusik">Musik</label>
                                </div>
                            </div>

                            <!-- 5. Radio -->
                            <div class="mb-3">
                                <label class="form-label">Status (Radio Button)</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioStatus" id="radioAktif" checked>
                                    <label class="form-check-label" for="radioAktif">Aktif</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioStatus" id="radioNonAktif">
                                    <label class="form-check-label" for="radioNonAktif">Non-Aktif</label>
                                </div>
                            </div>

                            <!-- 6. File Upload -->
                            <div class="mb-3">
                                <label class="form-label" for="formFile">Upload Foto Profil</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                        </form>
                    </div>

                    <div class="card-footer text-end bg-body-tertiary">
                        <button type="button" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="mt-auto bg-primary text-white text-center py-3">
        <div class="container-fluid">
            <p class="mb-0">&copy; 2025 Dimma. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script src="dist/datatables/js/jquery-3.7.1.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>

    <script src="dist/datatables/js/dataTables.js"></script>
    <script src="dist/datatables/js/dataTables.buttons.js"></script>
    <script src="dist/datatables/js/buttons.dataTables.js"></script>
    <script src="dist/datatables/js/jszip.min.js"></script>
    <script src="dist/datatables/js/pdfmake.min.js"></script>
    <script src="dist/datatables/js/vfs_fonts.js"></script>
    <script src="dist/datatables/js/buttons.html5.min.js"></script>
    <script src="dist/datatables/js/buttons.print.min.js"></script>
    

    <script>
        $('#example').DataTable({
            layout:{
                topStart:'buttons'
            },
            buttons:[
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            pageLength:50,
            order:[[1, 'asc']],
        })
    </script>

</body>

</html>