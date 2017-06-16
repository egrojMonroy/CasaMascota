@if(session()->has('errorselect'))
    <div class="alert alert-danger">No diseases duplicadas</div>
@endif

@if(isset($edit))
    <form class="form-horizontal" role="form" method="POST" action="{{ route('assignations.update', $assignation->id) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="room_id" class="col-lg-2 control-label">Sala</label>
            <div class="col-lg-10">
                <select disabled class="form-control" name="room_id"  readonly required>

                    <option selected="" value="{{$assignation->id}}" disabled> {{$assignation->name}} <?php if($assignation->type_room_id==1) {echo("CONSULTORIO");} elseif ($assignation->type_room_id==2) {echo("QUIROFANO");} elseif ($assignation->type_room_id==3) {echo("PELUQUERIA");} ?> {{$assignation->number}} </option>

                </select>

            </div>

        </div>
        <div class="form-group" align="right">
            <div class="col-lg-10">
                <button type="button" name="add" id="add" class="btn btn-success">Asignar a  otro personal</button>
            </div>
        </div>

        <br><br>
        <div  id="group">
            @foreach($users_name as $d)
                <div class="form-group" id="smallgroup1">
                    <label for="user_id[]" class="col-lg-2 control-label">Profesional</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="user_id[]">

                            <option value="{{$d->u_id}}" selected>{{$d->name}} {{$d->last_name}}</option>
                            @foreach($users_name as $d)
                                @foreach($users as $disease)
                                    @if($disease->u_name == $d->name)
                                    @else
                                        <option value="{{$disease->u_id}}">{{$disease->u_name}} {{$disease->last_name}}</option>
                                    @endif
                                @endforeach
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
                '<label for="user_id[]" class="col-lg-2 control-label">Profesional</label>'+
                '<div class="col-lg-4">'+
                '<select class="form-control" name="user_id[]">'+
                '@foreach($users as $user)<option value="{{$user->id}}">{{$user->u_name}} {{$user->last_name}}</option>@endforeach'+
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
