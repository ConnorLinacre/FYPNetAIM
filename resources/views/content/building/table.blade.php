@extends('layouts.layout')

@section('title', "All Buildings")

@section('content')
<table>
    <tr>
        <th scope="col">Building Name</th>
        <th scope="col">Building Address</th>
    </tr>
    @foreach ($buildings as $building)
        @include('parts.building.row', ['name' => $building->name, 'address' => $building->address, ])
    @endforeach
</table>
@endsection
