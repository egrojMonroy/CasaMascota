@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} - Lista de Mascotas</div>
                <div class="panel-body">
                    @if(isset($view))
                        @include('layouts.view_pets')
                    @else
                        @if(isset($edit))
                            @include('layouts.edit_pets')
                        @else
                            @include('layouts.form_pets')
                            @include('layouts.table_pets')
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection