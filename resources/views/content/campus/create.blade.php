@extends('layouts.layout')

@section('title', "Create Campus")

@section('content')
    @include('parts.campus.form', ['action' => route('create_campus'),])
@endsection
