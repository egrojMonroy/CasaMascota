@if(session()->has('msj'))
    <div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('vaccines') }}">
    {{ csrf_field() }}




    <div class="form-group">
        <label for="user-id" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">

            <input type="text" id="name" name="name">

        </div>
    </div>


    <div class="form-group">
        <label for="pet" class="col-lg-2 control-label">Diseases</label>
        <div class="col-lg-10">
            <input type="text" id="diseases" name="diseases">
        </div>
    </div>




    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
    </div>
</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#user_id',function(){
            var id=$(this).val();
            console.log(id);
            var div=$(this).parent();
            var op=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findPet')!!}',
                data:{'id':id},
                success:function(data){
                    op+='<option selected disabled>Elija Mascota</option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    console.log(op);

                    $('#pet').html("");
                    $('#pet').append(op);
                },
                error:function(){

                }
            });
        });
    });
</script>