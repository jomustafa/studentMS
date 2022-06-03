<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Semester') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')

<div class = "card">
<div class = "card-body">
    @if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('semester.store')}}" method = "POST">
@csrf
    <div class = "form-group">
        <label for = "semesterPeriod">Semester Period:</label>
        <input type = "text" name = "semesterPeriod" placeholder="Fall or Spring" id = "semesterPeriod" value = "{{old('semesterPeriod')}}" class = "form-control">
   
        <label for = "year">Semester Year:</label>
        <input type = "text" name = "year" placeholder="2021-2022" id = "year" value = "{{old('year')}}" class = "form-control">
    
        <label for = "academicLevel">Belonging Academic Level:</label>
        <input type = "text" name = "academicLevel" placeholder="1" id = "academicLevel" value = "{{old('academicLevel')}}" class = "form-control">
    </div>

    <button class = "btn btn btn-primary  my-3  mb-1 ">Create</button>
</form> 
</div>
</div>
</div>
</div>
</div>
</x-app-layout>