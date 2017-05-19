@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ url('breeds') }}">
{{ csrf_field() }}
<div class="form-group">
          <label for="family" class="col-lg-2 control-label">Family</label>
            <div class="col-lg-10">
            <select class="form-control" name="family" id="family" required>
              <option disabled="true" selected="">Choose a Family</option>
              @foreach($families as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
            </div>
        </div>

  <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" placeholder="Name" required>
      @if($errors->has('nombre'))
      <span style="color:red;">{{ $errors->all('nombre') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>