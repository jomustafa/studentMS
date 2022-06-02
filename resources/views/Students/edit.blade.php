@extends('layouts.master')

@section('title', 'Edit Student Details')

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
<form action = "{{route('students.update', ['student' => $student->id]) }}" method = "POST">
@method('put')
@csrf
    <div class = "form-group">
        <label for = "name">Name</label>
        <input type = "text" name = "name" id = "name" value = "{{$student->name}}" placeholder = "First Name" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "lastName">Last Name</label>
        <input type = "text" name = "lastName" id = "lastName" value = "{{old('lastName')}}"  placeholder = "Last Name" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "age">Age</label>
        <input type = "text" name = "age" id = "age" value = "{{old('age')}}"  placeholder = "Age" class = "form-control">
    </div>

    <div class = "form-group">
       <a href = "{{route('students.destroy', ['student' => $student->id])}}" class = "btn btn-sm btn-link " onclick = "return confirm ('Delete Student?');"></a>
    </div>

    <button class = "btn btn-sm btn-primary">Edit</button>
</form> 
</div>
</div>
@endsection