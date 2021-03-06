<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>{{ Route::currentRouteName() }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- Font Awesome library -->
  <link rel="stylesheet" href="{{ asset('/font_awesome/css/all.css') }}">
  <!-- Charts library -->
  <!-- <script src="{{asset('/js/charts.js')}}" charset="utf-8"></script> -->
</head>
<body class="">
    <style>
    .active>.nav-link{
        background-color: black !important;
    }
    .dropdown-item:hover{
      background: black !important;
    }
    .btn-primary:hover{
      background: black !important;
    }
    .btn-warning, .alert-warning{
      background-color: #E0BE7E !important;
    }
    .btn-danger, .btn-success{
      background: black !important;
    }
    .btn-danger{
      background-color: black !important;
    }
    </style>
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo" style="background-color: white">
        <a href="{{ url('/') }}" class="simple-text logo-normal">
            Don Petrol
        </a>
      </div>
      <div class="sidebar-wrapper" style="background-color: white; text-align: left;">
        <ul class="nav" style="min-height: 250px">
          @if(Route::currentRouteName() == "Home" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
          @endif
          <i class="fas fa-tachometer-alt"></i>
              <p>@lang('all.home')</p>
            </a>
          </li>

          @if(Route::currentRouteName() == "Categories" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/categories') }}">
          @endif
          <i class="fas fa-list"></i>
              <p>@lang('all.categories')</p>
            </a>
          </li>

          @if(Route::currentRouteName() == "Order" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/order') }}">
          @endif
          <i class="fas fa-shopping-cart"></i>
              <p>@lang('all.products')</p>
            </a>
          </li>

          @if(Route::currentRouteName() == "Orders" ) 
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/orders') }}">
          @endif
          <i class="fas fa-clipboard-list"></i>
              <p>@lang('all.orders')</p>
            </a>
          </li>

          @if(Route::currentRouteName() == "Schedule" ) 
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/schedule') }}">
          @endif
            <i class="fas fa-clock"></i>
            <p>@lang('all.opening_hours')</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
        <div class="navbar-wrapper">
            <!-- <a class="navbar-brand" href="{{ url('/') }}"><button class="btn btn-warning" style="background-color: black">Welcome page</button></a> -->
            <div class="dropdown" style="padding: 0.625rem 0; max-height: 50px; margin-top: -15px">
              <button class="btn btn-secondary dropdown-toggle" style="font-size: 13px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{App::getLocale()}}<img src="{{ asset('/flags/'.App::getLocale().'.png') }}" alt="{{App::getLocale()}}" style="height: 16px; margin-left: 5px">
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 40px; width: 100%; height: 80px">
              @if(App::isLocale('ro'))
                <a class="dropdown-item" href="{{ url('/set_lang/en') }}" style="text-align: center;height: 40px; background: white; width: 100%; margin: 0px">
                  EN<img src="{{ asset('/flags/en.png') }}" alt="en" style="height: 16px; margin-left: 5px; width: 30px">
                </a>
                <a class="dropdown-item" href="{{ url('/set_lang/nl-be') }}" style="text-align: center;height: 40px; background: white; width: 100%; margin: 0px">
                  BE<img src="{{ asset('/flags/nl-be.png') }}" alt="en" style="height: 16px; margin-left: 5px; width: 30px">
                </a>
              @elseif(App::isLocale('en'))
                <a class="dropdown-item" href="{{ url('/set_lang/ro') }}" style="text-align: center;height: 40px; background: white; width: 100%; margin: 0px">
                  RO<img src="{{ asset('/flags/ro.png') }}" alt="ro" style="height: 16px; margin-left: 5px; width: 30px">
                </a>
                <a class="dropdown-item" href="{{ url('/set_lang/nl-be') }}" style="text-align: center;height: 40px; background: white; width: 100%; margin: 0px">
                  BE<img src="{{ asset('/flags/nl-be.png') }}" alt="en" style="height: 16px; margin-left: 5px; width: 30px">
                </a>
              @elseif(App::isLocale('nl-be'))
                <a class="dropdown-item" href="{{ url('/set_lang/en') }}" style="text-align: center;height: 40px; background: white; width: 100%; margin: 0px">
                  EN<img src="{{ asset('/flags/en.png') }}" alt="en" style="height: 16px; margin-left: 5px; width: 30px">
                </a>
                <a class="dropdown-item" href="{{ url('/set_lang/ro') }}" style="text-align: center;height: 40px; background: white; width: 100%; margin: 0px">
                  RO<img src="{{ asset('/flags/ro.png') }}" alt="ro" style="height: 16px; margin-left: 5px; width: 30px">
                </a>
              @endif
              </div>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
           
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">
                      {{Auth::user()->name}}
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        @lang('all.logout')
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        @if(Session::has('success'))
        <div class="alert alert-warning" role="alert" id="error">
          {{Session::get('success')}}
        </div>
        <script>
        setTimeout(function(){
            document.getElementById('error').remove();
        }, 4000);
        </script>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert" id="error">
          {{Session::get('error')}}
        </div>
        <script>
        setTimeout(function(){
            document.getElementById('error').remove();
        }, 4000);
        </script>
        @endif
           @yield('content')
          
        </div>
      </div>
     
    </div>
  </div>
    @php
      $count = 0;
    @endphp
    @foreach(Auth::user()->cartItems as $item)
            @php
              $count += $item->quantity;
            @endphp
    @endforeach
    <!-- Cart button -->
    <button data-toggle="modal" data-target="#cart" style="position: fixed; bottom: 10px; right: 10px; padding: 10px; border-radius: 20px; font-size: 20px;z-index: 1000" class="btn btn-warning"><i style="font-size: 40px" class="fas fa-shopping-cart"></i> ({{$count}})</button>

    <!-- Modal Cart -->
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="margin: 0px">
        <div class="modal-content" style="width: 100vw; min-height: 100vh">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">@lang('all.your_order')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            @php
              $sum=0;
            @endphp

            @foreach(Auth::user()->cartItems as $item)
            @php
              $sum+=$item->product->price * $item->quantity;
              $sum+=$item->potatoes * env("FRIES_PRICE");
              $sum+=$item->mayo * env("MAYO_PRICE");
            @endphp
            <style>
              @media screen and (max-width: 441px){

                .btns-cart{
                  margin-top: 20px
                }

              }
            </style>
            <div class="card" style="margin: 0px">
              <div class="card-header">
                <tag-random style="font-size: 20px;">{{$item->quantity}} x {{$item->product->name}} = € {{$item->product->price * $item->quantity}}</tag-random>
                <div class="float-right btns-cart">
                  <button data-toggle="modal" data-target="#delete{{$item->id}}" class="btn btn-danger" style="margin-top: -10px"><i class="fas fa-trash"></i></button>
                  <button data-toggle="modal" data-target="#edit{{$item->id}}" class="btn btn-warning" style="margin-top: -10px"><i class="fas fa-edit"></i></button>
                </div>
                <br>
                + {{$item->potatoes}} x {{env("FRIES_NAME")}} (€ {{$item->potatoes * env("FRIES_PRICE")}}) <br> + {{$item->mayo}} x {{env("MAYO_NAME")}} (€ {{$item->mayo * env("MAYO_PRICE")}})
              </div>
            </div>
            <br>
            @endforeach
            <form action="{{ url('/send_order')}}" method="POSt">
            @csrf
            <div class="">

              <div class="alert alert-success" style="float: left;font-size: 16px; padding: 17px; background-color: black">
              @lang('all.total'):€ {{$sum}}
              </div>

              <br><br><br>
              <a href="{{ url('/checkout') }}">
                <button class="btn btn-success" type="button" style="padding: 17px; margin-left: -2px">
                @lang('all.to_pay')
                </button>
              </a>
            </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">@lang('all.close')</button>
          </div>
        </div>
      </div>
    </div>

    @foreach(Auth::user()->cartItems as $item)
      <!-- Modal edit quantity-->
      <div class="modal fade" id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bewerk {{$item->product->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('/edit_product_quantity/'.$item->product->id) }}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <label>Hoeveelheid:</label>
                <input name="quantity" type="number" min="1" reqired value="{{ $item->quantity }}" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
              <button type="submit" class="btn btn-warning">Wijzigingen opslaan</button>
            </div>
          </form>
        </div>
      </div>
      </div>

      <!-- Modal remove -->
      <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remove {{$item->product->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to <tag-random class="text-danger">remove</tag-random> this product from cart?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="{{ url('/remove_product_from_cart/'.$item->product->id) }}"><button type="button" class="btn btn-danger">Remove</button></a>
          </div>
        </div>
      </div>
      </div>
    @endforeach
    @if(Session::has('cartItems'))
      <script>
          var url= "{{ url('/empty_cart') }}"; 
          window.location = url; 
      </script>
  @endif
  
  <script>
    var now = new Date();
    // var hour = now.getHours();
    // var minutes = now.getMinutes();
    // var ampm = "AM";
    // if (minutes < 30) {
    //     minutes = "30";
    // } else {
    //     minutes = "00";
    //     ++hour;
    // }
    // if (hour > 23) {
    //     hour = 12;
    // } else if (hour > 12) {
    //     hour = hour - 12;
    //     ampm = "PM";
    // } else if (hour == 12) {
    //     ampm = "PM";
    // } else if (hour == 0) {
    //     hour = 12;
    // }

    if(now.getMinutes() <= 30){

      d1 = new Date();
      d2 = new Date();
      d2.setMinutes(d1.getMinutes() + 30-d1.getMinutes());
      d2.setSeconds(0);
      nextDate = d2;
      console.log(nextDate);
      if(d2.getMinutes() < 10){
        stri = '0';
      }else{
        stri = '';
      }
      document.getElementById('nextDate').innerHTML = nextDate.getHours()+':'+nextDate.getMinutes()+stri;
      document.getElementById('nextDate').setAttribute('value', nextDate.getHours()+':'+nextDate.getMinutes()+stri);

      d2.setMinutes(d2.getMinutes() + 30);
      afterDate = d2;
      console.log(afterDate);
      if(d2.getMinutes() < 10){
        stri = '0';
      }else{
        stri = '';
      }
      document.getElementById('afterDate').innerHTML = afterDate.getHours()+':'+afterDate.getMinutes()+stri;
      document.getElementById('afterDate').setAttribute('value', nextDate.getHours()+':'+nextDate.getMinutes()+stri);

      d2.setMinutes(d2.getMinutes() + 30);
      after2Date = d2;
      console.log(after2Date);
      if(d2.getMinutes() < 10){
        stri = '0';
      }else{
        stri = '';
      }
      document.getElementById('after2Date').innerHTML = after2Date.getHours()+':'+after2Date.getMinutes()+stri;
      document.getElementById('after2Date').setAttribute('value', nextDate.getHours()+':'+nextDate.getMinutes()+stri);

    }else{
      d1 = new Date();
      d2 = new Date();
      d2.setHours(d1.getHours() + 1);
      d2.setMinutes(0);
      nextDate = d2;
      console.log(nextDate);
      if(d2.getMinutes() < 10){
        stri = '0';
      }else{
        stri = '';
      }
      document.getElementById('nextDate').innerHTML = nextDate.getHours()+':'+nextDate.getMinutes()+stri;
      document.getElementById('nextDate').setAttribute('value', nextDate.getHours()+':'+nextDate.getMinutes()+stri);

      d2.setMinutes(d2.getMinutes() + 30);
      afterDate = d2;
      console.log(afterDate);
      if(d2.getMinutes() < 10){
        stri = '0';
      }else{
        stri = '';
      }
      document.getElementById('afterDate').innerHTML = afterDate.getHours()+':'+afterDate.getMinutes()+stri;
      document.getElementById('afterDate').setAttribute('value', nextDate.getHours()+':'+nextDate.getMinutes()+stri);

      d2.setMinutes(d2.getMinutes() + 30);
      after2Date = d2;
      console.log(after2Date);
      if(d2.getMinutes() < 10){
        stri = '0';
      }else{
        stri = '';
      }
      document.getElementById('after2Date').innerHTML = after2Date.getHours()+':'+after2Date.getMinutes()+stri;
      document.getElementById('after2Date').setAttribute('value', nextDate.getHours()+':'+nextDate.getMinutes()+stri);

    }

  </script>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
  <script>
    $(".loader").delay(500).fadeOut("slow");
    $("#overlayer").delay(500).fadeOut("slow");
  </script>
  <script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-dashboard.js?v=2.1.1" type="text/javascript')}}"></script>

</body>

</html>