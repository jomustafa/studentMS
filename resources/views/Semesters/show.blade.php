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

<h4>Semester: {{ ucfirst($semesters->semesterPeriod)}}-{{$semesters->year}}</h4>

 @if($semesters->students)

    @foreach($semesters->students as $student)
    <table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Year of Studies</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->yearOfStudies}}</td>
            <td>                <a href = "{{route('students.edit',['student' => $student->id])}}" class = "btn btn-sm btn-primary">Edit</a></td>
        </tr>    
    </table>    
    @endforeach
  
    @else
    <div class = "aler aler-info">
    No existing student!
    </div>
    @endif


</div>
</div>
</div>
</x-app-layout>