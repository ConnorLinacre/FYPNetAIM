@extends('layouts.layout')

@section('title', "Create Port")

@section('content')
    @include('parts.port.form', ['action' => route('create_switch', ['switch'=>$switch,]),])
@endsection
