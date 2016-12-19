@extends('layouts.app')

@section('content')
<h1>All System Administrators</h1>
<table class="table table-striped">
   <tr>
       <th>Name</th>
       <th>Phone</th>
       <th>Email</th>
       <th>Status</th>
   </tr>
@foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->email}}</td>
    @if($user->password == Null)
    <td>Account Not activated</td>
    @else
    <td>Active</td>
    @endif
    
</tr>

@endforeach
</table>
@endsection