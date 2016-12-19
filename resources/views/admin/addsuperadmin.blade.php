@extends('layouts.app')

@section('content')
<h1>Add Organisation Super Admin</h1>
<div style="width: 50%;margin-left: 10%">
<form class="form-horizontal"  method="POST" action="{{ url('/regsuperadmin') }}">
         {{ csrf_field() }}
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" placeholder="name">
    </div>
   <div class="form-group">
        <label>Address</label>
        <input class="form-control" type="email" name="email" placeholder="email">
    </div>
         
         <div class="form-group">
             <label>Organisation</label>
             <select class="form-control" name="organisation">
                 @foreach($organisation as $x)
                 <option value="{{$x->id}}">{{$x->name}}</option>
                 @endforeach
             </select>
         </div>
   
    <div class="form-group">
        <label> Phone</label>
        <input class="form-control" type="text" name="phone" placeholder="Enter Phone Numbers">
    </div>
    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
    
</form>
</div>
@endsection