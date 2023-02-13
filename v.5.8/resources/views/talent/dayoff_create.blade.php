@extends('layouts.app')

@section('content-old')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <a href="#">
                            Hari Libur
                        </a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.service.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name_service" class="col-md-4 col-form-label text-md-right">{{ __('name_service') }}</label>

                                <div class="col-md-6">
                                    <input id="name_service" type="text" class="form-control @error('name_service') is-invalid @enderror" name="name_service" value="{{ old('name_service') }}" required autocomplete="name" autofocus>

                                    @error('name_service')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="price_service" class="col-md-4 col-form-label text-md-right">{{ __('price_service') }}</label>

                                <div class="col-md-6">
                                    <input id="price_service" type="text" class="form-control @error('price_service') is-invalid @enderror" name="price_service" value="{{ old('price_service') }}" required autocomplete="name" autofocus>

                                    @error('price_service')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="name" autofocus>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>

                            <!-- <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div> -->

                            <!-- <div class="form-group row">
                                <label for="body_height" class="col-md-4 col-form-label text-md-right">{{ __('body_height') }}</label>

                                <div class="col-md-6">
                                    <input id="body_height" type="text" class="form-control @error('body_height') is-invalid @enderror" name="body_height" value="{{ old('body_height') }}" required autocomplete="name" autofocus>

                                    @error('body_height')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div> -->

                            <!-- <div class="form-group row">
                                <label for="number_wa" class="col-md-4 col-form-label text-md-right">{{ __('number_wa') }}</label>

                                <div class="col-md-6">
                                    <input id="number_wa" type="text" class="form-control @error('number_wa') is-invalid @enderror" name="number_wa" value="{{ old('number_wa') }}" required autocomplete="name" autofocus>

                                    @error('number_wa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('birthdate') }}</label>

                                <div class="col-md-6">
                                    <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="name" autofocus>

                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="bank_account" class="col-md-4 col-form-label text-md-right">{{ __('bank_account') }}</label>

                                <div class="col-md-6">
                                    <input id="bank_account" type="text" class="form-control @error('bank_account') is-invalid @enderror" name="bank_account" value="{{ old('bank_account') }}" required autocomplete="name" autofocus>

                                    @error('bank_account')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div> -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Tambah Talent') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form Libur Talent') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('talent.schedule.store', ['day-off']) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="day_off" class="col-md-4 col-form-label text-md-right">{{ __('Hari') }}</label>

                                <div class="col-md-6">
                                    @php

                                    @endphp
                                    <select class="form-control" name="day_off">
                                        @foreach($day as $key => $value)
                                            @if($key != in_array($key, $libur))
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    
                                </div>
                                
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Tambah Hari Libur') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Hari Libur</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Libur</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $no = 1;
                                @endphp
                                @if($listday_off->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($listday_off as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->day_off }}</td>
                                        <td>
                                            <a href="{{ route('talent.schedule.destroy',['day-off', $data->id ]) }}" class="badge badge-pill badge-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Jam Operasinonal</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Libur</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $no = 1;
                                @endphp
                                @if($listday_off->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($listday_off as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->day_off }}</td>
                                        <td>
                                            <a href="{{ route('talent.schedule.destroy',['day-off', $data->id ]) }}" class="badge badge-pill badge-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection