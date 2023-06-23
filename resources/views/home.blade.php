@include('guest')
@extends('app')
@section('content')
@auth
<h1>Halooo</h1>
<p>Welcome <b>{{ Auth::user()->id_pasien }}</b></p><a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
@endsection