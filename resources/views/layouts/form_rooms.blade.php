@if(session()->has('msj'))
    <div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('rooms') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-lg-2 control-label">Nombre</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="name" name="name" required>
            @if($errors->first('name'))
                <div class="alert alert-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
        <label for="type" class="col-lg-2 control-label">Tipo De Sala</label>
        <div class="col-lg-10">
            <select class="form-control" name="type" id="type"  required>

                <option disabled="true" selected="">Tipo De Sala</option>
                @foreach($type as $row)
                    <option value="{{$row->id}}">{{$row->type}}</option>
                @endforeach
            </select>

            @if($errors->has('type'))
                <div class="alert alert-danger">
                    {{$errors->first('type')}}
                </div>
            @endif
        </div>

    </div>











    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default" id="save">Guardar</button>
        </div>
    </div>
</form>











