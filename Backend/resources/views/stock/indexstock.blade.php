@extends('layoutframe.layouts')
@section('content')
  @can('create',\App\Stock::class)
    <h3 class="mt-3">All Stock Product</h3>
      <div class="row table-responsive-md justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-6 mb-3"> 
          <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">Product_name</th>
                <th scope="col">Total Qty</th>
                <th scope="col">Ordered Qty</th>
                <th scope="col">Current Qty</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              @if(count($stock)>0)
              @foreach($stock as $s)
              <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->quantity}}</td>
                <td>{{$s->order_quantity}}</td>
                <td>{{number_format(($s->quantity)-($s->order_quantity))}}</td>
                <td>{{$s->created_at}}</td>
              </tr>
              @endforeach 
              @else
                <p>No posts found.</p>
              @endif
            </tbody>
          </table>
        </div>
      </div>
  @endcan
@endsection