@if(session()->has('msj'))
    <div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger">No se guardaron los datos</div>
@endif
@if(session()->has('errorselect'))
    <div class="alert alert-danger">No diseases duplicadas</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('vaccines') }}">
    {{ csrf_field() }}

    <div class="form-group" >
        <label for="user-id" class="col-lg-2 control-label" >Name <font size="4" color="red">*</font></label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="name" name="name" required>
            
            @if($errors->first('name'))
                <div class="alert alert-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>

        </div>

    <br>
    <div class="form-group" align="right">
        <div class="col-lg-10">
            <button type="button" name="add" id="add" class="btn btn-success">Add diseases</button>
        </div>
    </div>

    <br><br>
    <div  id="group">
                <div class="form-group" id="smallgroup1">
                    <label for="tipo_res" class="col-lg-2 control-label">Disease</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="tipo_rol[]">
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
                '<label for="tipo_res" class="col-lg-2 control-label">Disease</label>'+
            '<div class="col-lg-4">'+
                '<select class="form-control" name="tipo_rol[]" id="desease'+i+'">'+
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
