@extends('layouts.layout')

@section('title', "Update Building")

@section('content')
    @include('parts.building.form', ['action' => route('edit_port', ['port'=>$building,]), 'port' => $port])
@endsection
