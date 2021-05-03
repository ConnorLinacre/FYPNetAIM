@extends('layouts.layout')

@section('title', "Update Port")

@section('content')
    @include('parts.port.form', ['action' => route('edit_port', ['port'=>$port,]), 'port' => $port])
@endsection
