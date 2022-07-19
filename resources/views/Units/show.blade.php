<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assigned Resits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends('layouts.master')

<h4>Unit: {{ ucfirst($units->name)}}-{{$units->unitCode}}</h4>

 @if($units->resits)

    @foreach($units->resits as $resit)
    <table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Created At</th>
            <th>Updated At</th>

        </tr>
        <tr>
            <td>{{$resit->id}}</td>
            <td>{{$resit->crated_at}}</td>
            <td>{{$resit->updated_at}}</td>
           
        </tr>    
    </table>    
    @endforeach
  
    @else
    <div class = "aler aler-info">
    No current resit on this unit!
    </div>
    @endif


</div>
</div>
</div>
</x-app-layout>