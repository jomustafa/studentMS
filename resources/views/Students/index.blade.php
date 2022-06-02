@extends('layouts.master')

@section('title', 'Students of Semster')

@section('content')

@if($students && count($students))
@foreach($students as $student)

@endforeach
<table class = "table table-bordered">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Gender</th>
            <th>Level of Studies</th>
            <th>Year of Studies</th>
            <th>Part Time</th>
            <th>Enrollment Date</th>
            <th>Edit Student</th>
        </tr>  
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->levelOfStudies}}</td>
            <td>{{$student->yearOfStudies}}</td>
            <td>{{$student->part_timeStudent}}</td>
            <td>{{$student->created_at}}</td>
            <td>
              
                <a href = "{{route('students.edit',['student' => $student->id])}}" class = "btn btn-sm btn-primary">Edit</a>
                <a href = "{{route('students.destroy',['student' => $student->id])}}" class = "btn btn-sm btn-primary">Delete</a>
            </td>

        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing student!
</div>
@endif
@endsection