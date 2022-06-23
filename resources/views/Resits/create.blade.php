<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Resit') }}
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
<form action = "{{route('resits.store')}}" method = "POST">
@csrf

    <div class = "form-group">
        <label for = "unit_id">Belonging Unit</label>
        @if($units && count($units))
        @foreach($units as $unit)
        @endforeach
       
        <select name = "unit_id" id = "unit_id" value = "{{old('unit_id')}}" class = "form-control">
        @foreach($units as $unit)  
        
        <option value= "" disabled selected hidden>Choose Unit</option> 
        <option value = '{{$unit->id}}'>{{$unit->name}} {{$unit->unitCode}}</option>
        
        @endforeach
        
        @else
        <option value = "" disabled selected hidden>No existing units!</option>
        @endif
        </select>
    </div>
    <button class = "btn btn btn-primary  my-3  mb-1 ">Create Resit</button>
</form> 
</div>
</x-app-layout>