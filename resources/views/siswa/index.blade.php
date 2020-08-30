<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container bg-white pt-4">
        <h1>Form Pendaftaran Siswa</h1>
        <hr>
        <div class="col-md-8">
            <form action="{{ url('/siswa') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nis">NIS</label>

                    @error('nis') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="nis" class="form-control" id="nis">
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa </label>

                    @error('nama_siswa') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>

                    @error('alamat') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>

                    @error('tempat_lahir') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>

                    @error('tanggal_lahir') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>

                    @error('jurusan') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <select class="form-control" name="jurusan" id="jurusan">
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TKJ">Teknik Komputer dan Jaringan</option>
                        <option value="MM">Multimedia</option>
                        <option value="TEI">Teknik Elektronika Industri</option>
                        <option value="BC">Broadcast</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nohp">No HP</label>

                    @error('nomor_hp') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="number" name="nomor_hp" class="form-control" id="no_hp">
                </div>
                <button name="daftar" id="daftar" class="btn btn-primary" type="submit">Daftar</button>
            </form>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>