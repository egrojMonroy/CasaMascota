@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} - List of Breeds</div>
                <div class="panel-body">
                    @if(isset($view))
                        @include('layouts.view_breeds')
                    @else
                        @if(isset($edit))
                            @include('layouts.edit_breeds')
                        @else
                            @include('layouts.form_breeds')
                            @include('layouts.table_breeds')
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection