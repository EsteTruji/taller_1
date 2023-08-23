@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div style="margin-top: 3em; margin-left:17.5em; margin-right:17em; padding-left:3em;" class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div  class="card-body">
        <h5 class="card-title">
           <h3><b>{{ $viewData["user"]["name"] }}</b></h3>
           <h4><p><b>ID: </b> {{ $viewData["user"]["id"] }}</p></h4>
        </h5>
        <p class="card-text"><b>Email: </b> {{ $viewData["user"]["email"] }}</p>
        <p class="card-text"><b>Password: </b> {{ $viewData["user"]["password"] }}</p>
        <p class="card-text"><b>Address: </b> {{ $viewData["user"]["address"] }}</p>
        <p class="card-text"><b>Balance: </b>{{ $viewData["user"]["balance"] }}</p>
        <p class="card-text"><b>Role: </b>{{ $viewData["user"]["role"] }}</p>
        
      </div>
      <div style="padding-left:11em; margin-bottom: 2em;">
        <form method="POST" action="{{ route('users.delete', $viewData['user']['id'])}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete user</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
