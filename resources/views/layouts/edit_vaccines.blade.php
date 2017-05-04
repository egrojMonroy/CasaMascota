@if(isset($edit))
    <form class="form-horizontal" role="form" method="POST" action="{{ route('vaccines.update', $vaccine->id) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="name" value="{{ $vaccine->name }}">
                @if($errors->has('name'))
                    <span style="color:red;">{{ $errors->all('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Diseaces</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="diseases" value="{{ $vaccine->diseases }}">
                @if($errors->has('last_name'))
                    <span style="color:red;">{{ $errors->all('last_name') }}</span>
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