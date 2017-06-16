<table class="table table-hover">
    @if(isset($rooms))
        <thead>
        <th>Name</th>
        <th>Sala </th>
        <th>numero </th>
        <th>Lo usan </th>
        </thead>
        <tbody>

        @foreach($rooms as $row)
            <tr>
                <td>{{ $row->room_name }}</td>
                <td>{{ $row->type_room_name }}</td>
                <td>{{ $row->number }}</td>
                <td>{{ $row->users }}</td>


                <td><a href="assignations/{{$row->room_id}}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
                <td>
                    <form action="{{ route('assignations.destroy', $row->id) }}" method="POST" >
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger btn-xs" value="Eliminar" >
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    @endif
</table>
