@extends('master.master')

@section('content')
    <h1>User Dashboard <br> Welcome {{ Auth::user()->name }}</h1>
@endsection
