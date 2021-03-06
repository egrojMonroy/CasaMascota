@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('users') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="user-id" class="col-lg-2 control-label">Nombre <font size="4" color="red">*</font></label>
        <div class="col-lg-10">
                <input class="form-control" type="text" id="name" name="name" required>
            @if($errors->first('name'))
                <div class="alert alert-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
        <label for="pet" class="col-lg-2 control-label"> Apellido <font size="4" color="red">*</font></label>
        <div class="col-lg-10">
                <input class="form-control" type="text" id="last_name" name="last_name" required>
        </div>
        @if($errors->first('last_name'))
            <div class="alert alert-danger">
                {{$errors->first('last_name')}}
            </div>
        @endif
    </div>


    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="date" class="col-lg-2 control-label">Email <font size="4" color="red">*</font></label>
        <div class="col-lg-10">
            <input class="form-control" type="email" id="email" name="email"  required>
        </div>
        @if($errors->has('email'))
            <div class="alert alert-danger">
                {{$errors->first('email')}}
            </div>
        @endif
    </div>

    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="date" class="col-lg-2 control-label">Password <font size="4" color="red">*</font></label>
        <div class="col-lg-10">
                <input class="form-control" type="password" id="password" name="password" required>
        </div>
        @if($errors->has('password'))
            <div class="alert alert-danger">
                {{$errors->first('password')}}
            </div>
        @endif
    </div>

    <br><br>
    <div class="form-group">
        <label for="tipo_res" class="col-lg-2 control-label">Tipo de Usuario</label>
        <div class="col-lg-10">
            <input type="checkbox" name="opcion[]" value="1">Doctor<br>
            <input type="checkbox" name="opcion[]" value="2">Peluquero<br>
            <input type="checkbox" name="opcion[]" value="3">Secretario<br>
            <input type="checkbox" name="opcion[]" value="4">Dueño<br>
            <input type="checkbox" name="opcion[]" value="5">Cirujano<br>

        </div>
    </div>





    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default" id="save">Save</button>
        </div>
    </div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function validate_form()
    {
        $(':checkbox').click(function() {
            checked = $("input[type=checkbox]:checked").length;
            if(checked==0){

                $( "#save" ).prop( "disabled", true );
            }
            else{
                $( "#save" ).prop( "disabled", false);
            }
        });
        $('#save').click(function() {
            checked = $("input[type=checkbox]:checked").length;
            if(checked==0){
                alert('Seleccione al menos un tipo de usuario ');
                $( "#save" ).prop( "disabled", true );
            }
            else{
                $( "#save" ).prop( "disabled", false);
            }
        });
    });
</script>