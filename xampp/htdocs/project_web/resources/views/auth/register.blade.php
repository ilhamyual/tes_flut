<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Pendaftaran Pemohon</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="main/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="main/vendors/base/vendor.bundle.base.css">
  <link href="main/js/sweetalert.css" rel="stylesheet" type="text/css">
  <script src="main/js/jquery-2.1.3.min.js"></script>
  <script src="main/js/sweetalert.min.js"></script>
  <script src="main/js/sweetalert-dev.js"></script>
  <link href="demo1/css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="demo1/js/jquery-2.1.3.min.js"></script>
<script src="demo1/js/sweetalert.min.js"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="main/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="main/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="main/img/kabmalang.png" width="125" style="display:block; margin:auto;" alt="logo">
              </div>
              <h4 class="text-center">HALAMAN PENDAFTARAN</h4>
              <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="jekel">Jenis Kelamin</label>
                                <select class="form-control" id="jekel" name="jekel" required>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control" id="kecamatan" name="kecamatan" required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="desa">Desa</label>
                                <select class="form-control" id="desa" name="desa" required>
                                    <option value="">Pilih Desa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </form>
                <div class="text-center mt-4 font-weight-light">
                  Sudah memiliki akun? <a href="/login" class="text-primary">Login</a>
                </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- insert register -->
  <!-- plugins:js -->
  <script src="main/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="main/js/off-canvas.js"></script>
  <script src="main/js/hoverable-collapse.js"></script>
  <script src="main/js/template.js"></script>
  <!-- endinject -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- endinject -->
  <script src="jquey.js"></script>
  <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script>
        $(document).ready(function(){
            $.get("/kecamatan", function(data){
                $.each(data, function(index, kecamatan){
                    $('#kecamatan').append('<option value="'+kecamatan.id+'">'+kecamatan.nama+'</option>');
                });
            });
            $('#kecamatan').change(function(){
                var id_kec = $(this).val();
                $('#desa').empty();
                $('#desa').append('<option value="">Pilih Desa</option>');
                $.get("/desa/"+id_kec, function(data){
                    $.each(data, function(index, desa){
                        $('#desa').append('<option value="'+desa.id+'">'+desa.nama+'</option>');
                    });
                });
            });
        });
    </script>
</body>

</html>