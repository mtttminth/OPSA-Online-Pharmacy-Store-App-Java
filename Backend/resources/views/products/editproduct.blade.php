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

    <h3>Edit Products</h3>
    <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="hidden" value="put">
        <div class="row">
            <div class="form-group">
                <strong>Name:</strong>
                 <input type="text" name="name" class="form-control" value="{{$product->name}}">
             </div>
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Image:</strong>
                 <img src="{{asset('images/'.$product->image)}}" width="50" height="50" class="img-thumnail">
                 <input type="hidden" name="hidden_image" value="{{asset('images/'.$product->image)}}">
                 <input type="file" name="image" class="form-control">
             </div>
        </div>
        <div class="row">
            <div class="form-group">
                <strong>Image Name:</strong>
                 <input type="text" name="image_name" class="form-control" value="{{$product->image_name}}">
             </div>
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Price:</strong>
                 <input type="text" name="price" value="{{$product->price}}" class="form-control">
             </div>        
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Category Name:</strong>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                        @if($product->category_id === $category->id)
                        selected="selected" 
                        @endif
                        >{{$category->name}}</option>
                    @endforeach                   
                </select>
            </div>
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Quantity:</strong>
                 <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control">
             </div>     
        </div> 
        <div class="row">
            <div class="form-group">
                <strong>Description:</strong>
                 <input type="text" name="description" value="{{$product->description}}" class="form-control">
             </div>     
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/products" class="btn btn-primary">Go Back</a>
    </form>  
@endsection

