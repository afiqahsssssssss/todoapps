<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Task Details</title>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
 <script src="{{ asset('js/app.js') }}" type="text/js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.
12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jqueryui.min.js"></script>

</head>
<body>
 <div class="container">
 @yield('main')
 </div>
 <script>
 $( function() {
 $( ".datepicker" ).datepicker();
 } );
 </script>

</body>
</html>

@extends('layouts.master')
@section('main')
<div class="row">
<div class="col-sm-12">
 @if(session()->get('success'))
 <div class="alert alert-success text-center">
 {{ session()->get('success') }}
 </div>
 @endif
</div>
<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Task</h3>
 <table class="table table-striped">
 <thead>
 <tr>
 <th>No</th>
 <th>Name</th>
 <th>Deadline</th>
 <th colspan="2" class="text-center">Actions</th>
 </tr>
 </thead>
 <tbody>
 @foreach($cats as $count => $cat)
 <tr>
 <td>{{++$count}}</td>
 <td><a href="{{ route('cats.show',$cat->cat_id)}}">{{$cat->name}} </a></td>
 <td>{{$cat->date_of_birth}}</td>
 <td class="text-center">
 <a href="{{ route('cats.edit',$cat->cat_id)}}" class="btn btnprimary btn-block">Edit</a>
 </td>
 <td class="text-center">
 <form action="{{ route('cats.destroy', $cat->cat_id)}}" method="post">
 @csrf
 @method('DELETE')
 <button class="btn btn-danger btnblock" type="submit">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 <div class="text-center">
 <a style="margin: 19px;" href="{{ route('cats.create')}}" class="btn btnprimary">Add New Task</a>
 </div>
<div>
</div>
@endsection