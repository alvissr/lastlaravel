@extends('layout/main')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/design.css') }}" >
<section class="vh-100 gradient-custom">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Champions
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Champion Tier List</a>
            <a class="dropdown-item" href="#">Item Tier list</a>
            <a class="dropdown-item" href="#">Patch Notes</a>
          </div>
          

         
        </li>
      </ul>
      <div id=button1>
        <a href="/welcome">  
            <button class="btn btn-outline-light btn-lg px-5" type="submit" >Login</button>
          </a>

      </div>
    </div>
  </nav>
        
    
         
      
</section>
@endsection