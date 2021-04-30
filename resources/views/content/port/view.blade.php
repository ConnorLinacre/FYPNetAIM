@extends('layouts.layout')

@section('title', "View Building")

@section('content')
Port Number: {{ $port->port_number }}
Access Point: {{ $port->access_point }}
Installed By: {{ $port->installed_by }}
Installed On: {{ $port->installed_on }}
@endsection
