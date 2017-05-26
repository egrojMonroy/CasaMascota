@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> </div>
                    <div class="panel-body">

                        @if(isset($view))
                            @include('layouts.view_users')
                        @else
                            @if(isset($edit2))
                                @include('layouts.edit_own')
                            @else
                                @if(isset($edit))
                                    @include('layouts.edit_users')
                                @else
                                    @include('layouts.form_users')
                                    @include('layouts.table_users')
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection