<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Current Units') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')

<form action = "{{route('semester.index')}}" class="form-inline" method = "GET" role = "search">  
    <nav class="navbar navbar-light bg-light">
    <input  type="search" class="form-control mr-sm-2 mb-2" id = "search" placeholder="Search Units" aria-label="search" >
    <button class="btn btn-sm btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </nav> 
  </form>
<a href = "{{route('units.create')}}" class = "btn btn-primary my-2  mb-2">Add New Unit</a>

@if($units && count($units))
@foreach($units as $unit)

@endforeach
<table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Unit Code</th>
            <th>Credits</th>
            <th>Lecturer</th>
            <th>Information</th>
           
        </tr>  
        @foreach($units as $unit)
        <tr>
            <td>{{$unit->id}}</td>
            <td>{{$unit->name}}</td>
            <td>{{$unit->unitCode}}</td>
            <td>{{$unit->credits}}</td>
            <td>{{$unit->lecturer}}</td>
            <td>
            
            <a href = "{{route('units.edit',['unit' => $unit->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1">Edit</a>
            <a href = "{{route('units.destroy',['unit' => $unit->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1" onclick="return confirm('Delete Unit?')">Delete</a>
            </td>
            

        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing units!
</div>
@endif
</div>
</div>
</div>  
</x-app-layout>