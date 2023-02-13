@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- left right -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <div class="card shadow-lg rounded mt-3">
                    <div class="row no-gutters">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3">
                            <img src="{{ asset('web/icon-heart.png') }}" class="img-fluid p-3" alt="...">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-9">
                            <div class="card-body">
                                <h5 class="card-title">Register Talent</h5>
                                <hr>
                                <p>Coba Pilih ini <a href="{{ route('talent.register') }}" class="card-text">Daftar Talent Baru.</a></p>
                                <p class="card-text"><small class="text-muted">Versi 1.1.1</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <div class="card shadow-lg rounded mt-5">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3">
                            <img src="{{ asset('web/icon-client.png') }}" class="p-3" alt="...">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-9">
                            <div class="card-body">
                                <h5 class="card-title">Register Client</h5>
                                <hr>
                                <p>Coba Pilih ini <a href="{{ route('client.register') }}" class="card-text">Daftar Client Baru.</a></p>
                                <p class="card-text"><small class="text-muted">Versi 1.1.1</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- right left -->
        <!-- <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card shadow-lg rounded mt-5">
                    <div class="row no-gutters">
                        
                        <div class="col-8 col-sm-8 col-md-8 col-lg-9">
                            <div class="card-body p-5">
                                <h5 class="card-title">Register Talent</h5>
                                <hr>
                                <p>Coba Pilih ini <a href="#" class="card-text">Daftar Talent Baru.</a></p>
                                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                            </div>
                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-3">
                            <img src="https://placeimg.com/150/150/nature" class="p-5" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row justify-content-center mt-4">
            <div class="col-6 col-sm-6 col-md-5">
                <div class="card">
                    <div class="card-header text-white bg-uwu">Register Talent</div>
                    <div class="card-body shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="links">
                            <a href="{{ route('talent.register') }}">Link Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-5">
                <div class="card">
                    <div class="card-header text-white bg-uwu">Register Talent</div>
                    <div class="card-body shadow-lg rounded">
                        <div class="links">
                            <a href="{{ route('talent.register') }}">Link Daftar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://placeimg.com/150/150/nature" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tutorial Card Bootstrap 4</h5>
                                <p class="card-text">Tutorial cara membuat card vertikal.</p>
                                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->

        <!-- <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-10">
                <div class="card shadow-lg rounde">
                    <div class="card-header text-white bg-uwu">Register Client</div>
                    <div class="card-body">
                        <div class="links">
                            <a href="{{ route('client.register') }}">Link Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- membuat menu card -->
        <!-- <div class="row justify-content-center mt-4">
            <div class="col-4 col-sm-4 col-md-3">
                <div class="card shadow-lg rounde mt-4">
                    <div class="card-header bg-uwu text-white"></div>
                    <div class="card-body">
                        <a href="#">
                            <img src="https://placeimg.com/150/150/nature" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3">
                <div class="card mt-4">
                    <div class="card-header bg-uwu text-white"></div>
                    <div class="card-body">
                        <a href="#">
                            <img src="https://placeimg.com/150/150/nature" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3">
                <div class="card mt-4">
                    <div class="card-header bg-uwu text-white"></div>
                    <div class="card-body">
                        <a href="#">
                            <img src="https://placeimg.com/150/150/nature" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
@endsection

@section('main-old')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Selamat Datang Nihon Uwu</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        NIHON UWU !
                    </div>

                    <div class="links">
                        <a href="#">Register Talent</a>
                        <a href="#">Register Client</a>
                    </div>
                </div>
            </div>
        </body>
    </html>
@endsection
