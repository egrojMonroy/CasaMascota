<table class="table table-hover">
    @if(isset($rooms))
        <thead>
            <th>Nombre</th>
            <th>Sala</th>
            <th>Número</th>
            <th>Franja horaria</th>
        </thead>
        <tbody>
        @foreach($rooms as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>@if($row->type_room_id==1)
                       CONSULTORIO
                    @endif
                    @if($row->type_room_id==2)
                        QUIROFANO
                    @endif
                    @if($row->type_room_id==3)
                        PELUQUERIA
                    @endif
                </td>
                <td>{{ $row->number }}</td>
                <td>{{$row->franja}}</td>
                <td><a href="rooms/{{ $row->id }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
                <td>
                    <form action="{{ route('rooms.destroy', $row->id) }}" method="POST" >
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
{{$rooms->render()}}