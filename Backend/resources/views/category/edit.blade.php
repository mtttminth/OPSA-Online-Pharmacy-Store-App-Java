@extends('layoutframe.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="{{url('category')}}" class="btn-link float-right mb-4">BACK TO CATEGORIES</a>
                <div class="clearfix"></div>
                @include('category._form', ['action' => 'update','title'=>'UPDATE CATEGORY'])
            </div>
        </div>
    </div>
@endsection