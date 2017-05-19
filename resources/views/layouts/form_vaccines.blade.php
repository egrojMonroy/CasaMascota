@if(session()->has('msj'))
    <div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('vaccines') }}">
    {{ csrf_field() }}

    <div class="form-group" >
        <label for="user-id" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
            <input type="text" id="name" name="name">
        </div>
    </div>
    <br>
    <div class="form-group" align="right">
        <div class="col-lg-10">
            <button type="button" name="add" id="add" class="btn btn-success">Add diseases</button>
        </div>
    </div>

    <br><br>
    <div class="table-responsive" id="group">
                <div class="form-group" id="smallgroup1">
                    <label for="tipo_res" class="col-lg-2 control-label">Tipo de Usuario</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="tipo_rol">
                            @foreach($diseases as $disease)
                            <option value="{{$disease->id}}">{{$disease->name}}</option>
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
                '<label for="tipo_res" class="col-lg-2 control-label">Tipo de Usuario</label>'+
            '<div class="col-lg-4">'+
                '<select class="form-control" name="tipo_rol">'+
                    '@foreach($diseases as $disease)<option value="{{$disease->id}}">{{$disease->name}}</option>@endforeach'+
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
