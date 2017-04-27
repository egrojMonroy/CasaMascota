@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('reservations') }}">
{{ csrf_field() }}




  <div class="form-group">
    <label for="user-id" class="col-lg-2 control-label">Dueño</label>
    <div class="col-lg-10">
      <select class="form-control" name="user_id" id="user_id">
        <option disabled="true" selected="">Dueño</option>
        @foreach($users as $row)
          <option value="{{$row->id}}">{{$row->name}} {{$row->last_name}}</option>
        @endforeach
      </select>
    </div>
  </div>


  <div class="form-group">
    <label for="pet" class="col-lg-2 control-label"> Mascota</label>
    <div class="col-lg-10">
      <select class="form-control" name="pet" id="pet">
        <option value="0" disabled="true" selected="true">Elija Mascota</option>
      </select>
    </div>
  </div>


  <div class="form-group">
    <label for="date" class="col-lg-2 control-label">Fecha</label>
    <div class="col-lg-10">
      <input type="date" class="form-control" name="date" placeholder="date">
      @if($errors->has('date'))
      <span style="color:red;">{{ $errors->all('date') }}</span>
      @endif
    </div>
  </div>



  <div class="form-group">
    <label for="time" class="col-lg-2 control-label">Hora</label>
    <div class="col-lg-10">
      <input type="time" class="form-control" name="time" placeholder="time">
      @if($errors->has('time'))
        <span style="color:red;">{{ $errors->all('time') }}</span>
      @endif
    </div>
  </div>




  <div class="form-group">
    <label for="tipo_res" class="col-lg-2 control-label">Tipo de Reserva</label>
    <div class="col-lg-10">
      <select class="form-control" name="tipo_res">
        <option disabled="true" selected="">Tipo De Reserva</option>
        <option value="1">Peluqueria</option>
        <option value="0">Consulta</option>
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