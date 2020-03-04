@extends('layouts.guest')

@section('content')

@if(Session::has('order_type'))
    <script>
        var url= "{{ url('/menu') }}"; 
        window.location = url; 
    </script>
@endif

<style>
.card:hover{
    background: #339AF0;
}

</style>

    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <a href="{{ url('/eat_in') }}">
                <div class="card">
                <div class="card-header" style="text-align: center; padding-top: 50px; padding-bottom: 50px">
                    <i class="fas fa-utensils" style="font-size: 150px"></i>
                    <h1 style="margin-top: 20px; font-weight: bold">Eat in</h1>
                </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('/take_away') }}">
                <div class="card">
                <div class="card-header" style="text-align: center; padding-bottom: 50px; padding-top: 50px;">
                    <i class="fas fa-location-arrow" style="font-size: 150px"></i>
                    <h1 style="margin-top: 20px; font-weight: bold">Take away</h1>
                </div>
                </div>
            </a>
        </div>  
        </div>
    </div>

@endsection