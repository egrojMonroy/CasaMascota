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

                <input type="text" id="name" name="name">

        </div>
    </div>


    <div class="form-group">
        <label for="pet" class="col-lg-2 control-label"> Apellido</label>
        <div class="col-lg-10">
                <input type="text" id="last_name" name="last_name">
        </div>
    </div>


    <div class="form-group">
        <label for="date" class="col-lg-2 control-label">Password </label>
        <div class="col-lg-10">
                <input type="password" id="password" name="password">
        </div>
    </div>






    <div class="form-group">
        <label for="tipo_res" class="col-lg-2 control-label">Tipo de Usuario</label>
        <div class="col-lg-10">
            <select class="form-control" name="tipo_res">
                <option disabled="true" selected="">Tipo De Usuario</option>
                <option value="1">Cliente</option>
                <option value="0">Doctor</option>
                <option value="2">Peluquero</option>
                <option value="3">Empleado</option>
            </select>
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