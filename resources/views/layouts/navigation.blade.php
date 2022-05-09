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
          <a class="nav-link {{Request::is('semesters') ? 'active':''}} " href="/semesters">Semesters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('units') || Request::is('units/create')? 'active':''}}" href="/units">Units</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('students') ? 'active':''}}" href="/students">Students</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- active" aria-current="page" -->