@extends('layouts.layout')

@section('title', "All Buildings")

@section('content')
<table>
    <tr>
        <th scope="col">Port Number</th>
        <th scope="col">Access Point</th>
        <th scope="col">Installed By</th>
        <th scope="col">Installed On</th>
    </tr>
    @foreach ($ports as $port)
        @include('parts.port.row', ['port_number' => $port->port_number,
                                    'access_point' => $port->access_point,
                                    'installed_by' => $port->installed_by,
                                    'installed_on' => $port->installed_on, ])
    @endforeach
</table>
@endsection
