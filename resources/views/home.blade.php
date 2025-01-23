
@extends('app')

@section('title', 'Home')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p style="color:red">This is my body content.</p>
@endsection
