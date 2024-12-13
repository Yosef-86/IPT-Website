<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Laravel System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <!-- Logo Section -->
    <div class="navbar-brand d-flex">
    <img src="{{ asset('assets/logo.jpg') }}" alt="Logo" class="img-fluid rounded " style="width: 50px;">
    </div>
    
    <!-- Navbar Toggler (For mobile view) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Navbar Content -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <!-- Left Side (Logo) -->
      <div class="d-flex">
        <span class="text-white h1">Eastwoods Professional College of Science and Technology</span>
      </div>
      
      <!-- Right Side (h1 tag) -->
      <div class="d-flex gap-2">
        <a href="/index" class="btn btn-primary">Home</a>
        <a href="/about" class="btn btn-primary">About</a>
        <a href="/program" class="btn btn-primary">Program</a>
        <a href="/admission" class="btn btn-primary">Admission</a>
        <a href="/linkage" class="btn btn-primary">Linkage</a>
        <a href="/contact" class="btn btn-primary">Contact</a>
        <a href="login" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
  <div class="bg-success"></div>
</nav>


{{$slot}}  


<script src="{{ asset('js/script.js') }}"></script>
<x-footer />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>