<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Currently Enrolled Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @extends('layouts.master')


            <form action = "{{route('students.index')}}" class="form-inline" method = "GET" role = "search">  
    <nav class="navbar navbar-light bg-light">
    <input  type="search" class="form-control mr-sm-2 mb-2" id = "search" placeholder="Search Students" aria-label="search" >
    <button class="btn btn-sm btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </nav> 
  </form>

            <a href = "{{route('students.create')}}" class = "btn btn-primary my-2  mb-2">Enroll New Student</a>

@if($students && count($students))
@foreach($students as $student)

@endforeach
<table class = "table table-bordered">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Level of Studies</th>
            <th>Year of Studies</th>
            <th>Part Time</th>
            <th>Enrollment Date</th>
            <th>Information</th>
        </tr>  
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->levelOfStudies}}</td>
            <td>{{$student->yearOfStudies}}</td>
            <td>{{$student->part_timeStudent}}</td>
            <td>{{$student->created_at}}</td>
            <td>
                <a href = "{{route('students.edit',['student' => $student->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1">Edit</a>
                <a href = "{{route('students.destroy',['student' => $student->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1"  onclick="return confirm('Delete Student?')">Delete</a>
            </td>

        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing student!
</div>
@endif
  
</x-app-layout>
