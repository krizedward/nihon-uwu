<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Offline Area-->
        <div class="offline-area-wrapper py-3 d-flex align-items-center justify-content-center">
          <div class="offline-text text-center"><img class="mb-4 px-4" src="img/bg-img/no-internet.png" alt="">
            <h5>No Internet Connection!</h5>
            <p>Seems like you're offline, please check your internet connection. This page doesn't support when you offline!</p><a class="btn btn-primary" href="/">Back Home</a>
          </div>
        </div>
      </div>
    </div>
@endsection