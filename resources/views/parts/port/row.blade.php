<tr style="background: #76797E;" class="text-light text-center">
   <td>{{ $port_number }}</td>
   <td>{{ $access_point }}</td>
   <td>{{ $installed_by }}</td>
   <td>{{ $installed_on }}</td>
    @if(Auth::check())
        <td>
            <a href="{{route('edit_port', $port)}}" data-toggle="tooltip" title="Edit Port"><ion-icon name="create" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('delete_port', $port)}}" data-toggle="tooltip" title="Delete Port"><ion-icon name="trash" style="color: #f8f9fa"></ion-icon></a>
        </td>
    @endif
</tr>
