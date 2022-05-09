<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Units</title>
    @extends('layouts.head')
    <style>
        svg{
            width:20px;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <div class = "container my-4">  

    @if(count($units))

    <table class = "table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Credits</th>
        </tr>  
        @foreach($units as $unit)
        <tr>
            <td>{{$unit->id}}</td>
            <td>{{$unit->name}}</td>
            <td>{{$unit->unitCode}}</td>
            <td>{{$unit->credits}}</td>
        </tr>  
        @endforeach
    </table>
    {{$units->links()}}
    

    @else
    <div class = "alert alert-info">
        No units available!
    </div>
    @endif



</div>
</body>
</html>