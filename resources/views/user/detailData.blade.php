@extends('layouts.adminLte')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Users</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                       {{ $message }}
                      </div>
                    @endif</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr class="text-center">
                        <th colspan="2"><img src="/img/{{ Auth::user()->foto }}" alt="error" width="200px" class="rounded-circle"></th>
                      </tr>
                      <tr>
                        <th style="width: 50%">Nama lengkap</th>
                        <td style="width: 50%">{{ Auth::user()->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ Auth::user()->email }}</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>{{ Auth::user()->detail_data->alamat }}</td>
                      </tr>
                      <tr>
                        <th>Tempat</th>
                        <td>{{ Auth::user()->detail_data->tempat_lahir }}</td>
                      </tr>
                      <tr>
                        <th>Tanggal</th>
                        <td>{{ Auth::user()->detail_data->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <td>{{ Auth::user()->detail_data->agama->nama_agama }}</td>
                    </tr>
                    <tr>
                      <th>Umur</th>
                      <td>{{ Auth::user()->detail_data->umur }}</td>
                    </tr>
                      <tr>
                        <th>Foto KTP</th>
                        <td><img src="/img/{{ Auth::user()->detail_data->foto_ktp }}" alt="{{ Auth::user()->detail_data->foto_ktp }}" width="100px"></td>
                      </tr>
                    </thead>
                </table>
                <div class="row">
                    <div class="col mt-2">
                        <a href="/updateData63" class="btn btn-primary">Update data</a>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
