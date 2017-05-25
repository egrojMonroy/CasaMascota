<table class="table table-hover">
    @if(isset($vaccines))
        <thead>
        <th>Name</th>
        <th>Diseases</th>
        </thead>
        <tbody>
        @foreach($vaccines as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->diseases }}</td>
                <td><a href="vaccines/{{ $row->id }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
                <td>
                    <form action="{{ route('vaccines.destroy', $row->id) }}" method="POST" >
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
{{$vaccines->render()}}