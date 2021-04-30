@extends('layouts.layout')

@section('title', "View Building")

@section('content')
Building Name: {{ $building->name }}
Building Address: {{ $building->address }}
@endsection
