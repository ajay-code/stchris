@extends('layouts.app') 
@section('content')
    <div class="row no-gutter main h-100">
        <div class="order-md-2  col-md-5 mb-1 bg-white">
            @include('components.col-2')
        </div>
        <div class="order-md-1 no-padding  col-md-4 mb-1 bg-white">
            @include('components.col-1')
        </div>
        <div class="order-3 no-padding  col-md-3 mb-1 bg-white">
            @include('components.col-3')
        </div>
    </div>
@endsection