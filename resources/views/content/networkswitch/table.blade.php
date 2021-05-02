@extends('layouts.layout')

@section('title', "All Switches")

@section('scripts')
    $(document).ready(function(){ $('#switches').DataTable(); });
@endsection

@section('content')
<span style="font-size: 24px">All known network devices:</span><br />
<form action="@if ($building != null){{ route('all_buildings', $building->campus) }}@else{{ route('all_buildings') }}@endif" method="get">
    <button type="submit" class="btn btn-success">Back to Building</button>
</form>
<table id="switches" class="table" style="margin-left: auto; margin-right: auto; width: 97%; border: 3px solid #343a40">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">Switch Name</th>
            <th scope="col" class="text-center">Switch Floor</th>
            <th scope="col" class="text-center">Switch Model</th>
            @if (Auth::check())
                <th scope="col" class="text-center">Manage Switch</th>
            @endif
        </tr>
    </thead>
    @foreach ($switches as $switch)
        @include('parts.networkswitch.row', ['name' => $switch->name, 'floor' => $switch->floor, 'model' => $switch->model])
    @endforeach
</table>
@endsection
