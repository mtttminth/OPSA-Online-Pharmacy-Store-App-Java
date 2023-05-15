@extends('layoutframe.layouts')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">{{ __('This is Our Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in !_____________') }}
                     {{ __('You can only do CRUD actions ! ') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
