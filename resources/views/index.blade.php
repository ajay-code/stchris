@extends('layouts.app') 
@section('content')
    <div class="row main h-100">
        <div class="col-md-5 mb-1 bg-white">
            @include('components.col-1')
        </div>
        <div class="col-md-5 mb-1 bg-white">
            @include('components.col-2')
        </div>
        <div class="col-md-2 mb-1 bg-white">
            @include('components.col-3')
        </div>
    </div>
@endsection