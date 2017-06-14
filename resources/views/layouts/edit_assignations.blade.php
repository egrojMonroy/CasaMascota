@if(session()->has('errorselect'))
    <div class="alert alert-danger">No diseases duplicadas</div>
@endif

@if(isset($edit))
    <form class="form-horizontal" role="form" method="POST" action="{{ route('assignations.update', $assignation->id) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <div class="form-group {{ $errors->has('room_id') ? ' has-error' : '' }}">
            <label for="room" class="col-lg-2 control-label">Sala</label>
            <div class="col-lg-10">

                <select class="form-control" name="room_id" id="room_id" DISABLED required>
                    @foreach($rooms as $roo)
                    <option selected="" value="{{$roo->room_id}}" disabled> {{$roo->room_name}} {{$roo->type_room_name}} {{$roo->number}} </option>
                    @endforeach
                  </select>

                @if($errors->has('room_id'))
                    <div class="alert alert-danger">
                        {{$errors->first('room_id')}}
                    </div>
                @endif
            </div>

        </div>

        <br>
        <div class="form-group" align="right">
            <div class="col-lg-10">
                <button type="button" name="add" id="add" class="btn btn-success">Asignar a  otro personal</button>
            </div>
        </div>

        <br><br>
        <div  id="group">
            @foreach($users_name as $d)
                <div class="form-group" id="smallgroup1">
                    <label for="tipo_res" class="col-lg-2 control-label">Disease</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="user_id[]">
                            @foreach($users as $user)
                                @if($user->name == $d->user_name)
                                    <option value="{{$user->id}}" selected>  {{$user->name}} {{$user->last_name}}</option>
                                @else
                                    <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <button class ="delete_button" type="button" name="remove" id="1" class="btn btn-danger">Delete</button>
                </div>

            @endforeach
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
                            <a  href="{{route('assignations.index')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </form>
@endif




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var i=2;
        $('#add').click(function () {
            $('#group').append(
                '<div class="form-group" id="smallgroup'+i+'">'+
                '<label for="tipo_res" class="col-lg-2 control-label">Empleado</label>'+
                '<div class="col-lg-4">'+
                '<select class="form-control" name="user_id[]">'+
                '@foreach($users as $user)<option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>@endforeach'+
                '</select>'+
                '</div>'+
                '<button class ="delete_button" type="button" name="remove" id="'+i+'" class="btn btn-danger">Delete</button>'+
                '</div>'
            )
            i++;
        });
        $(document).on('click', '.delete_button', function(){
            var button_id =$(this).attr("id");
            $('#smallgroup'+button_id+'').remove();
        })
    });

</script>
