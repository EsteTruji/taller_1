@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
  @foreach ($viewData['users'] as $user)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body text-center">
        <a href="{{ route('users.show', ['id'=> $user['id']]) }}"
          class="btn bg-primary text-white">{{ $user["name"] }}</a>
          <div style="margin-top:0.5em;"><b>ID: {{ $user["id"] }}</b></div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
