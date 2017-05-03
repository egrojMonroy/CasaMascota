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
            </tr>
        @endforeach
        </tbody>
    @endif
</table>