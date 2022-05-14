@extends('layouts.master')

@section('title', 'Semesters')

@section('content')

@if($semesters && count($semesters))
@foreach($semesters as $semester)

@endforeach
<h2>Semesters</h2>
<table class = "table table-bordered">
        <tr>
            <th>Semester ID</th>
            <th>Semester Period</th>
            <th>Semester Year</th>
            <th>Academic Level</th>
        </tr>  
        @foreach($semesters as $semester)
        <tr>
            <td>{{$semester->id}}</td>
            <td>{{$semester->semesterPeriod}}</td>
            <td>{{$semester->year}}</td>
            <td>{{$semester->academicLevel}}</td>
        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing semester!
</div>
@endif
@endsection