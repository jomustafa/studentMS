@extends('layouts.master')

@section('title', 'Semester')

@section('content')

<h4>Students enrolled in: {{ ucfirst($semesters->semesterPeriod)}}-{{$semesters->year}}</h4>


 @if($semesters->students)
<div class = "row my-4">
    @foreach($semesters->students as $student)
    <table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Year of Studies</th>
        </tr>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->yearOfStudies}}</td>
        </tr>    
    </table>    
    @endforeach
</div>    
    @else
    <div class = "aler aler-info">
    No existing student!
    </div>
    @endif
</div>

@endsection