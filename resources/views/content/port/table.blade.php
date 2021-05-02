@extends('layouts.layout')

@section('title', "All Ports")

@section('scripts')
    $(document).ready(function(){ $('#ports').DataTable(); });
@endsection

@section('content')
<span style="font-size: 24px">Lorem Ipsum Dolor Sit Het</span><br />
<form action="@if ($switch != null){{ route('all_switches', $switch->building) }}@else{{ route('all_switches') }}@endif" method="get">
    <button type="submit" class="btn btn-success">Back to Switch</button>
</form>
<table id="ports" class="table" style="margin-left: auto; margin-right: auto; width: 97%; border: 3px solid #343a40">
    <thead class="thead-dark">
    <tr>
        <th scope="col" class="text-center">Port Number</th>
        <th scope="col" class="text-center">Access Point</th>
        <th scope="col" class="text-center">Installed By</th>
        <th scope="col" class="text-center">Installed On</th>
        @if (Auth::check())
            <th scope="col" class="text-center">Manage Campus</th>
        @endif
    </tr>
    </thead>
    @foreach ($ports as $port)
        @include('parts.port.row', ['port_number' => $port->port_number,
                                    'access_point' => $port->access_point,
                                    'installed_by' => $port->installed_by,
                                    'installed_on' => $port->installed_on, ])
    @endforeach
</table>
@endsection
