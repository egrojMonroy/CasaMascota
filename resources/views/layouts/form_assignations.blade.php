@if(session()->has('msj'))
    <div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger">No se guardaron los datos</div>
@endif
@if(session()->has('errorselect'))
    <div class="alert alert-danger">No Personal Duplicado</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('assignations') }}">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('room_id') ? ' has-error' : '' }}">
        <label for="room" class="col-lg-2 control-label">Sala</label>
        <div class="col-lg-10">
            <select class="form-control" name="room_id" id="room_id"  required>

                <option disabled="true" selected="">Sala</option>
                @foreach($roomie as $row)
                    <option value="{{$row->room_id_lol}}"> {{$row->name}} <?php if($row->type_room_id==1) {echo("CONSULTORIO");} elseif ($row->type_room_id==2) {echo("QUIROFANO");} elseif ($row->type_room_id==3) {echo("PELUQUERIA");} ?> {{$row->number}}</option>
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
                <div class="form-group" id="smallgroup1">
                    <label for="tipo_res" class="col-lg-2 control-label">Personal</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="user_id[]">
                            @foreach($users as $user)
                            <option value="{{$user->id}}"> {{$user->id}} {{$user->name}} {{$user->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class ="delete_button" type="button" name="remove" id="1" class="btn btn-danger">Delete</button>
                </div>
    </div>


    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
    </div>
</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var i=2;
        $('#add').click(function () {
            $('#group').append(
           '<div class="form-group" id="smallgroup'+i+'">'+
                '<label for="tipo_res" class="col-lg-2 control-label">Personal</label>'+
            '<div class="col-lg-4">'+
                '<select class="form-control" name="user_id[]" id="user_id'+i+'">'+
                    '@foreach($users as $user)<option value="{{$user->id}}"> {{$user->id}} {{$user->name}}{{$user->last_name}}</option>@endforeach'+
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
