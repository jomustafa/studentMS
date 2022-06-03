<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enroll new Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @extends('layouts.master')

<div class = "card">
<div class = "card-body">
    @if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('students.store')}}" method = "POST">
@csrf
    <div class = "form-group">
        <label for = "name">Student Name</label>
        <input type = "text" name = "name"  id = "name" value = "{{old('name')}}" placeholder = "First Name" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "lastName">Student Last Name</label>
        <input type = "text" name = "lastName"  placeholder="Last Name" id = "lastName" value = "{{old('lastName')}}" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "age">Student Age</label>
        <input type = "text" name = "age" id = "age" value = "{{old('age')}}"  placeholder = "Age" class = "form-control">
    </div>

    <div class = "form-group">
    <label for = "gender">Student Gender</label>
    <select name = "gender" placeholder="Male or Female" id = "age" value = "{{old('gender')}}" class = "form-control">
        <option value= "" disabled selected hidden>Select Gender</option>
        <option value = 'male'>Male</option>
        <option value = 'female'>Female</option>
        <option value = 'unidentifies'>Unidentified</option>
    </select>
    </div>

    <div class = "form-group">
        <label for = "levelOfStudies">Level Of Studies</label>
        <select  name = "levelOfStudies" id = "levelOfStudies" placeholder= "Undergraduate or Postgraduate" value = "{{old('levelOfStudies')}}" class = "form-control">
        <option value= "" disabled selected hidden>Choose Level</option>
        <option value = 'undergraduate'>Undergraduate</option>
        <option value = 'postgraduate'>Postgraduate</option>
    </select>
    </div>

    <div class = "form-group">
        <label for = "yearOfStudies">Year Of Studies</label>
        <select name = "yearOfStudies" id = "yearOfStudies" placeholder= "1" value = "{{old('yearOfStudies')}}" class = "form-control">
        <option value= "" disabled selected hidden>Choose Year</option>
        <option value= '1'>First</option>
        <option value = '2'>Second</option>
        <option value = '3'>Third</option>
    </select>
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

    <div class = "form-group">
    <label for = "scholarship">Scholarship Holder</label>
    <select name = "scholarship" id = "scholarship" value = "{{old('scholarship')}}" class = "form-control">
        <option value= "" disabled selected hidden>Choose Type of Scholarship</option>
        <option value = '30percent'>30% Percent</option>
        <option value = '50percent'>50% Percent</option>
        <option value = '100percent'>100% Percent/ Full Scholarship</option>
    </select>
    </div>

    <div class = "form-group">
    <label for = "part_timeStudent">Part-time Student</label>
    <select name = "part_timeStudent" id = "part_timeStudent" value = "{{old('part_timeStudent')}}" class = "form-control">
    <option value= "" disabled selected hidden>Choose options</option>
        <option value = '0'>Yes</option>
        <option value = '1'>No</option>
    </select>
    </div>
    <button class = "btn btn btn-primary  my-3  mb-1 ">Enroll Student</button>
</form> 
</div>
</div>
</div>
  </div> 
</div>

  
</x-app-layout>