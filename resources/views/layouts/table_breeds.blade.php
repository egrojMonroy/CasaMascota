<table class="table table-hover">
	@if(isset($breeds))
		<thead>
			<th>Family</th>
			<th>Breed</th>
		</thead>
		<tbody>
		@foreach($breeds as $row)
			<tr>
				<td>{{ $row->fname }}</td>
				<td>{{ $row->bname }}</td>
				<td><a href="breeds/{{ $row->bid }}/edit" class="btn btn-warning btn-xs">Modificar</a></td>
				<td>
					<form action="{{ route('breeds.destroy', $row->bid) }}" method="POST" >
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
{{$breeds->render()}}