@extends('layouts.layout')

@section('title', "View Switch")

@section('content')
Switch Name: {{ $switch->name }}
Switch Floor: {{ $switch->floor }}
Switch Model: {{ $switch->model }}
@endsection
