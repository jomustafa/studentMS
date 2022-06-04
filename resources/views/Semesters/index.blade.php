<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Current Semesters') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')


  <form action = "{{route('semester.index')}}" class="form-inline" method = "GET" role = "search">  
    <nav class="navbar navbar-light bg-light">
    <input  type="search" class="form-control mr-sm-2 mb-2" id = "search" placeholder="Search Semesters" aria-label="search" >
    <button class="btn btn-sm btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </nav> 
  </form>
  
  <a href = "{{route('semester.create')}}" class = "btn btn-primary my-2  mb-2">Add Semester</a>

@if($semesters && count($semesters))
@foreach($semesters as $semester)

@endforeach

<table class = "table table-bordered">
        <tr>
            <th>Semester ID</th>
            <th>Semester Period</th>
            <th>Semester Year</th>
            <th>Academic Level</th>
            <th>Information</th>
        </tr>  
        @foreach($semesters as $semester)
        <tr>
            <td>{{$semester->id}}</td>
            <td>{{$semester->semesterPeriod}}</td>
            <td>{{$semester->year}}</td>
            <td>{{$semester->academicLevel}}</td>
            <td>
                <a href = "{{route('semester.show',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1">View Students</a>
                <a href = "{{route('semester.showUnits',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1">View Units</a>
                <a href = "{{route('semester.edit',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1">Edit</a>
                <a href = "{{route('semester.destroy',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1" onclick="return confirm('Delete Semester?')">Delete</a>
            </td>
        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing semester!
</div>
@endif
</x-app-layout>