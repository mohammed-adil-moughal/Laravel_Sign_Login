@extends('layouts.app')

@section('content')
<h1>Add New System Admin</h1>
<div style="width: 50%;margin-left: 10%">
<form class="form-horizontal"  method="POST" action="{{ url('/regadmin') }}">
         {{ csrf_field() }}
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" placeholder="name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email" placeholder="email">
    </div>
    <div class="form-group">
        <label>Phone Number</label>
        <input class="form-control" type="text" name="phone" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
    
</form>
</div>
@endsection