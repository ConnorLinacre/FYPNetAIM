<tr style="background: #76797E;" class="text-light text-center">
    <td><a style="color: #f8f9fa!important" href="{{ route('all_switches', $building) }}">{{ $name }}</a></td>
   <td>{{ $address }}</td>
    @if(Auth::check())
        <td>
            <a href="{{route('create_switch', $building)}}" data-toggle="tooltip" title="Add Switch to Building"><ion-icon name="add-circle-outline" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('edit_building', $building)}}" data-toggle="tooltip" title="Edit Building"><ion-icon name="create" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('delete_building', $building)}}" data-toggle="tooltip" title="Delete Building"><ion-icon name="trash" style="color: #f8f9fa"></ion-icon></a>
        </td>
    @endif
</tr>
