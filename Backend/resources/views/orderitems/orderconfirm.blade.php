@extends('layoutframe.layouts')
@section('content')
@can('create',\App\OrderItems::class)
 <div class="card mt-3">
       <div class="card-body">
          <h5>Order 01_Mg mg</h5>
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
        <div class="col-md-2 mb-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
@endcan   
@endsection
