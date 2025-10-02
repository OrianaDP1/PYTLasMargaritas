<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Las Margaritas - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#1A1A1A;">
  <div class="container">
    <a class="navbar-brand fw-bold text-warning" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <!-- Links centrados -->
      <ul class="navbar-nav mx-auto" color="#FFFFFF">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><b> Home</b></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b> About</b> </a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b> Payments</b> </a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b> Support</b> </a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('plan') }}"><b> Departments</b> </a></li>
      </ul>

      <!-- Botones a la derecha -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="btn btn-light me-2 fw-bold" href="#">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-warning fw-bold text-dark" href="#">Registrarse</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<!-- Content -->
<main>
  @yield('content')
</main>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
  <div class="container text-center">
    <p>© 2025 Las Margaritas. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
