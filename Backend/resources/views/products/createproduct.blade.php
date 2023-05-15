@extends('layoutframe.layouts')
@section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3>Create Post</h3>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="form-group">
                <strong>Name:</strong>
                 <input type="text" name="name" class="form-control">
             </div>
         </div>
        <div class="row">
            <div class="form-group">
                <strong>Image:</strong>
                 <input type="file" name="image" class="form-control">
             </div>
        </div> 

        <div class="row">
            <div class="form-group">
                <strong>Image Name:</strong>
                 <input type="text" name="image_name" class="form-control">
             </div>
        </div> 
    
        <div class="row">
            <div class="form-group">
                <strong>Price:</strong>
                 <input type="text" name="price" class="form-control">
             </div>
           
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Category Name:
                </strong>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
             </div>
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Quantity:</strong>
                 <input type="text" name="quantity" class="form-control">
             </div>  
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Description:</strong>
                 <input type="text" name="description" class="form-control">
             </div>  
        </div>  
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
@endsection

