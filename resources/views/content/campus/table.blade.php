@extends('layouts.layout')

@section('title', "All Campuses")

@section('scripts')
    $(document).ready(function(){ $('#campuses').DataTable(); });
@endsection

@section('content')
<span style="font-size: 24px">Welcome to your locational storage, here you can start adding new infrastructure by clicking "Create Campus"</span><br />
<table id="campuses" class="table" style="margin-left: auto; margin-right: auto; width: 97%; border: 3px solid #343a40">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">Campus Name</th>
            <th scope="col" class="text-center">Campus Address</th>
            @if (Auth::check())
                <th scope="col" class="text-center">Manage Campus</th>
            @endif
        </tr>
    </thead>
    @foreach ($campuses as $campus)
        @include('parts.campus.row', ['name' => $campus->name, 'address' => $campus->address, ])
    @endforeach
</table>
@endsection
