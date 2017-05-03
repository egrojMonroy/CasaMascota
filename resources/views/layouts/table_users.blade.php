<table class="table table-hover">
	@if(isset($users))
		<thead>
			<th>Name</th>
			<th>Last Name</th>
			<th>Email</th>
		</thead>
		<tbody>
		@foreach($users as $row)
			<tr>
				<td>{{ $row->name }}</td>
				<td>{{ $row->last_name }}</td>
				<td>{{ $row->email}}</td>

			</tr>
		@endforeach
		</tbody>
	@endif
</table>