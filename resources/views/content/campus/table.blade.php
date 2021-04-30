@extends('layouts.layout')

@section('title', "All Campuses")

@section('content')
<table>
    <tr>
        <th scope="col">Campus Name</th>
        <th scope="col">Campus Address</th>
    </tr>
    @foreach ($campuses as $campus)
        @include('parts.campus.row', ['name' => $campus->name, 'address' => $campus->address, ])
    @endforeach
</table>
@endsection
