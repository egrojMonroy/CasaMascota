
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} - Salas</div>
                <div class="panel-body">
                    @if(isset($view))
                        @include('layouts.view_assignations')
                    @else
                        @if(isset($edit))
                            @include('layouts.edit_assignations')
                        @else
                            @include('layouts.form_assignations')
                            @include('layouts.table_assignations')
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
