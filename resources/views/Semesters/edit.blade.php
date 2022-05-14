@extends('layouts.master')

@section('title', 'Edit Semester')

@section('content')
<div class = "card">
<div class = "card-body">
@if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('semesters.update', ['semester' => $semester->id])}}" method = "POST">
@method('PUT')
@csrf
    <div class = "form-group">
        <label for = "title">Semester Period:</label>
        <input type = "text" name = "title" id = "title" value = "{{$semester->semesterPeriod}}" class = "form-control">
    </div>

    <button class = "btn btn-sm btn-primary">Update</button>
</form> 
</div>
</div>
@endsection