@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }} - Vaccines </div>
                    <div class="panel-body">

                        @if(isset($view))
                            @include('layouts.view_vaccines')
                        @else
                            @if(isset($edit))
                                @include('layouts.edit_vaccines')
                            @else
                                @include('layouts.form_vaccines')
                                @include('layouts.table_vaccines')
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection