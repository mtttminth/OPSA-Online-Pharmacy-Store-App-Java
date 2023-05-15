@extends('layoutframe.layouts')
@section('title','Create Category')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well">

    <form action="{{route('category.store')}}" method="post">
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach

        @if(session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
        @endif
        <legend>Add a Category</legend>
        {{csrf_field()}}
        
            <div class="form-group">
                <label for="name">Name</label>
                 <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <textarea rows="3" name="description" class="form-control" id="description"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
</div>
</div>
@endsection