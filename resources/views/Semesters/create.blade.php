@extends('layouts.master')

@section('title', 'Create Semester')

@section('content')
<h2> Create new semester</h2>
<div class = "card">
<div class = "card-body">
    @if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('semester.store')}}" method = "POST">
@csrf
    <div class = "form-group">
        <label for = "semesterPeriod">Semester Period:</label>
        <input type = "text" name = "semesterPeriod" placeholder="Fall or Spring" id = "semesterPeriod" value = "{{old('semesterPeriod')}}" class = "form-control">
   
        <label for = "year">Semester Year:</label>
        <input type = "text" name = "year" placeholder="2021-2022" id = "year" value = "{{old('year')}}" class = "form-control">
    
        <label for = "academicLevel">Belonging Academic Level:</label>
        <input type = "text" name = "academicLevel" placeholder="1" id = "academicLevel" value = "{{old('academicLevel')}}" class = "form-control">
    </div>

    <button class = "btn btn-sm btn-primary">Create</button>
</form> 
</div>
</div>
@endsection