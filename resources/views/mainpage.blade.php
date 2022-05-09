<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" href = "css/mainpage.css">
  @extends('layouts.head')
  
</head>
<body>
@include('layouts.navigation')
<div class="row">  
<div class = "col-sm-1"></div> 
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Semesters</h5>
        <p class="card-text">Create Semesters, Delete and Update them!</p>
        <a href="/semesters" class="btn btn-primary">Go to Semesters</a>
      </div>
    </div>
  </div>
  <div class = "col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Units</h5>
        <p class="card-text">Create Units, Delete and Update them!</p>
        <a href="/units/create" class="btn btn-primary">Go to Units</a> 
      </div>
    </div>
  </div>
  <div class = "col-sm-1"></div>
</div>
<div class = "row">
  <div class = "col-sm-1"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Students</h5>
        <p class="card-text">Enroll Students, Delete and Update their information!</p>
        <a href="/students" class="btn btn-primary">Go to Students</a>
      </div>
    </div>
</div>
<div class = "col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Progress Visualizations</h5>
        <p class="card-text">Search for a student and learn about their performance through charts. </p>
        <a href="#" class="btn btn-primary">Go to Progress Visualizations</a>
      </div>
    </div>
  </div> 
  <div class = "col-sm-1"></div>
</div>

<div class="row">
<div class = "col-sm-1"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <!-- <img id = "logo" src = "images/logo_city_mobile.png" alt = "logo">  -->

      </div>
    </div>
  </div>
  <div class = "col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mole</h5>
        <p class="card-text">Redirect to Mole</p>
        <a href="/units" class="btn btn-primary">Go to Mole</a>
        
      </div>
    </div>
  </div>
  <div class = "col-sm-1"></div>
</div>


</body>
</html>