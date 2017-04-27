<table class="table table-hover">
	@if(isset($reservations))
		<thead>
			<th>fecha</th>
			<th>hora</th>
			<th>Usuario</th>
		</thead>
		<tbody>
		@foreach($reservations as $row)
			<tr>
				<td>{{ $row->uname }}</td>
				<td>{{ $row->pname }}</td>
				<td>{{ $row->uname }}</td>
				<td><a href="reservations/{{ $row->bid }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
				<td>
					<form action="{{ route('reservations.destroy', $row->bid) }}" method="POST" >
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