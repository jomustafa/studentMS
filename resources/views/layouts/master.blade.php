<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title') | {{env('APP_NAME')}}</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">Home </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{Request::is('/') ? 'active':''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('semester.index') ? 'active':''}} " href="/semesters">Semesters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('units') || Request::is('units/create')? 'active':''}}" href="/units">Units</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('students.index') ? 'active':''}}" href="/students">Students</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class = "container my-4">
    @yield('content')
</div>

<div class = "container my-2">
   <p class = "text-center">
       Copyright & copy: PER PROGRAMER {{date('Y')}}
</p>
</div>

</body>
</html>