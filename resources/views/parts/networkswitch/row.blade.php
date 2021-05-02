<tr style="background: #76797E;" class="text-light text-center">
    <td><a style="color: #f8f9fa!important" href="{{ route('all_ports', $switch) }}">{{ $name }}</a></td>
   <td>{{ $floor }}</td>
   <td>{{ $model }}</td>
    @if(Auth::check())
        <td>
            <a href="{{route('create_port', $switch)}}" data-toggle="tooltip" title="Add Port to Switch"><ion-icon name="add-circle-outline" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('edit_switch', $switch)}}" data-toggle="tooltip" title="Edit Switch"><ion-icon name="create" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('delete_switch', $switch)}}" data-toggle="tooltip" title="Delete Switch"><ion-icon name="trash" style="color: #f8f9fa"></ion-icon></a>
        </td>
    @endif
</tr>
