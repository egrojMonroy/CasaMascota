@if(Auth::user()->rol_id==3)
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} - Salons</div>
                <div class="panel-body">
                    @if(isset($view))
                        
                    @else
                        @if(isset($edit))
                            
                        @else
                            @include('layouts.form_salons')
                            
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@else

@endif