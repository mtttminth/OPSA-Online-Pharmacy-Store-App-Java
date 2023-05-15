@extends('layoutframe.layouts')
@section('content')
  <h3 class="mt-3">All Products</h3>
    <div class="row table-responsive-md justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-6 mb-3"> 
        @can('create',\App\Product::class)
            <a class="btn btn-primary b" href="/products/create">+ Add Products +</a>
        @endcan
      </div>
      <div class="table-responsive-md">
        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col">Image_URL</th>
              <th scope="col">Price</th>
              <th scope="col">Type</th>
              <th scope="col">Quantity</th>
          <!--     <th scope="col">Ordered_Qty</th> -->
              <th scope="col">Description</th>
                 @can('create',\App\Product::class)
              <th scope="col">Actions</th>
              @endcan
            </tr>
          </thead>
          <tbody>
            @if(count($products)>0)
            @foreach($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>
                <img src="{{asset('images/'.$product->image)}}" height="100" width="100" class="img-thumnail">
              </td>
              <td>{{Str::limit($product->image_name, $limit = 20)}}</td>
              <td>{{$product->price}}</td>       
              <td>{{$product->category->name}} </td>           
              <td>{{$product->quantity}}</td>
              <td>{{Str::limit($product->description)}}</td>             
              <td>
                @can('create',\App\Product::class)
                <a href="/products/{{$product->id}}/edit" class="btn">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                                              d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                      <path fill-rule="evenodd"
                                              d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                    </svg>
                </a>
                <a href="#" class="btn" onclick="event.preventDefault();
                          swal({
                                title: 'Are you sure?',
                                  text: 'Once deleted, you will not be able to recover related products!',
                                  icon: 'warning',
                                  buttons: true,
                                  dangerMode: true,
                                }).
                          then((ok) => {if(ok)document.getElementById('destroy-form').submit();});
                            ">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd"
                                              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>
                </a>
                @endcan
                <form id="destroy-form" action="{{ route('products.destroy',$product->id) }}"method="POST" class="d-none">
                  @csrf
                  @method("DELETE")
                </form>
              </td>
            </tr>
            @endforeach     
            @else
              <p>No posts found.</p>
            @endif    
          </tbody>
        </table>
      </div>
    </div>
@endsection
@push('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush