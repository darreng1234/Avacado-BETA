@extends('layout.landing')

@section('landing-content')
    <div>
        <h1 class="display-4">Avacado.com</h1>
        <div class="dropdown" id="main-dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="custom-dropdown">
              Your Location
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" class="btn-lg btn-block">
                @if(count($cities)>0)
                    @foreach ($cities as $city)
                     <div class="dropdown-item" >{{$city}}</div>
                    @endforeach
                @endif
              
            </div>
            <a href="/merchant" class="btn btn-primary" id="proceed-btn">Proceed</a>
          </div>
         
    </div>
    
@endsection
        


