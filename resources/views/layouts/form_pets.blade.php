

@if(session()->has('msj'))
<div class="alert alert-success">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger">No se guardaron los datos</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ url('pets') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" placeholder="Name" required>
      @if($errors->has('name'))
      <span style="color:red;">{{ $errors->all('name') }}</span>
      @endif
    </div>
  </div>
  <table> 
  	<tr>
  		<td>
  			<div class="form-group">
			    <label for="weight" class="col-lg-1 control-label">Weight (Kilograms))</label>
			    <div class="col-lg-10">
			      <input type="text" class="form-control" name="weight" placeholder="Weight" onkeypress="return soloNumeros(event)" required>
			      @if($errors->has('weight'))
			      <span style="color:red;">{{ $errors->all('weight') }}</span>
			      @endif
			    </div>
			  </div>
  		</td>
  		<td>
  			<div class="form-group">
		    <label for="height" class="col-lg-1 control-label">Height (Centimeters)</label>
		    <div class="col-lg-10">
		      <input type="text" class="form-control" name="height" placeholder="Height" onkeypress="return soloNumeros(event)" required>
		      @if($errors->has('height'))
		      <span style="color:red;">{{ $errors->all('height') }}</span>
		      @endif
		    </div>
		  </div>
  		</td>
  		<td>
  			<div class="form-group">
		    <label for="age" class="col-lg-1 control-label">Age</label>
		    <div class="col-lg-10">
		      <input type="date" class="form-control" name="age" placeholder="Age" required>
		      @if($errors->has('age'))
		      <span style="color:red;">{{ $errors->all('age') }}</span>
		      @endif
		    </div>
		  </div>
  		</td>
  	</tr>
  </table>
  
	<div class="form-group">
		<label for="gender" class="col-lg-1 control-label">Gender</label>
			<div class="col-lg-10">
			<select class="form-control" name="gender" required>
				<option value="1">Male</option>
				<option value="0">Female</option>
			</select>
		</div>
	</div>

	<table>
		<tr>
			<td>
				<div class="form-group">
					<label for="family" class="col-lg-2 control-label">Family</label>
						<div class="col-lg-10">
						<select class="form-control" name="family" id="family" required>
							<option disabled="true" selected="">Choose a Family</option>
							@foreach($families as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
						</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					<label for="breed" class="col-lg-2 control-label"> Breed</label>
						<div class="col-lg-10">
						<select class="form-control" name="breed" id="breed" required>
					        <option value="0" disabled="true" selected="true">Choose a Breed</option>
					    </select>
						</div>
				</div>
			</td>
		</tr>
	</table>
<div class="form-group">
			    <label for="urlimg" class="col-lg-1 control-label">Photo</label>
			    <div class="col-lg-10">
			      <input type="file" name="urlimg" required>
			      @if($errors->has('weight'))
			      <span style="color:red;">{{ $errors->all('weight') }}</span>
			      @endif
			    </div>
			  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Grabar</button>
    </div>
  </div>
  <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#family',function(){
			var id=$(this).val();
			console.log(id);
			var div=$(this).parent();
			var op=" ";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findBreed')!!}',
				data:{'id':id},
				success:function(data){
					op+='<option selected disabled>Choose a Breed</option>';
					for(var i=0;i<data.length;i++){
						op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
					}
					console.log(op);

					$('#breed').html("");
					$('#breed').append(op);
				},
				error:function(){

				}
			});
		});
	});
</script>