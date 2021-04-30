@extends('layouts.layout')

@section('title', "Update Building")

@section('content')
    @include('parts.building.form', ['action' => route('edit_building', ['building'=>$building,]), 'name'=>$building->name, 'address'=>$building->address ])
@endsection
