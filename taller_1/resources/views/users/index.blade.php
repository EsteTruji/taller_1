@extends('layouts.app')
@section('title', 'Users Section - Home')
@section('content')
<div class="text-center">

    <div style="margin-bottom:3em; margin-top:3em;"><font style="font-size: xx-large;">Welcome to the <b>users app</b>.</font></div>
  
    <div>
        <a href="{{ route('users.create') }}">
            <button type="button" style="margin-right: 1em;" class="btn btn-secondary btn-text">Create users</button>
        </a> 
        <a href="{{ route('users.list') }}">
            <button type="button" class="btn btn-secondary btn-text" >List users</button>
        </a> 
        
        
    </div>
</div>
@endsection
