@extends('layouts.layout')

@section('title', "All Switches")

@section('content')
<table>
    <tr>
        <th scope="col">Switch Name</th>
        <th scope="col">Switch Floor</th>
        <th scope="col">Switch Model</th>
    </tr>
    @foreach ($switches as $switch)
        @include('parts.networkswitch.row', ['name' => $switch->name, 'floor' => $switch->floor, 'model' => $switch->model])
    @endforeach
</table>
@endsection
