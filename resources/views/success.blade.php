@extends('app')
@section('content')

<h1>Zone Added Successfully.</h1>

<a href="{{  URL::previous() }}" type="button" class="btn btn-primary">Add Another Zone</a>

@endsection