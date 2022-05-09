<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchUnits</title>
</head>
<body>
    
</body>
</html>
<div class = "col-md-4">
    
<form method="post" action = "{{url('search')}}">
    @csrf
    <input type="text" name="findSearch" class = "form-control" placeholder = "Search Function">
        <button type="submit" class="btn btn-primary">Search</button>
</form>
    </div>
    <div class = "container my-4">
    @if(count($units))
    <table class = "table table-bordered">
        <tr>
            <th>Unit ID</th>
            <th>Unit Name</th>
            <th>Unit Code</th>
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
</form>
</div>