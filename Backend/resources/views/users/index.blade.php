@extends('layoutframe.layouts')
@section('content')
  @can('create',\App\User::class)
    <h3 class="mt-3">All Users</h3>
    <div class="row table-responsive-md justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-6 mb-3">
          <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Password</th>
                <th scope="col">Phone_Number</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users)>0)
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->phone_number}}</td>
                <td width="300px">{{$user->address}}</td>
              </tr>
              @endforeach 
              @else
                <p>No users found.</p>
              @endif  
            </tbody>
          </table>
      </div>
    </div>
  @endcan   
@endsection
