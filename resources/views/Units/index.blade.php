@extends('layouts.master')

@section('title', 'Units of Semster')

@section('content')

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
            <th>Edit Unit</th>
           
        </tr>  
        @foreach($units as $unit)
        <tr>
            <td>{{$unit->id}}</td>
            <td>{{$unit->name}}</td>
            <td>{{$unit->unitCode}}</td>
            <td>{{$unit->credits}}</td>
            <td>{{$unit->lecturer}}</td>
            <td>
            
            <a href = "{{route('units.edit',['unit' => $unit->id])}}" class = "btn btn-sm btn-primary">Edit</a>
            <a href = "{{route('units.destroy',['unit' => $unit->id])}}" class = "btn btn-sm btn-primary">Delete</a>
            </td>
            

        </tr>  
        @endforeach
    </table>
@else
<div class = "aler aler-info">
    No existing units!
</div>
@endif
@endsection