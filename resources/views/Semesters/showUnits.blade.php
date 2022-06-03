<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Currently Assigned Units') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')

<h4>Semester: {{ ucfirst($semesters->semesterPeriod)}}-{{$semesters->year}}</h4>

 @if($semesters->units)

    @foreach($semesters->units as $unit)
    <table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Credits</th>
            <th>Code</th>
            <th>Lecturer</th>
            <th>Created At</th>

        </tr>
        <tr>
            <td>{{$unit->id}}</td>
            <td>{{$unit->name}}</td>
            <td>{{$unit->credits}}</td>
            <td>{{$unit->unitCode}}</td>
            <td>{{$unit->lecturer}}</td>
            <td>{{$unit->created_at}}</td>
           
        </tr>    
    </table>    
    @endforeach
  
    @else
    <div class = "aler aler-info">
    No enrolled unit on this semester!
    </div>
    @endif


</div>
</div>
</div>
</x-app-layout>