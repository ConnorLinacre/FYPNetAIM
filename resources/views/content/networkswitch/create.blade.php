@extends('layouts.layout')

@section('title', "Create Switch")

@section('content')
    @include('parts.networkswitch.form', ['action' => route('create_switch', ['building'=>$building,]),])
@endsection
