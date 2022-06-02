@extends('layouts.master')

@section('title', 'Edit Unit Details')

@section('content')
<div class = "card">
<div class = "card-body">
    @if($errors->any())
    <div class = "alert alert-info">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </div>
    @endif
<form action = "{{route('units.update', ['unit' => $unit->id]) }}" method = "POST">
@method('put')
@csrf
    <div class = "form-group">
        <label for = "name">Name</label>
        <input type = "text" name = "name" id = "name" value = "{{$unit->name}}" placeholder = "Unit Name" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "unitCode">Unit Code</label>
        <input type = "text" name = "unitCode" id = "unitCode" value = "{{old('unitCode')}}"  placeholder = "Unit Code" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "credits">Credits</label>
        <input type = "integer" name = "credits" id = "credits" value = "{{old('credits')}}"  placeholder = "Credits" class = "form-control">
    </div>

    <div class = "form-group">
        <label for = "lecturer">Lecturer</label>
        <input type = "text" name = "lecturer" id = "lecturer" value = "{{old('lecturer')}}"  placeholder = "Lecturer" class = "form-control">
    </div>

    <div class = "form-group">
       <a href = "{{route('units.destroy', ['unit' => $unit->id])}}" class = "btn btn-sm btn-link " onclick = "return confirm ('Delete Unit?');"></a>
    </div>

    <button class = "btn btn-sm btn-primary">Edit</button>
</form> 
</div>
</div>
@endsection