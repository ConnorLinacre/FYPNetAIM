@extends('layouts.layout')

@section('title', "Update Switch")

@section('content')
    @include('parts.building.form', ['action' => route('edit_switch', ['switch' => $switch,]), 'name' => $switch->name, 'floor' => $switch->floor, 'model' => $switch->model,])
@endsection
