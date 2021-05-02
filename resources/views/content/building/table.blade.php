@extends('layouts.layout')

@section('title', "All Buildings")

@section('scripts')
    // This adds datatable functionality to the table, which allows for searching and pagination
    $(document).ready(function(){ $('#buildings').DataTable(); });
@endsection

@section('content')
<span style="font-size: 24px">Listing of all known building within campus:</span><br />
<!-- Back button to return to previous page. Done as form so button can be used instead of <a> tag -->
<form action="{{ route('all_campus') }}" method="get">
    <button type="submit" class="btn btn-success">Back to Campus</button>
</form>
<table id="buildings" class="table" style="margin-left: auto; margin-right: auto; width: 97%; border: 3px solid #343a40">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">Building Name</th>
            <th scope="col" class="text-center">Building Address</th>
            @if (Auth::check())
                <th scope="col" class="text-center">Manage Building</th>
            @endif
        </tr>
    </thead>
    @foreach ($buildings as $building)
        @include('parts.building.row', ['name' => $building->name, 'address' => $building->address, 'building'=>$building, ])
    @endforeach
</table>

@endsection
