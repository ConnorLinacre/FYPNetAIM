@extends('layouts.layout')

@section('title', "View Campus")

@section('content')
    Campus Name: {{ $campus->name }}
    Campus Address: {{ $campus->address }}
@endsection
