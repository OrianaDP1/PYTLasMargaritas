@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<!-- Hero -->
<div class="hero text-center text-white d-flex align-items-center" style="background:url('/images/imagen0.jpg') center/cover; height:400px;">
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
      @foreach (['dept1.jpg', 'dept2.jpg', 'dept3.jpg'] as $dept)
      <div class="col-md-4">
        <div class="card">
          <img src="/images/{{ $dept }}" class="card-img-top" alt="Department">
          <div class="card-body text-center">
            <h5 class="card-title">$300.00</h5>
            <a href="{{ route('plan') }}" class="btn btn-warning">Reserve</a>
          </div>
        </div>
      </div>
      @endforeach
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
    <div class="card mb-3 p-3">
      <h5>Emilia Perez M.</h5>
      <p>★★★★★</p>
      <p>“Best vacation ever, totally recommended.”</p>
    </div>
    <div class="card mb-3 p-3">
      <h5>Emilia Perez M.</h5>
      <p>★★★★★</p>
      <p>“Best vacation ever, totally recommended.”</p>
    </div>
  </div>
</section>
@endsection
 