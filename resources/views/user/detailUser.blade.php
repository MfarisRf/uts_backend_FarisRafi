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
                  <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr class="text-center">
                        <th colspan="2"><img src="/img/{{ $user->foto }}" alt="error" width="200px" class="rounded-circle"></th>
                      </tr>
                      <tr>
                        <th style="width: 50%">Nama lengkap</th>
                        <td style="width: 50%">{{ $user->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <a href="/deleteUser63/{{ $user->id }}" class="btn btn-danger">Hapus</a>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
