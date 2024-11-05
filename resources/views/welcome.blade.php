@extends('app')

@section('title', $title)

@section('style')
@endsection

@section('scripts')
    <script>
        const d_week = new Datepicker(
            document.querySelector("#tanggal_masuk"), {
                buttonClass: "btn",
            }
        );
        let table = new DataTable('#table-pegawai', {
            responsive: true,
        });

        $(document).ready(function() {
            // Initialize jQuery Validation
            $('#pegawaiSearchForm').validate({
                // Rules for each field
                rules: {
                    nama_lengkap: {
                        required: false,
                        minlength: 3
                    },
                    departemen: {
                        required: false,
                        minlength: 3
                    },
                    jabatan: {
                        required: false,
                        minlength: 3
                    },
                    status_kepegawaian: {
                        required: false,
                    },
                    tanggal_masuk: {
                        required: false,
                        date: true
                    }
                },
                messages: {
                    nama_lengkap: {
                        required: "Harap masukkan nama pegawai",
                        minlength: "Nama pegawai harus minimal 3 karakter"
                    },
                    departemen: {
                        required: "Harap masukkan departemen",
                        minlength: "Departemen harus minimal 3 karakter"
                    },
                    jabatan: {
                        required: "Harap masukkan jabatan",
                        minlength: "Jabatan harus minimal 3 karakter"
                    },
                    status_kepegawaian: {
                        required: "Harap pilih status kepegawaian"
                    },
                    tanggal_masuk: {
                        required: "Harap masukkan tanggal masuk",
                        date: "Tanggal masuk harus dalam format tanggal"
                    }
                },
                errorClass: "text-danger",
                submitHandler: function(form) {
                    $.ajax({
                        url: `{{ route('search') }}`, // Pastikan ini mengarah ke rute yang benar
                        type: 'POST', // Gunakan POST atau GET sesuai dengan kebutuhan
                        data: $(form).serialize(),
                        success: function(response) {
                            if (response.data.length == 0) {
                                alert('Data tidak ditemukan');
                            } else {
                                // Clear existing data in DataTable
                                let table = $('#table-pegawai').DataTable();
                                table.clear();

                                // Populate the DataTable with new data
                                $.each(response.data, function(index, item) {
                                    table.row.add([
                                        item.nama_lengkap,
                                        item.jenis_kelamin,
                                        item.tanggal_lahir,
                                        item.alamat,
                                        item.no_telepon,
                                        item.email,
                                        item.jabatan,
                                        item.departemen,
                                        item.tanggal_masuk,
                                        item.status_kepegawaian
                                    ]).draw();
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                }

            });
        });

        $(document).ready(function() {
            // Initialize jQuery Validation
            $('#formtambahdatapegawai').validate({
                // Rules for each field
                rules: {
                    nama_lengkap: {
                        required: true,
                        minlength: 3
                    },
                    nik: {
                        required: true,
                        number: true,
                        minlength: 16
                    },
                    npwp: {
                        required: true,
                        number: true,
                        minlength: 15
                    },
                    no_telepon: {
                        required: true,
                        number: true,
                        minlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    jabatan: {
                        required: true,
                        minlength: 3
                    },
                    departemen: {
                        required: true,
                        minlength: 3
                    },
                    tanggal_masuk: {
                        required: true,
                        date: true
                    },
                    status_kepegawaian: {
                        required: true
                    },
                    jenis_kelamin: {
                        required: true
                    },
                    tanggal_lahir: {
                        required: true,
                        date: true
                    },
                    alamat: {
                        required: true,
                        minlength: 10
                    },
                    gaji_pokok: {
                        required: true,
                        number: true,
                        min: 0
                    }
                },
                messages: {
                    nama_lengkap: {
                        required: "Harap masukkan nama lengkap",
                        minlength: "Nama lengkap harus minimal 3 karakter"
                    },
                    nik: {
                        required: "Harap masukkan NIK",
                        minlength: "NIK harus minimal 16 karakter"
                    },
                    npwp: {
                        required: "Harap masukkan NPWP",
                        minlength: "NPWP harus minimal 15 karakter"
                    },
                    no_telepon: {
                        required: "Harap masukkan nomor telepon",
                        minlength: "Nomor telepon harus minimal 10 karakter"
                    },
                    email: {
                        required: "Harap masukkan email",
                        email: "Email harus dalam format yang benar"
                    },
                    jabatan: {
                        required: "Harap masukkan jabatan",
                        minlength: "Jabatan harus minimal 3 karakter"
                    },
                    departemen: {
                        required: "Harap masukkan departemen",
                        minlength: "Departemen harus minimal 3 karakter"
                    },
                    tanggal_masuk: {
                        required: "Harap masukkan tanggal masuk",
                        date: "Tanggal masuk harus dalam format tanggal"
                    },
                    status_kepegawaian: {
                        required: "Harap pilih status kepegawaian"
                    },
                    jenis_kelamin: {
                        required: "Harap pilih jenis kelamin"
                    },
                    tanggal_lahir: {
                        required: "Harap masukkan tanggal lahir",
                        date: "Tanggal lahir harus dalam format tanggal"
                    },
                    alamat: {
                        required: "Harap masukkan alamat",
                        minlength: "Alamat harus minimal 10 karakter"
                    },
                    gaji_pokok: {
                        required: "Harap masukkan gaji pokok",
                        number: "Gaji pokok harus berupa angka",
                        min: "Gaji pokok tidak boleh negatif"
                    }
                },
                errorClass: "text-danger",
                submitHandler: function(form) {
                    $.ajax({
                        url: `{{ route('store') }}`,
                        type: 'POST',
                        data: $(form).serialize(),
                        success: function(response) {
                            if (response.success) {
                                alert('Data berhasil disimpan');
                                $('#modalTambahPegawai').modal('hide');
                                $('#pegawaiSearchForm')[0].reset();
                                $('#pegawaiSearchForm').submit();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                }
            });
        });

        $(document).ready(function() {
            $('#restSearch').on('click', function() {
                $('#pegawaiSearchForm')[0].reset();
                $('#pegawaiSearchForm').submit();
            });
        });
    </script>
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <h4>List Data Pegawai</h4>
                </div>
                <button class="btn btn-primary btn-md" type="button" data-bs-toggle="modal"
                    data-bs-target="#modalTambahPegawai">Tambah Data Pegawai</button>
            </div>

            <div class="card-body">
                <h5>Cari Data pegawai</h5>
                <form id="pegawaiSearchForm" action="#" method="GET" class="mt-3">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="nama_lengkap">Nama Pegawai</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    placeholder="Nama Pegawai">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="departemen">Departemen</label>
                                <input type="text" class="form-control" id="departemen" name="departemen"
                                    placeholder="Cari berdasarkan departemen">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan"
                                    placeholder="Cari berdasarkan jabatan">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="status_kepegawaian">Status Kepegawaian</label>
                                <select class="form-control" name="status_kepegawaian" id="status_kepegawaian">
                                    <option value="" selected>=Pilih Status Kepegawaian=</option>
                                    <option value="Tetap">Tetap</option>
                                    <option value="Kontrak">Kontrak</option>
                                    <option value="Magang">Magang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label for="tanggal_masuk">Tanggal Masuk</label>
                                <input type="text" class="form-control" id="tanggal_masuk" name="tanggal_masuk"
                                    placeholder="Select date" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary w-100">
                        <svg class="pc-icon mb-1">
                            <use xlink:href="#custom-search-normal-1"> </use>
                        </svg>
                        Cari Pegawai
                    </button>
                    <button type="button" id="restSearch" class="btn btn-sm btn-danger w-100 mt-2">
                        <i data-feather="trash" class="mb-1"></i>
                        Bersihkan Pencarian
                    </button>
                </form>


                {{-- modal --}}
                <div class="modal fade" id="modalTambahPegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Data Pegawai</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="formtambahdatapegawai">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="npwp" class="form-label">NPWP</label>
                                        <input type="text" class="form-control" id="npwp" name="npwp" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis
                                            Kelamin</label>
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal
                                            Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir"
                                            name="tanggal_lahir" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telepon" class="form-label">No. Telepon</label>
                                        <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="departemen" class="form-label">Departemen</label>
                                        <input type="text" class="form-control" id="departemen" name="departemen"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_masuk" class="form-label">Tanggal
                                            Masuk</label>
                                        <input type="date" class="form-control" id="tanggal_masuk"
                                            name="tanggal_masuk" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                                        <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status_kepegawaian" class="form-label">Status
                                            Kepegawaian</label>
                                        <select class="form-select" id="status_kepegawaian" name="status_kepegawaian"
                                            required>
                                            <option value="">Pilih Status</option>
                                            <option value="Tetap">Tetap</option>
                                            <option value="Kontrak">Kontrak</option>
                                            <option value="Magang">Magang</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" form="formtambahdatapegawai">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end Modal --}}
                <hr>
                <div class="table-responsive">
                    <table id="table-pegawai" class="table table-striped table-hover table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Nama Pegawai</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Nomor Telp</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Departemen</th>
                                <th>Tanggal Masuk</th>
                                <th>Status Kepegawaian</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-pegawai">
                            @foreach ($pegawai as $p)
                                <tr>
                                    <td>{{ $p->nama_lengkap }}</td>
                                    <td>{{ $p->jenis_kelamin }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->no_telepon }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                    <td>{{ $p->departemen }}</td>
                                    <td>{{ $p->tanggal_masuk }}</td>
                                    <td>{{ $p->status_kepegawaian }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
