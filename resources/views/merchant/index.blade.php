@extends('layout.app')


@section('content')
    <br><br>
    <h1>Merchants</h1>
    <br>
    @if(count($merchants)>0)
        @foreach($merchants as $merchant)
            <div class="card">
                <div class="card-header">
                {{$merchant->category}}
                </div>
                <div class="card-body">
                <h5 class="card-title">{{$merchant->merchant_title}}</h5>
                <p class="card-text">{{$merchant->merchant_description}}</p>
                <a href="/merchant/{{$merchant->merchant_id}}" class="btn btn-primary">Check Out</a>
                </div>
            </div>
            <br>
          @endforeach
    @else
        <p>No Merchants Yet</p>
    @endif
@endsection