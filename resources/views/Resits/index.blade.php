<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Current Resits') }}
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
<a href = "{{route('resits.create')}}" class = "btn btn-primary my-2  mb-2">Add New Resit</a>

@if($resits && count($resits))
@foreach($resits as $resit)

@endforeach
<table class = "table table-bordered">
        <tr>
            <th>ID</th>
           
            <th>Created At</th>
            <th>Updated At</th>
           
        </tr>  
        @foreach($resits as $resit)
        <tr>
            <td>{{$resit->id}}</td>
            <td>{{$resit->created_at}}</td>
            <td>{{$resit->updated_at}}</td>
            <td>
            
            <a href = "{{route('resits.destroy',['resit' => $resit->id])}}" class = "btn btn-sm btn-primary my-2 my-sm-1" onclick="return confirm('Delete Resit?')">Delete</a>
            </td>
            

        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing resits!
</div>
@endif
</div>
</div>
</div>  
</x-app-layout>