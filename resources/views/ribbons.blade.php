@extends('theme.default')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <div class="ribbon-wrapper">
            <div class="ribbon bg-info">
            Ribbon
            </div>
        </div>
        <h5 class="card-title">Card Ribbons</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/dashboard" class="btn btn-primary">Back</a>
    </div>
</div>
<div class="info-box">
  <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Messages</span>
    <span class="info-box-number">1,410</span>
  </div>
</div>
<div class="info-box bg-success">
  <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Likes</span>
    <span class="info-box-number">41,410</span>
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      70% Increase in 30 Days
    </span>
  </div>
</div>
@endsection