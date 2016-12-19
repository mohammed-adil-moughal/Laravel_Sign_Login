@extends('layouts.app')

@section('content')
<h1>Super Admins  </h1>
<a href="{{url('/addsuperadmin')}}">Add admin </a>
<table class="table table-responsive">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Title</th>
        <th>Status</th>
    </tr>
    @foreach($admins as $x)
    <tr>
        <td>{{$x->name}}</td>
        <td>{{$x->title}}</td>
        <td>{{$x->email}}</td>
        @if($x->password==Null)
        
        <td>INACTIVE</td>
        @else
        <td>Active</td>
        @endif
            
    </tr>
    @endforeach
</table>
@stop