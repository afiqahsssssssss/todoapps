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
<h3 class="display-5 text-center">Our Homework List</h3>
<table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Task Name</th>
<th colspan="2" class="text-center">Actions</th>
</tr>
</thead>

<tbody>
@foreach($homeworks as $count => $homework)
    <tr>
    <td>{{++$count}}</td>
    <td><a href="{{ route('homeworks.show',$homework->task_id)}}">{{$homework->task_name}} </a></td>
    <td class="text-center">
    <a href="{{ route('homeworks.edit',$homework->task_id)}}" class="btn btnprimarybtn-block">Edit</a>
    </td>
    <td class="text-center">
    <form action="{{ route('homeworks.destroy', $homework->task_id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btnblock"type="submit">Delete</button>
    </form>
    </td>
    </tr>
@endforeach
</tbody>
</table>

<div class="text-center">
<a style="margin: 19px;" href="{{ route('homeworks.create')}}" class="btn btnprimary">New Homework Details</a>
</div>
<div>
</div>
@endsection

