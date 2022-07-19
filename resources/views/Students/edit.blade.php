 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @extends('layouts.master')

<h4> {{ucfirst($student->name)}} {{$student->lastName}}</h4>

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

    <!-- <div class = "form-group">
       <a href = "{{route('students.destroy', ['student' => $student->id])}}" class = "btn btn-sm btn-link " onclick = "return confirm ('Delete Student?');"></a>
    </div> -->
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

    <button class = "btn btn-sm btn-primary">Edit</button>
</form> 
</div>
</div>
</div>
  </div> 
</div>

  
</x-app-layout>