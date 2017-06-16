@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('reservations') }}">
{{ csrf_field() }}
    <div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
        <label for="user-id" class="col-lg-2 control-label">Dueño</label>
        <div class="col-lg-10">
        <?php
            $p = session()->all();
            $p = array_chunk($p,1);
            $rol = $p[4][0][0];
            $id  = $p[5][0][0];
        ?>
        @if($rol!=4)
            <select class="form-control" name="user_id" id="user_id"  required>
                <option disabled="true" selected="">Dueño</option>
                @foreach($users as $row)
                    <option value="{{$row->user_id}}">{{$row->name}} {{$row->last_name}}</option>
                @endforeach
            </select>
        @else
            <input type="text" class="form-control" value="{{Auth::user()->name}} {{ Auth::user()->last_name}}" disabled required>
            <input type="hidden" name="user_id" id="user_id" value="{{$id}}">
            <script type="text/javascript">
                window.onload = function(){

                    var id=document.getElementById('user_id');
                    var div=$(this).parent();
                    var op=" ";
                    $.ajax({
                        type:'get',
                        url:'{!!URL::to('findPet')!!}',
                        data:{'id':id.value},
                        success:function(data){
                            op+='<option selected disabled>Elija Mascota</option>';
                            for(var i=0;i<data.length;i++){
                                console.log(id);
                                op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                            }
                            console.log(op);
                            $('#pet').html("");
                            $('#pet').append(op);
                        },
                        error:function(){
                        }
                    });
                }
            </script>
        @endif

        @if($errors->has('user_id'))
            <div class="alert alert-danger">
            {{$errors->first('user_id')}}
            </div>
        @endif
    </div>
  </div>

  <div class="form-group {{ $errors->has('pet') ? ' has-error' : '' }}">
    <label for="pet" class="col-lg-2 control-label"> Mascota</label>
    <div class="col-lg-10">
      <select class="form-control" name="pet" id="pet" required>
        <option value="0" disabled="true" selected="true">Elija Mascota</option>
      </select>
        @if($errors->has('pet'))
            <div class="alert alert-danger">
            {{$errors->first('pet')}}
            </div>
        @endif
    </div>
  </div>

    <div class="form-group {{ $errors->has('tipo_res') ? ' has-error' : '' }}">
        <label for="tipo_res" class="col-lg-2 control-label">Tipo de Reserva</label>
        <div class="col-lg-10">
            <select class="form-control" name="tipo_res" id="tipo_res" required>
                <option disabled="true" selected="">Tipo De Reserva</option>
                <option value="1">Peluqueria</option>
                <option value="0">Consulta</option>
                <option value="2">Cirugia</option>
            </select>
            @if($errors->has('tipo_res'))
                <div class="alert alert-danger">
                    {{$errors->first('tipo_res')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('sala') ? ' has-error' : '' }}">
        <label for="date" class="col-lg-2 control-label">Sala</label>
        <div class="col-lg-10">
            <select class="form-control" name="sala_id" id="sala_id"  required>
                <option disabled="true" selected="">Sala</option>
            </select>
            @if($errors->has('sala'))
                <div class="alert alert-danger">
                    {{$errors->first('sala')}}
                </div>
            @endif
        </div>
    </div>
  <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
    <label for="date" class="col-lg-2 control-label">Fecha</label>
    <div class="col-lg-10">
      <input type="datetime-local" class="form-control" name="date" id="date" step="1800" placeholder="date"  required>
        @if($errors->has('date'))
            <div class="alert alert-danger">
                {{$errors->first('date')}}
            </div>
        @endif
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
                        var id = document.getElementById("user_id");
                        console.log(id);
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

        $('#sala_id').on('change',function(){

            var id=$(this).val();
            console.log(id);
            var div=$(this).parent();
            var op=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findFranja')!!}',
                data:{'id':id},
                success:function(data){
                    var print = $('#date').attr('step');
                    $('#date').attr('step',''+data);
                    console.log('foo'+print);
                },
                error:function(){
                }
            });
        });

        $('#tipo_res').on('change',function () {
            var id=$(this).val();
            console.log(id);
            var div=$(this).parent();
            var op=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findSala')!!}',
                data:{'id':id},
                success:function(data){
                    op+='<option selected disabled>Sala</option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    console.log(op);
                    $('#sala_id').html("");
                    $('#sala_id').append(op);
                },
                error:function(){
                }
            });
        });

    });
</script>