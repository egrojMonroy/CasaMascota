<table class="table table-hover">
	@if(isset($allreservations))
		<thead>
			<th>id</th>
			<th>Fecha</th>
			<th>Dueño</th>
			<th>Mascota</th>
			<th>Tipo De Reserva</th>

		</thead>
		<tbody>
		@foreach($allreservations as $row)
			<tr>
				<td>{{ $row->id }}</td>
				<td>{{\Carbon\Carbon::parse($row->date)->format('d/m/Y H:i')}}</td>
				<td>{{ $row->uname }} {{ $row->ulname }} </td>
				<td>{{ $row->pname }}</td>
				<td>@if($row->tipo_res==1)
						Peluqueria
					@endif
					@if($row->tipo_res==0)
						Consulta
					@endif</td>
				<td><a href="reservations/{{ $row->id }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
				<td>
					<form action="{{ route('reservations.destroy',$row->id) }}" method="POST" >
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
{{$allreservations->render()}}