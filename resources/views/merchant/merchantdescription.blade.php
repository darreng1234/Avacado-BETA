@extends('layout.app')

@section('content')

    <br><br>    
    <h1 class="display-4">{{$merchant->merchant_title}}</h1>
    <p class="lead">{{$merchant->category}}
    <svg class="bi bi-dot" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"/>
      </svg>
      {{$merchant->sub_category}}
      <div>
        <svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
          </svg>
        {{$merchant->location}}
      </div>
    </p>
    <br>
    <div>
        <img src="{{asset('images/maxresdefault.jpg')}}" alt="..." class="rounded float-right" width="200px" height="200px">
    </div>
    <br>
    <div>
        <p>{{$merchant->merchant_description}}</p>
    </div>
    

    <br>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Contact {{$merchant->owner_firstname}}
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <b>Contact Number</b> {{$merchant->merchant_phone}}
        <br>
        <b>Email</b> {{$merchant->merchant_email}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection
