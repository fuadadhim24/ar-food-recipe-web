<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas - AR Food Recipes</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/food recipe.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/table-datatable-jquery.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app-dark.css">

</head>

<body>
    <script src="{{ asset('assets') }}/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets') }}/compiled/svg/logo.svg" alt="Logo"
                                    srcset=""></a>
                        </div> --}}
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="{{ asset('kelas') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Daftar Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{ asset('resep') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Daftar Resep</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="margin-top: 40vh;">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm w-100">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Daftar kelas</h3>
                            <p class="text-subtitle text-muted">Kelola kelas dengan mudah menggunakan tabel interaktif.
                            </p>


                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar kelas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Minimal jQuery Datatable start -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Tabel Daftar Kelas
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive datatable-minimal">
                                <table class="table" id="table2">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Intro</th>
                                            <th>Deskripsi</th>
                                            <th>Nama Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data dari AJAX akan ditampilkan di sini -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Minimal jQuery Datatable end -->

                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#recipeModal">
                    Tambah Resep
                </button>

                <!-- Modal -->
                <div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form form-vertical" id="recipeForm" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="recipeModalLabel">Tambah Kelas Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="title">Judul</label>
                                                    <input type="text" id="title" class="form-control"
                                                        name="title" placeholder="Judul Kelas">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="intro">Intro</label>
                                                    <textarea id="intro" class="form-control" name="intro" placeholder="Intro Kelas"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi Kelas"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="kategori">Kategori</label>
                                                    <select id="kategori" class="form-control" name="kategori">
                                                        <option value="antisipasi">Antisipasi</option>
                                                        <option value="tangani">Tangani</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="foto">Foto Kelas</label>
                                                    <input type="file" id="foto" class="form-control"
                                                        name="foto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal untuk menampilkan foto -->
                <div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fotoModalLabel">Foto Resep</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body"
                                style="display: flex;
        justify-content: center;
        align-items: center;">
                                <img id="fotoModalImg" style="vertical-align: middle;" src="" class="img-fluid" alt="Foto Resep">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; AR Food Recipes</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"></span>
                            by <a href="https://polije.ac.id" target="_blank">Politeknik Negeri Jember</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Menggunakan CDN untuk jQuery dan DataTables -->
    <script src="{{ asset('assets') }}/static/js/components/dark.js"></script>
    <script src="{{ asset('assets') }}/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset('assets') }}/compiled/js/app.js"></script>



    <script src="{{ asset('assets') }}/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/static/js/pages/datatables.js"></script>


    <script>
        function viewFoto(namaFoto) {
            var fotoUrl = '{{ route('admin.classes.private', ['file' => ':namaFoto']) }}';
            fotoUrl = fotoUrl.replace(':namaFoto', namaFoto);
            $('#fotoModalImg').attr('src', fotoUrl);
            $('#fotoModal').modal('show');
        }

        // Function to delete a class
        function deleteClass(id) {
            if (confirm('Are you sure you want to delete this data?')) {
                $.ajax({
                    url: '/kelas/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('Data deleted successfully!');
                        $('#table2').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('Error occurred: ' + error);
                    }
                });
            }
        }
        $(document).ready(function() {
            if ($.fn.DataTable.isDataTable('#table2')) {
                $('#table2').DataTable().destroy();
            }

            var table = $('#table2').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('admin.classes.data') }}",
                    "type": "POST",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                "searching": false,
                "lengthChange": false,
                "paging": false,
                "columns": [{
                        "data": "kategori"
                    },
                    {
                        "data": "title"
                    },
                    {
                        "data": "intro"
                    },
                    {
                        "data": "deskripsi",
                        "render": function(data, row, type) {
                            return '<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="' +
                                data + '">Lihat</button>';
                        }
                    },
                    {
                        "data": "namaFoto",
                        "render": function(data, type, row) {
                            return '<button type="button" class="btn btn-primary btn-sm" onclick="viewFoto(\'' +
                                data + '\')">Lihat Foto</button>';
                        }
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<button class="btn btn-danger btn-sm" onclick="deleteClass(' +
                                row.id + ')">Delete</button>';
                        }
                    }
                ]
            });
        });

        $('#recipeForm').submit(function(e) {
            e.preventDefault();

            // Mengambil semua data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.classes.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Kelas berhasil ditambahkan!');
                    $('#table2').DataTable().ajax.reload();
                    $('#recipeModal').modal('hide');
                    $('#recipeForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    alert('Gagal menambahkan kelas: ' + error);
                }
            });
        });
    </script>

</body>

</html>
