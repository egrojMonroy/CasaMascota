<table class="table table-hover">
	@if(isset($my_pets))
		<thead>
			<th>Name</th>
			<th>Weight</th>
			<th>Height</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Breed</th>
		</thead>
		<tbody>
		@foreach($my_pets as $row)
			<tr>
				<td>{{ $row->pet }}</td>
				<td>{{ $row->weight }}</td>
				<td>{{ $row->height }}</td>
				<td>{{ $row->age }}</td>
				<td>@if($row->gender==1)
						Male
					@endif
					@if($row->gender==0)
						Female
					@else
						Undefined
					@endif</td>
				<td>{{ $row->breed }}</td>
				<td><a href="breeds/{{ $row->id }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
				<td>
					<form action="{{ route('breeds.destroy', $row->id) }}" method="POST" >
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