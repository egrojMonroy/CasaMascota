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
        <div class="form-group" align="right">
            <div class="col-lg-10">
                <button type="button" name="add" id="add" class="btn btn-success">Add diseases</button>
            </div>
        </div>
        <div  id="group">
        @foreach($diseases_name as $d)
            <div class="form-group" id="smallgroup1">
                <label for="tipo_res" class="col-lg-2 control-label">Disease</label>
                <div class="col-lg-4">
                    <select class="form-control" name="tipo_dis[]">
                        @foreach($diseases as $disease)
                            @if($disease->name == $d->name)
                                <option value="{{$disease->id}}" selected>{{$disease->name}}</option>
                            @else
                                <option value="{{$disease->id}}">{{$disease->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button class ="delete_button" type="button" name="remove" id="1" class="btn btn-danger">Delete</button>
            </div>

        @endforeach
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
@endif




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var i=2;
        $('#add').click(function () {
            $('#group').append(
                '<div class="form-group" id="smallgroup'+i+'">'+
                '<label for="tipo_res" class="col-lg-2 control-label">Disease</label>'+
                '<div class="col-lg-4">'+
                '<select class="form-control" name="tipo_dis[]">'+
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
