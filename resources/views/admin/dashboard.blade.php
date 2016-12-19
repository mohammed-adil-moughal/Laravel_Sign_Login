@extends('layouts.app')

@section('Content')
<h1>{{Auth::user()->email}}</h1>
@endsection