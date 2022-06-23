<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Semester') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')


<h4> {{ucfirst($semester->semesterPeriod)}}-{{$semester->year}}</h4>

<div class = "card">
<div class = "card-body">
@if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('semester.update', ['semester' => $semester->id])}}" method = "POST">
@method('PUT')
@csrf
    <div class = "form-group">
        <label for = "">Current Period:</label>
        <input readonly type = "text" value = "{{$semester->semesterPeriod}}" class = "form-control">
       
        <label for = "semesterPeriod">New Semester Period:</label>
        <input type = "text" name = "semesterPeriod" id = "semesterPeriod" class = "form-control">

        <label for = "">Current Year:</label>
        <input readonly type = "text" value = "{{$semester->year}}" class = "form-control">

        <label for = "year">New Semester Year:</label>
        <input type = "text" name = "year" id = "year" class = "form-control">
        
        <label for = "">Current Level:</label>
        <input readonly type = "text" value = "{{$semester->academicLevel}}" class = "form-control">

        <label for = "academicLevel">New Academic Level:</label>
        <input type = "integer" name = "academicLevel" id = "academicLevel"  class = "form-control">
    </div>

    <button class = "btn btn-sm btn-primary">Update</button>
</form> 
</div>
</div>
</x-app-layout>