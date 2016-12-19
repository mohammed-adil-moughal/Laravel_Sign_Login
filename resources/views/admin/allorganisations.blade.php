@extends('layouts.app')

@section('content')
<h1>All Organisations</h1>
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Super Admins</th>
    </tr>
    @foreach($organisation as $x)
    <tr>
        <td>{{$x->name}}</td>
        <td>{{$x->address}}</td>
        <td>{{$x->phone}}</td>
        <td><a href="{{url('/getadmins')}}/{{$x->id}}">View</a></td>
    </tr>
    @endforeach
</table>
@stop