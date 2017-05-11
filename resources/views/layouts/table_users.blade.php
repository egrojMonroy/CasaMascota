<table class="table table-hover">
	@if(isset($users))
		<thead>
			<th>Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Role</th>
		</thead>
		<tbody>
		@foreach($users as $row)
			<tr>
				<td>{{ $row->name }}</td>
				<td>{{ $row->last_name }}</td>
				<td>{{ $row->email}}</td>
				<td>@if($row->rol_id==1)
						Doctor
					@endif
					@if($row->rol_id==2)
						Peluquero
					@endif
					@if($row->rol_id==3)
						Secretario
					@endif
					@if($row->rol_id==5)
						Dueño
					@endif
					@if($row->rol_id==4	)
						Empleado
					@endif
				</td>
				<td><a href="users/{{ $row->id }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
				<td>
					<form action="{{ route('users.destroy', $row->id) }}" method="POST" >
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