<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel = "stylesheet" href = "css/students.css"> -->
<style>
    .col-4{
    background-color: #F4F4F4;
    height: 600px;
}
.student{
    font-weight:normal;
    margin-top:20px;
}
.col{
   
   margin-bottom: 10px;
}

.secondInputs{
    margin-bottom:10px;
}

    </style>
   @extends('layouts.head')
   <title>Manage Units</title>
</head>
<body>
    @include('layouts.navigation')
    <div class = "row">

    <div class = "col-1 "></div>

    <div class = "col-4">
    <h2 class = "student">Add Unit</h2>
        <p> Fill in unit details below to add new unit.</p>
        <hr>
        <h5 class = "student">Personal Information</h2>

<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Unit name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Unit code">
    </div>
  </div>
  <div class="row">
      <div class = "col">
      <select class="form-control">
    <option>Credits</option>
    </select>
    </div>
    <div class="col">
    <select class="form-control">
    <option>Lecturer</option>
    </select>
    </div>
  </div>
  <hr>
  <button type="submit" class="btn btn-primary">Cancel</button>
  <button type="submit" class="btn btn-primary">Add Unit</button>
</form>

    </div>

    <div class = "col-2"></div>

    <div class = "col-4">
    <h2 class = "student">Search Unit</h2>
        <p> Search unit by Name or Unit Code.</p>
        <hr>
        <form>
    <div class="row">
        <div class = "col">
    <input class="form-control dark bg-dark" type="search" placeholder="Search" aria-label="Search">
</div>
    <div class = "col">
    <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit">Search Unit</button>
</div>
  </div>
</form>
<hr>
<div class = "secondInputs">
<button type="button" class="btn btn-outline-dark">Information</button>
</div>
<div class = "secondInputs">
<button type="button" class="btn btn-outline-dark">Assign to Semester</button>
<hr>
<button type="submit" class="btn btn-primary">Cancel</button>
</div>
    </div>

    <div class = "col-1"></div>

    </div>
</body>
</html>