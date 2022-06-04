<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assigned semesters') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')

<h4>Semesters Assigned to Student: {{ ucfirst($students->name)}} {{$students->lastName}}</h4>

 @if($students->semesters)

    @foreach($students->semesters as $semester)
    <table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Period</th>
            <th>Year</th>
            <th>Academic Level </th>
            <th>Information</th>
        </tr>
        <tr>
            <td>{{$semester->id}}</td>
            <td>{{$semester->semesterPeriod}}</td>
            <td>{{$semester->year}}</td>
            <td>{{$semester->academicLevel}}</td>
            <td>                <a href = "{{route('semester.showUnits',['semester' => $semester->id])}}" class = "btn btn-sm btn-primary">View</a></td>
        </tr>    
    </table>    
    @endforeach
  
    @else
    <div class = "aler aler-info">
    No assigned semester!
    </div>
    @endif


</div>
</div>
</div>
</x-app-layout>