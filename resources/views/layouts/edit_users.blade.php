@if(isset($edit))
    <form class="form-horizontal" role="form" method="POST" action="{{ route('users.update', $users->id) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                @if($errors->has('name'))
                    <span style="color:red;">{{ $errors->all('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Last name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="last_name" value="{{ $users->last_name }}">
                @if($errors->has('last_name'))
                    <span style="color:red;">{{ $errors->all('last_name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" name="password" value="{{ $users->password }}">
                @if($errors->has('password'))
                    <span style="color:red;">{{ $errors->all('password') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Email </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="email" value="{{ $users->email }}">
                @if($errors->has('email'))
                    <span style="color:red;">{{ $errors->all('email') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Rol</label>
            <div class="col-lg-10">

                <select class="form-control" name="rol_id">
                    @if($users->rol_id==1)
                        <option value="1">Doctor</option>
                    @endif
                    @if($users->rol_id==2)
                        <option value="2">Peluquero</option>
                    @endif
                    @if($users->rol_id==3)
                        <option value="3">Secretario</option>
                    @endif
                    @if($users->rol_id==4)
                        <option value="4">Empleado</option>
                    @endif
                    @if($users->rol_id==5)
                        <option value="5">Dueño</option>
                    @endif
                    <option value="1">Doctor</option>
                    <option value="2">Peluquero</option>
                    <option value="3">Secretario</option>
                    <option value="4">Empleado</option>
                    <option value="5">Dueño</option>
                </select>
                @if($errors->has('email'))
                    <span style="color:red;">{{ $errors->all('email') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
@endif