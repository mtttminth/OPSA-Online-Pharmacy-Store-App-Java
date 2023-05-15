@extends('layoutframe.layouts')
@section('content')
@can('create',\App\OrderItems::class)
  <h3 class="mt-3">Order Items Posts</h3>
    <div class="row table-responsive-md justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-6">
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">P_id</th>
              <th scope="col">P_name</th>
              <th scope="col">Price</th>
              <th scope="col">Order_Qty</th>    
              <th scope="col">Price*O_Qty</th>
              <th scope="col">Deli_fees</th>
              <th scope="col">Tax</th>
              <th scope="col">Total_amt</th> 
              <th scope="col">User_name</th>
              <th scope="col">User_email</th>      
              <th scope="col">Date</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody> 
            @if(count($oitems)>0)
            @foreach($oitems as $oitem)
            <tr>
              <td>{{$oitem->oid}}</td>
              <td>{{$oitem->product_id}}</td>
              <!-- product_id nk porducts table ka name and price u ml -->
              <td>{{$oitem->name}}</td>
              <td>{{$oitem->price}}</td>
              <td>{{$oitem->order_quantity}}</td>
              <td>{{number_format($oitem->price * $oitem->order_quantity)}}</td>
              <td>{{$oitem->delivery_fee}}</td>
              <td>{{$oitem->tax}}</td>
              <td>{{number_format(($oitem->price * $oitem->order_quantity)+$oitem->delivery_fee + $oitem->tax)}}</td>
              <td>{{$oitem->user_name}}</td>
              <td>{{$oitem->user_email}}</td>
              <!-- date -->
              <td>{{$oitem->created_at}}</td>
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
<!-- 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order 1_ MG MG</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Payment Deatails: 777****12
          <br>Email Address :mgmg@gmail.com</h5>
        <form>
            <div class="table-responsive-md">
             <table class="table" border="1">
              <thead>
                <th colspan="3" class="col">Items</th>
                <th class="col">Qty</th>
                <th class="col">Price</th>
                <th class="col">Total</th>
              </thead>
              <tbody>
                <tr>
                  <td colspan="3">CCC</td>
                  <td>2</td>
                  <td>3000</td>
                  <td>6000</td>
                </tr>
                 <tr>
                  <td colspan="3">CCC</td>
                  <td>1</td>
                  <td>1000</td>
                  <td>1000</td>
                </tr>
                 </tbody>
                <tfoot>
                  <tr>
                    <td colspan="5">Subtotal:</td>
                    <td>7000</td>
                  </tr>
                  <tr>
                    <td colspan="5">Tax:</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <td colspan="5">Delivery Fees:</td>
                    <td>1000</td>
                  </tr>
                  <tr>
                    <td colspan="5">Total:</td>
                    <td>8500</td>
                  </tr>
                </tfoot>
             
            </table>
          </div> 
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
 -->
