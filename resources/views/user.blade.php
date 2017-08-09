@extends('layouts.app')

@section('content')
    <user :user='{{ $user }}'></user>
    <user-threads :threads='{{ $threads }}' ></user-threads>
@endsection