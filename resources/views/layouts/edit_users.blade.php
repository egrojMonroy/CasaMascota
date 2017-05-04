@if(isset($edit))
    <form class="form-horizontal" role="form" method="POST" action="{{ route('users.update', $users->last()->bid) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="name" value="{{ $users->last()->bname }}">
                @if($errors->has('name'))
                    <span style="color:red;">{{ $errors->all('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Last name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="name" value="{{ $users->last()->bname }}">
                @if($errors->has('name'))
                    <span style="color:red;">{{ $errors->all('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" name="name" value="{{ $users->last()->bname }}">
                @if($errors->has('name'))
                    <span style="color:red;">{{ $errors->all('name') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="family" class="col-lg-2 control-label">Rol</label>
            <div class="col-lg-10">
                <select class="form-control" name="family" id="family">
                    <option selected="" value="{{$users->last()->fid}}">{{$users->last()->fname}}</option>
                    @foreach($roles as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
@endif