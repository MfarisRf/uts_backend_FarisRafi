@extends('layouts.adminLte_login')
@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Update</p>

        <form action="/createDataProses63" method="post" enctype="multipart/form-data">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
              <select class="form-control" name="id_agama">
                <option selected disabled>Pilih agama</option>
                @foreach ($agamas as $agama)
                <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                @endforeach
              </select>
            </div>
          <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Umur" name="umur" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto_ktp" required>
                <label class="custom-file-label" for="exampleInputFile">Foto KTP</label>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <a href="/profile63" class="btn btn-block btn-danger">
            Kembali
          </a>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
