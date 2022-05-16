@extends('layouts.master')

@section('title', 'Create Unit')

@section('content')
<h2>Create New Unit</h2>

<div class = "card">
<div class = "card-body">
    @if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('units.store')}}" method = "POST">
@csrf
<div class = "form-group">
        <label for = "name">Unit Name</label>
        <input type = "text" name = "name"  id = "name" value = "{{old('name')}}" placeholder = "Unit Name" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "unitCode">Unit Code</label>
        <input type = "text" name = "unitCode"  placeholder="Unit Code" id = "unitCode" value = "{{old('unitCode')}}" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "credits">Credits</label>
        <input type = "number" name = "credits"  placeholder="Credits" id = "credits" value = "{{old('credits')}}" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "semester_id">Enroll Semester</label>
        @if($semesters && count($semesters))
        @foreach($semesters as $semester)
        @endforeach
       
        <select name = "semester_id" id = "semester_id" value = "{{old('semester_id')}}" class = "form-control">
        @foreach($semesters as $semester)  
        
        <option value= "" disabled selected hidden>Choose Semester</option> 
        <option value = '{{$semester->id}}'>{{$semester->semesterPeriod}} {{$semester->year}}</option>
        
        @endforeach
        
        @else
        <option value = "" disabled selected hidden>No existing semesters!</option>
        @endif
        </select>
    </div>
    <button class = "btn btn-sm btn-primary">Create Unit</button>
</form> 
</div>
@endsection