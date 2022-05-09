<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" href = "/css/students.css">

@extends('layouts.head')
   <title>Student Main Page</title>
</head>
<body>
    @include('layouts.navigation')

    <!-- divi i madh -->
    <div class = "row">

    <div class = "col-1 "></div>

    <div class = "col-4">
      <!-- col4 -->
        <h2 class = "student">Add Student</h2>
        <p> Fill in student details below to enroll new student.</p>
        <hr>
        <h5 class = "student">Personal Information</h2>
    <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <!-- u mshel 1 row mrena formes -->
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Age">
    </div>
    <div class="col">
    <select class="form-control">
    <option>Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>Unidentified</option>
    </select>
    </div>
  </div>
  <!-- u mshel 1 row mrena forme -->
  <hr>
<div class = "secondInputs">
  <div class="form-group">
  <select class="form-control">
    <option>Enrollment Date</option>
    </select>
  </div> 
  </div>
  <div class = "secondInputs">
  <div class="form-group" >
  <select class="form-control">
    <option>Level of Studies</option>
    <option>Undergraduate</option>
    <option>Graduate</option>
    </select>
</div>
</div>
<div class = "secondInputs">
  <div class="form-group" >
    <select class="form-control">
    <option>Year of Studies</option>
    <option>First Level</option>
    <option>Second Level</option>
    <option>Third Level</option>
    </select>
  </div>
  </div>
  <div class = "secondInputs">
  <div class="form-group" >
  <select class="form-control">
    <option>Scholarship</option>
    <option>None</option>
    <option>Fifty percent (50%) Scholarship</option>
    <option>One hundred percent (100%) Scholarship</option>
    </select>
</div>
</div>
  <div class="form-group row">
    <div class="col-sm-7">Register as Part-Time Student</div>
    <div class="col-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          checkbox
        </label>
      </div>
    </div>
  </div>
  <hr>
    
  <button type="submit" class="btn btn-primary">Cancel</button>
  <button type="submit" class="btn btn-primary">Register Student</button>

</form>


<!-- col4 -->
    </div>


    <div class = "col-2" ></div>

    <div class = "col-4 ">
    <h2 class = "student">Search Student</h2>
        <p> Search student by Name, Surname or Registration number.</p>
        <hr>

        <form>
    <div class="row">
        <div class = "col">
    <input class="form-control dark bg-dark" type="search" placeholder="Search" aria-label="Search">
</div>
    <div class = "col">
    <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit">Search Student</button>
</div>
  </div>
</form>
<hr>
<div class = "secondInputs">
<button type="button" class="btn btn-outline-dark">Personal Information</button>
</div>
<div class = "secondInputs">
<button type="button" class="btn btn-outline-dark">Units and Resits Information</button>
</div>
<div class = "secondInputs">
<button type="button" class="btn btn-outline-dark">Assign Semester</button>
<hr>

<button type="submit" class="btn btn-primary">Cancel</button>

</div>

    <div class = "col-1 "></div>

<!-- divi i madh -->
</div>

</body>
</html>