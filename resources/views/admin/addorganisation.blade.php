@extends('layouts.app')

@section('content')
<h1>Add Organisation</h1>
<div style="width: 50%;margin-left: 10%">
<form class="form-horizontal"  method="POST" action="{{ url('/regorganisation') }}">
         {{ csrf_field() }}
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" placeholder="name">
    </div>
   <div class="form-group">
        <label>Address</label>
        <input class="form-control" type="text" name="address" placeholder="email">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input class="form-control" type="email" name="contact_email" placeholder="Contact email">
    </div>
         <div class="form-group">
        <label>Contact Person</label>
        <input class="form-control" type="text" name="contact_person" placeholder="Contact Person Name">
    </div>
    <div class="form-group">
        <label>office Phone Numbers</label>
        <input class="form-control" type="text" name="phone" placeholder="Enter Phone Numbers">
    </div>
    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
    
</form>
</div>
@endsection