@extends('layoutframe.layouts')
@section('content')
<div class="row">
  <h3 class="mt-3 mb-3">Edit Products</h3>
    <table class="table">
        <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col" width="10px">Image Name</th>
              <th scope="col">Price</th>
              <th scope="col">Category Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>
                <img src="{{asset('images/'.$product->image)}}" height="100" width="100" class="img-thumnail">
              </td>
              <td width="10px">{{$product->image_name}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->category->name}}</td>   
              <td>{{$product->quantity}}</td>
              <td>
                <a href="/products" class="btn btn-primary">Go Back</a>
                <a href="/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger" onclick="
                                event.preventDefault();
                                swal({
                                    title: 'Are you sure?',
                                    text: 'Once deleted, you will not be able to recover related products!',
                                    icon: 'warning',
                                    buttons: true,
                                    dangerMode: true,
                                }).then((ok) => {if(ok)document.getElementById('destroy-form').submit();});
                            " >Delete
                </a>
                <form id="destroy-form" action="{{ route('products.destroy',$product->id) }}"method="POST" class="d-none">
                  @csrf
                  method("DELETE")
                </form>
              </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@push('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush