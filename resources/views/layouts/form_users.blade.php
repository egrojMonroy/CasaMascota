@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('users') }}">
    {{ csrf_field() }}




    <div class="form-group">
        <label for="user-id" class="col-lg-2 control-label">Nombre</label>
        <div class="col-lg-10">

                <input type="text" id="name" name="name" required>
            <font size="4" color="red">*</font>
        </div>
    </div>


    <div class="form-group">
        <label for="pet" class="col-lg-2 control-label"> Apellido</label>
        <div class="col-lg-10">
                <input type="text" id="last_name" name="last_name" required>
            <font size="4" color="red">*</font>
        </div>
    </div>


    <div class="form-group">
        <label for="date" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
            <input type="email" id="email" name="email"  required>
            <font size="4" color="red">*</font>
        </div>
    </div>

    <div class="form-group">
        <label for="date" class="col-lg-2 control-label">Password </label>
        <div class="col-lg-10">
                <input type="password" id="password" name="password" required>
            <font size="4" color="red">*</font

        </div>
    </div>
    <br><br>
    <div class="form-group">
        <label for="tipo_res" class="col-lg-2 control-label">Tipo de Usuario</label>
        <div class="col-lg-10">
            <select class="form-control" name="tipo_rol">
                <option value="1">Doctor</option>
                <option value="2">Peluquero</option>
                <option value="3">Secretario</option>
                <option value="4">Dueño</option>
                <option value="5">Empleado</option>
            </select>
        </div>
    </div>





    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
    </div>
</form>

