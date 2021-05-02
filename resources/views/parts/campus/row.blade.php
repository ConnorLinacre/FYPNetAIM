<tr style="background: #76797E;" class="text-light text-center">
    <td><a style="color: #f8f9fa!important" href="{{ route('all_buildings', $campus) }}">{{ $name }}</a></td>
   <td>{{ $address }}</td>
    @if(Auth::check())
        <td>
            <a href="{{route('create_building', $campus)}}" data-toggle="tooltip" title="Add Building to Campus"><ion-icon name="add-circle-outline" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('edit_campus', $campus)}}" data-toggle="tooltip" title="Edit Campus"><ion-icon name="create" style="color: #f8f9fa"></ion-icon></a>&nbsp;
            <a href="{{route('delete_campus', $campus)}}" data-toggle="tooltip" title="Delete Campus"><ion-icon name="trash" style="color: #f8f9fa"></ion-icon></a>
        </td>
    @endif
</tr>
