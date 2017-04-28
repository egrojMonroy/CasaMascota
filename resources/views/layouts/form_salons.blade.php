@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('salons') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" placeholder="Name">
      @if($errors->has('name'))
      <span style="color:red;">{{ $errors->all('name') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group">
		    <label for="age" class="col-lg-1 control-label">Age</label>
		    <div class="col-lg-10">
		      <input type="date" class="form-control" name="age" value="{{date('Y-m-d')}}" disabled> 
		      @if($errors->has('age'))
		      <span style="color:red;">{{ $errors->all('age') }}</span>
		      @endif
		    </div>
		  </div>
	<div class="form-group">
		<label for="cutType" class="col-lg-2 control-label">Cutting Type</label>
			<div class="col-lg-10">
			<select class="form-control" name="cutType" id="cutType">
				<option disabled="true" selected="">Cutting Type</option>
				@foreach($types as $row)
				<option value="{{$row->id}}">{{$row->name}}, {{$row->cost}}</option>
				@endforeach
			</select>
			</div>
	</div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Grabar</button>
    </div>
  </div>
  <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
</form>