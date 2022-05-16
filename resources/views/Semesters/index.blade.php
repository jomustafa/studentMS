
@extends('layouts.master')

@section('title', 'Semesters')

@section('content')
<h2>Semesters</h2> 


  <form action = "{{route('semester.index')}}" class="form-inline" method = "GET" role = "search">  
    <nav class="navbar navbar-light bg-light">
    <input  type="search" class="form-control mr-sm-2 mb-2" id = "search" placeholder="Search Semesters" aria-label="search" >
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </nav> 
  </form>

@if($semesters && count($semesters))
@foreach($semesters as $semester)

@endforeach

<table class = "table table-bordered">
        <tr>
            <th>Semester ID</th>
            <th>Semester Period</th>
            <th>Semester Year</th>
            <th>Academic Level</th>
            <th>Edit Semester</th>
        </tr>  
        @foreach($semesters as $semester)
        <tr>
            <td>{{$semester->id}}</td>
            <td>{{$semester->semesterPeriod}}</td>
            <td>{{$semester->year}}</td>
            <td>{{$semester->academicLevel}}</td>
            <td>
                <a href = "{{route('semester.show',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary">View</a>
                <a href = "{{route('semester.edit',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary">Edit</a>
                <a href = "{{route('semester.destroy',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary">Delete</a>
            </td>
        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing semester!
</div>
@endif
@endsection