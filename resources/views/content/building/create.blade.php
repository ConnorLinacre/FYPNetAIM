@extends('layouts.layout')

@section('title', "Create Building")

@section('content')
    @include('parts.building.form', ['action' => route('create_building', ['campus'=>$campus,]),])
@endsection
