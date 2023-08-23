@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="text-align:center; font-size:large;">Create an <b>user</b></div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('users.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter email" name="email" value="{{ old('email') }}" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter password" name="password" value="{{ old('password') }}" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter address" name="address" value="{{ old('address') }}" require/>
              <input type="number" class="form-control mb-2" placeholder="Enter balance" name="balance" value="{{ old('balance') }}" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter role" name="role" value="{{ old('role') }}" require/>
              <div style="text-align:center; margin-top:1em;">
                <input type="submit" style="font-size:large; font-weight: bold; " class="btn btn-primary" value="Create" />
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
