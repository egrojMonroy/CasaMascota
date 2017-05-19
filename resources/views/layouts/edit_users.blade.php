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

                    @if($users->roles[1])
                        <input type="checkbox" name="opcion[]" value="1" checked>Doctor<br>
                    @else
                        <input type="checkbox" name="opcion[]" value="1">Doctor<br>
                    @endif

                    @if($users->roles[2])
                        <input type="checkbox" name="opcion[]" value="2" checked>Peluquero<br>
                    @else
                        <input type="checkbox" name="opcion[]" value="2">Peluquero<br>
                    @endif

                    @if($users->roles[3])
                            <input type="checkbox" name="opcion[]" value="3" checked>Secretario<br>
                    @else <input type="checkbox" name="opcion[]" value="3" >Secretario<br>
                    @endif

                    @if($users->roles[4])<input type="checkbox" name="opcion[]" value="4" checked>Dueño<br>
                     @else <input type="checkbox" name="opcion[]" value="4">Dueño<br>
                    @endif

                    @if($users->roles[5]) <input type="checkbox" name="opcion[]" value="5" checked>Empleado<br>
                    @else <input type="checkbox" name="opcion[]" value="5">Empleado<br>
                    @endif

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