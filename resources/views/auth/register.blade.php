@extends('layouts.parents')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" async href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" media="all">


<a id="back_to_top" href="#">
  <span class="fa-stack">
    <i class="fa fa-arrow-up" style=""></i>
  </span>
</a>
<div class="content">
  <div class="content_inner">
    <div class="full_width">
      <div class="full_width_inner">
        <div class="card">
          <div class="card-header pt-4 text-center" style="background-color: #A29061;"><h4>Регистрация</h4></div>
          <div class="card-body mt-4 mb-4">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Повторите пароль</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" style="background-color: #252525; border-color:#252525; color: #A29061;" class="btn btn-primary">
                    Регистрация
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="content_bottom" >
    </div>
  </div>
</div>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

    </div>
  </div>
</div>
@endsection
