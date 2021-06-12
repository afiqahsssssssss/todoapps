@extends('layouts.master')
@section('navbar')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
<br />
<h3 class="display-5 text-center">Update Homework Details</h3>

@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    <br />
@endif

<form method="post" action="{{ route('homeworks.update', $homeworks->task_id) }}">
    @method('PATCH')
    @csrf
    <div class="form-group">
    <label for="task_name">Name</label>
    <input type="text" class="form-control" name="task_name"/>
    </div>
    <div class="text-center">
    <a href="{{ route('homeworks.index')}}" class="btn btnprimary">Return</a>&nbsp;&nbsp;
    <button type="submit" class="btn btnprimary">Update</button>
    </div>
</form>
</div>
</div>
@endsection
@section('footer')