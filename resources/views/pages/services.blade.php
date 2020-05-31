@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        @foreach ($services as $item)
            <ul class="list-group">
                <li class="list-group-item">{{$item}}</li>
            </ul>
        @endforeach
    @endif
@endsection
        

