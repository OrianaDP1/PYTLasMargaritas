<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las Margaritas - Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold text-warning" href="#">Las Margaritas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Departments</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<div class="hero text-center text-white d-flex align-items-center" style="background:url('hero.jpg') center/cover; height:400px;">
  <div class="container">
    <h1 class="fw-bold">Offers - 15% Discount</h1>
    <p>Book your vacation with us and enjoy nature</p>
  </div>
</div>

<!-- Departments -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Departments</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <img src="dept1.jpg" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">$300.00</h5>
            <a href="plan-selection.html" class="btn btn-warning">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="dept2.jpg" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">$300.00</h5>
            <a href="plan-selection.html" class="btn btn-warning">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="dept3.jpg" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">$300.00</h5>
            <a href="plan-selection.html" class="btn btn-warning">Reserve</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section class="py-5 bg-warning">
  <div class="container">
    <h2>About us</h2>
    <ul>
      <li>Best vacation experience</li>
      <li>Exclusive offers</li>
      <li>Trusted by thousands</li>
    </ul>
  </div>
</section>

<!-- Reviews -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Reviews</h2>
    <div class="card mb-3 p-3">
      <h5>Emilia Perez M.</h5>
      <p>★★★★★</p>
      <p>“Best vacation ever, totally recommended.”</p>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p>© 2025 Las Margaritas. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
