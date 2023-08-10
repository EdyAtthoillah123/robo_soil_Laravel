<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROBO-SOIL</title>
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700,200') }}" rel="stylesheet">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/aos.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css?ver=1.1.0') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top  bg-success" color="0">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">ROBO-SOIL</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#berita">Berita</a>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#tanaman">Saran Tanaman</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#perbaikan">Saran Perbaikan</a>

                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="/">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="page-content">
        <div class="section" id="berita">
            <div class="container">
                <div class="h4 text-center mb-4 title">BERITA ROBO SOIL</div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Berita</h5>
                                <div class="table-container">
                                    <!-- Tambahkan div wrapper untuk tabel -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Berita</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $value)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $value->title }}</td>
                                                    <td>{{ $value->description }}</td>
                                                    <td><img style="max-width: 110px;"
                                                            src="{{ asset('image/' . $value->image) }}" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Tombol Edit dan Hapus">
                                                            <a class="btn btn-warning fa fa-pencil" data-toggle="modal"
                                                                data-target="#exampleModaledit{{ $value->id }}"
                                                                style="color: white;"></a>
                                                            <a class="btn btn-danger fa fa-trash"
                                                                href="{{ url('hapusberita/' . $value->id) }}"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Berita Robo Soil</h5>
                                <form action="{{ url('simpanberita') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label>Image Berita</label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Judul Berita</label>
                                        <input type="text" name="title" class="form-control" required=""
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="ttl">Deskripsi</label>
                                        <textarea type="text" name="description" class="form-control" required="" autocomplete="off"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-content">
        <div class="section" id="tanaman">
            <div class="container">
                <div class="h4 text-center mb-4 title">SARAN TANAMAN</div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Perbaikan</h5>
                                <div class="table-container">
                                    <!-- Tambahkan div wrapper untuk tabel -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Saran Tanaman</th>
                                                <th>Dataran</th>
                                                <th>Jenis Lahan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tanaman as $value)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $value->saran_tanaman }}</td>
                                                    <td>{{ $value->dataran }}</td>
                                                    <td>{{ $value->lahan }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Tombol Edit dan Hapus">
                                                            <a class="btn btn-warning fa fa-pencil"
                                                                data-toggle="modal"
                                                                data-target="#ModalTanaman{{ $value->id_tanaman }}"
                                                                style="color: white;"></a>
                                                            <a class="btn btn-danger fa fa-trash"
                                                                href="{{ url('hapustanaman/' . $value->id_tanaman) }}"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Saran Tanaman</h5>
                                <form action="{{ url('simpantanaman') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="ttl">Saran Tanaman</label>
                                        <input type="text" name="saran_tanaman"
                                            class="form-control @error('saran_tanaman') is-invalid @enderror"
                                            value="{{ old('saran_tanaman') }}" autocomplete="off">
                                        @error('saran_tanaman')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Dataran</label>
                                        <div class="col">
                                            <select style="font-size: 14px;"
                                                class="form-control @error('dataran') is-invalid @enderror"
                                                name="dataran" autocomplete="off" id="exampleFormControlSelect1">
                                                <option value="pilih">Pilih
                                                </option>
                                                <option value="Rendah"
                                                    {{ 'Rendah' === old('dataran') ? 'selected' : '' }}>
                                                    Dataran Rendah
                                                </option>
                                                <option value="Tinggi"
                                                    {{ 'Tinggi' === old('dataran') ? 'selected' : '' }}>
                                                    Dataran Tinggi
                                                </option>
                                            </select>
                                            @error('dataran')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lahan</label>
                                        <div class="col">
                                            <select style="font-size: 14px;"
                                                class="form-control @error('lahan') is-invalid @enderror"
                                                name="lahan" autocomplete="off" id="exampleFormControlSelect1">
                                                <option value="pilih">Pilih
                                                </option>
                                                <option value="Basah"
                                                    {{ 'Basah' === old('lahan') ? 'selected' : '' }}>
                                                    Basah
                                                </option>
                                                <option value="Kering"
                                                    {{ 'Kering' === old('lahan') ? 'selected' : '' }}>
                                                    Kering
                                                </option>
                                            </select>
                                            @error('lahan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-content">
        <div class="section" id="perbaikan">
            <div class="container">
                <div class="h4 text-center mb-4 title">SARAN PERBAIKAN</div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Perbaikan</h5>
                                <div class="table-container">
                                    <!-- Tambahkan div wrapper untuk tabel -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Saran Perbaikan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($perbaikan as $value)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $value->saran_perbaikan }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Tombol Edit dan Hapus">
                                                            <a class="btn btn-warning fa fa-pencil"
                                                                data-toggle="modal"
                                                                data-target="#ModalPerbaikan{{ $value->id }}"
                                                                style="color: white;"></a>
                                                            <a class="btn btn-danger fa fa-trash"
                                                                href="{{ url('hapusperbaikan/' . $value->id) }}"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Saran Perbaikan</h5>
                                <form action="{{ url('simpanperbaikan') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="ttl">Saran Perbaikan</label>
                                        <input type="text" name="perbaikan"
                                            class="form-control @error('perbaikan') is-invalid @enderror"
                                            value="{{ old('perbaikan') }}" autocomplete="off">
                                        @error('perbaikan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($tanaman as $value)
        <div class="modal fade" id="ModalTanaman{{ $value->id_tanaman }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Saran Tanaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('edittanaman/' . $value->id_tanaman) }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ttl">Saran Tanaman</label>
                                <input type="text" name="saran_tanaman"
                                    class="form-control @error('saran_tanaman') is-invalid @enderror"
                                    value="{{ old('saran_tanaman', $value->saran_tanaman) }}" autocomplete="off">
                                @error('saran_tanaman')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dataran</label>
                                <div class="col">
                                    <select class="form-control @error('dataran') is-invalid @enderror" name="dataran"
                                        autocomplete="off" id="exampleFormControlSelect1">
                                        <option value="{{ $value->dataran }}">{{ $value->dataran }}
                                        </option>
                                        <option value="Rendah" {{ 'Rendah' === old('dataran') ? 'selected' : '' }}>
                                            Dataran Rendah
                                        </option>
                                        <option value="Tinggi" {{ 'Tinggi' === old('dataran') ? 'selected' : '' }}>
                                            Dataran Tinggi
                                        </option>
                                    </select>
                                    @error('dataran')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Lahan</label>
                                <div class="col">
                                    <select class="form-control @error('lahan') is-invalid @enderror" name="lahan"
                                        autocomplete="off" id="exampleFormControlSelect1">
                                        <option value="{{ $value->lahan }}">{{ $value->lahan }}
                                        </option>
                                        <option value="Basah" {{ 'Basah' === old('lahan') ? 'selected' : '' }}>
                                            Basah
                                        </option>
                                        <option value="Kering" {{ 'Kering' === old('lahan') ? 'selected' : '' }}>
                                            Kering
                                        </option>
                                    </select>
                                    @error('lahan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($perbaikan as $value)
        <div class="modal fade" id="ModalPerbaikan{{ $value->id_tanaman }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Saran Tanaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('editperbaikan/' . $value->id) }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ttl">Saran Tanaman</label>
                                <input type="text" name="saran_tanaman"
                                    class="form-control @error('saran_tanaman') is-invalid @enderror"
                                    value="{{ old('saran_tanaman') }}" autocomplete="off">
                                @error('saran_tanaman')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dataran</label>
                                <div class="col">
                                    <select class="form-control @error('dataran') is-invalid @enderror" name="dataran"
                                        autocomplete="off" id="exampleFormControlSelect1">
                                        <option value="pilih">Pilih
                                        </option>
                                        <option value="Dataran Rendah"
                                            {{ 'Dataran Rendah' === old('dataran') ? 'selected' : '' }}>
                                            Dataran Rendah
                                        </option>
                                        <option value="Dataran Tinggi"
                                            {{ 'Dataran Tinggi' === old('dataran') ? 'selected' : '' }}>
                                            Dataran Tinggi
                                        </option>
                                    </select>
                                    @error('dataran')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ttl">Jenis Lahan</label>
                                <input type="text" name="lahan"
                                    class="form-control @error('lahan') is-invalid @enderror"
                                    value="{{ old('lahan') }}" autocomplete="off">
                                @error('lahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Edit berita-->
    @foreach ($data as $value)
        <div class="modal fade" id="exampleModaledit{{ $value->id }}" tabindex="-1" role="dialog"
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
                        <form action="{{ url('updateimage/' . $value->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <label>Image</label>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" name="image">
                                    <button type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                        <form action="{{ url('editberita/' . $value->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $value->title }}" required="" placeholder="" autocomplete="off">
                                <label>Deskripsi Berita</label>
                                <textarea name="description" class="form-control" value="">{{ $value->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</body>

</html>


<style>
    .table-container {
        max-height: 375px;
        min-height: 375px;
        /* Atur tinggi maksimum yang diinginkan, misalnya 300px */
        overflow-y: auto;
        /* Menerapkan scrollbar ketika konten melebihi tinggi maksimum */
    }
</style>

<script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
<script src="js/core/popper.min.js?ver=1.1.0"></script>
<script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
<script src="js/now-ui-kit.js?ver=1.1.0"></script>
<script src="js/aos.js?ver=1.1.0"></script>
<script src="scripts/main.js?ver=1.1.0"></script>
<!-- Link ke file JS Bootstrap dan jQuery (wajib dimasukkan sebelum tag </body>) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>
