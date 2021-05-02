@extends('layouts.layout')

@section('title', "Edit User Info")

@section('content')
@if ( $errors->count() > 0 )
<div style="border: 2px solid darkred; border-radius: 20px; background: red; padding: 2px 5px 2px 5px;">
    <p>The following errors have occurred:</p>

    <ul>
        @foreach( $errors->all() as $message )
            <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
@include('parts.edit_user', ['action' => route('edit_user')])
@endsection
