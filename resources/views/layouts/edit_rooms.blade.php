@if(isset($edit))
    <form class="form-horizontal" role="form" method="POST" action="{{ route('rooms.update', $roomy->id) }}">
        <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" id="name" name="name" value="{{ $roomy->name }}" required>
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
                <select class="form-control" name="type">
                    @if($roomy->type_room_id==1)
                        <option value="1">CONSULTORIO</option>
                    @endif
                    @if($roomy->type_room_id==2)
                        <option value="0">QUIROFANO</option>
                    @endif
                        @if($roomy->type_room_id==3)
                            <option value="0">PELUQUERIA</option>
                        @endif
                    <option value="1">CONSULTORIO</option>
                    <option value="2">QUIROFANO</option>
                    <option value="3">PELUQUERIA</option>
                </select>

                @if($errors->has('type'))
                    <div class="alert alert-danger">
                        {{$errors->first('type')}}
                    </div>
                @endif
            </div>

        </div>

        <table>
            <tr>
                <td>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10" style="margin-left: 45px;">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10" style="margin-left: 100px;">
                            <a  href="{{route('rooms.index')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </form>




@endif