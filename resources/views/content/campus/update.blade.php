@extends('layouts.layout')

@section('title', "Update Campus")

@section('content')
    @include('parts.campus.form', ['action' => route('edit_campus', ['campus' => $campus,]), 'name'=>$campus->name, 'address'=>$campus->address])
@endsection
