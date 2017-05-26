@if(isset($edit2))
    @if(session()->has('errormsj'))
        <div class="alert alert-danger">Old password incorrect</div>
    @endif
    <form class="form-horizontal" role="form" method="GET" action="/update/{{$users->id}}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="name" value="{{ $users->name }}" required>
                @if($errors->has('name'))
                    <span style="color:red;">{{ $errors->all('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Last name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="last_name" value="{{ $users->last_name }}" required>
                @if($errors->has('last_name'))
                    <span style="color:red;">{{ $errors->all('last_name') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Email </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="email" value="{{ $users->email }}" required>
                @if($errors->has('email'))
                    <span style="color:red;">{{ $errors->all('email') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Old Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="old_password" >

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">New Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="new_password" >
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
                            <a  href="/home" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </form>
@endif
