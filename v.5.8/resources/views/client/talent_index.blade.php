@extends('layouts.app')

@section('content-old')
    <div class="container">
        
        @foreach($data_talent as $data)
            @if($data->status == 'active')
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="card shadow-lg rounded mt-4">
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-3">
                                <img src="{{ asset('web/talent_nana.jpg') }}" class="p-3 w-100" alt="...">
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-9">
                                <div class="card-body">
                                    <h5 class="card-title">Talent Name : {{ $data->talentname }}</h5>
                                    <hr>
                                    <p>Klik Untuk <a href="{{ route('talent.register') }}" class="card-text">Details.</a></p>
                                    <p class="card-text"><small class="text-muted">Rating 5 / 5 </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

    </div>
@endsection

@section('content')
    <!-- content -->
    <div class="container">
        <div class="row justify-content-center">
            @foreach($data_talent as $data)
                @if($data->status == 'active')
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <!-- custom -->
                    <div class="box p-4 shadow-lg rounded">
                        <!-- <img src="{{ asset('web/'. $data->photo_profile) }}" alt="{{ $data->nickname }}" class="img-fluid" style="height: 180px; object-fit: cover;"> -->
                        <img src="{{ asset('web/talent_default.jpg') }}" alt="{{ $data->nickname }}">
                        <h2 class="mt-4">Nama Talent : {{ $data->nickname }}</h2>
                        <p>Rating : {{ $data->rating }}</p>
                        <a href="{{ route('client.talent.service', [$data->id]) }}" class="btn btn-primary">Order Dating Online</a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection