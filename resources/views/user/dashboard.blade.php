@extends('../layouts/parents')

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
          <div class="card-header mt-1 mb-1 text-center" style="background-color: #A29061;">
            <h4 class="">Мои профиль</h4>
          </div>
          <div class="card-body mt-4  mb-4 h-75">
            <div class="row mt-4 mb-4">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Мои галерий</h4>
                  </div>
                  <div class="card-body">

                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Мои покупки</h4>
                  </div>
                  <div class="card-body">

                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content_bottom" >
    </div>
  </div>
</div>
</div>

@endsection
