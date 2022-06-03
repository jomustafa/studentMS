<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Management City College') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @extends('layouts.master')

<div class="row">  
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Semesters</h5>
        <p class="card-text">Create Semesters, Delete and Update them!</p>
        <a href="/semesters" class="btn btn-primary">Go to Semesters</a>
      </div>
    </div>
  </div>
  <div class = "col-sm-2"></div>
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Units</h5>
        <p class="card-text">Create Units, Delete and Update them!</p>
        <a href="/units/index" class="btn btn-primary">Go to Units</a> 
      </div>
    </div>
  </div>
</div>
<div class = "row">
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Students</h5>
        <p class="card-text">Enroll Students, Delete and Update the information about them!</p>
        <a href="/students/index" class="btn btn-primary">Go to Students</a>
      </div>
    </div>
</div>
<div class = "col-sm-2"></div>
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Progress Visualizations</h5>
        <p class="card-text">Search for a student and learn about their performance through charts. </p>
        <a href="#" class="btn btn-primary">Go to Progress Visualizations</a>
      </div>
    </div>
  </div> 
</div>

  
</x-app-layout>
