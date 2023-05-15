@extends('layoutframe.layouts')

@section('content')
<div class="row">
		<h3 class="mt-3 mb-3">Edit Users</h3>
		<table class="table">
  			<thead>
  				<tr>
      				<th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Password</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Address</th>
   				</tr>
 			</thead>
 			<tbody>
   				<tr>
     				<td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
              <td>{{$user->phone_number}}</td>
              <td width="300px">{{$user->address}}</td>
    			</tr>
			</tbody>
		</table>
	</div>
@endsection
