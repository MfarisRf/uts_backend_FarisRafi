@extends('layouts.adminLte_login')
@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="/updatePasswordProses63/{{ Auth::user()->id }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password baru" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">Update password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
          <a href="/profile63" class="btn btn-block btn-danger mb-2">
            Kembali
          </a>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
