@extends('layoutframe.layouts')
@section('content')
        <h3 class="mt-3">All Categories</h3>  
        <div class="row table-responsive-md justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-6">
                @can('create',\App\Category::class)
                    <a href="{{route('category.create')}}" class="btn btn-primary float-right text-light mb-4"><b>+</b>
                        ADD</a>
                @endcan
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            @can('create',\App\Category::class)
                            <th scope="col">Action</th>
                            @endcan
                        </tr>
                    </thead>
                        @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{Str::limit($category->description)}}</td>

                            @can('create',\App\Category::class)
                            <td>
                                <a href="{{route('category.edit',$category->id)}}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                        <path fill-rule="evenodd"
                                              d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                    </svg>
                                </a>                                
                                <a href="#" onclick="
                                event.preventDefault();
                                swal({
                                    title: 'Are you sure?',
                                    text: 'Once deleted, you will not be able to recover related products!',
                                    icon: 'warning',
                                    buttons: true,
                                    dangerMode: true,
                                }).then((ok) => {if(ok)document.getElementById('destroy-form').submit();});
                                                    ">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd"
                                              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>

                                </a>
                                @endcan

                                <form id="destroy-form" action="{{ route('category.destroy',$category->id) }}"
                                      method="POST" class="d-none">
                                    @csrf
                                    @method("DELETE")
                                </form>                                
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> 
        </div>
@endsection

@push('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush
