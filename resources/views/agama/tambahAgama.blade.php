@extends('layouts.adminLte')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah agama</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah agama</h3>
            </div>
            <form action="/createAgama63Proses" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Nama agama</label>
                  <input type="text" class="form-control" name="nama_agama" placeholder="Nama agama">
                </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
