@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Reminder Details</h3>
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

        <form method="post" action="{{ route('reminders.update', $reminders->reminder_id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" class="form-control" name="title" value="{{$reminders->title}}" />
            </div>
            <div class="form-group">
                <label for="exam_time">Time :</label>
                <input type="time" class="form-control" name="exam_time" value="{{$reminders->exam_time}}" />
            </div>
            <div class="form-group">
                <label for="date_of_exam">Date :</label>
                <input id="date" class="form-control datepicker" name="date_of_exam" value="{{$reminders->date_of_exam}}" />
            </div>
            <div class="text-center">
                <a href="{{ route('reminders.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection