@extends('layouts.app')

@section('title', 'Plan Selection')

@section('content')
<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Reserve a Department</h2>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Your name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Your email">
          </div>
          <div class="mb-3">
            <label class="form-label">Dates</label>
            <input type="date" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Guests</label>
            <input type="number" class="form-control" min="1" max="10">
          </div>
          <button type="submit" class="btn btn-warning">Reserve Now</button>
        </form>
      </div>
      <div class="col-md-6">
        <img src="/images/dept1.jpg" class="img-fluid rounded" alt="Department">
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-warning text-dark text-center">
  <div class="container">
    <h3>Why choose Las Margaritas?</h3>
    <div class="row mt-4">
      <div class="col-md-4">🏖️ Beautiful Locations</div>
      <div class="col-md-4">💳 Easy Booking</div>
      <div class="col-md-4">📞 24/7 Support</div>
    </div>
  </div>
</section>
@endsection
