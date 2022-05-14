@extends('layouts.master')

@section('title', 'Students of Semster')

@section('content')

@if($students && count($students))
@foreach($students as $student)

@endforeach
<table class = "table table-bordered">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Surname</th>
            <th>Student Level</th>
        </tr>  
        @foreach($students as $student)
        <tr>
            <td>{{$Student->id}}</td>
            <td>{{$Student->name}}</td>
            <td>{{$Student->lastName}}</td>
            <td>{{$Student->levelOfStudies}}</td>
        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing student!
</div>
@endif
@endsection