@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Tambah Talent') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.talent.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('fullname') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="name" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="talentname" class="col-md-4 col-form-label text-md-right">{{ __('talentname') }}</label>

                            <div class="col-md-6">
                                <input id="talentname" type="text" class="form-control @error('talentname') is-invalid @enderror" name="talentname" value="{{ old('talentname') }}" required autocomplete="name" autofocus>

                                @error('talentname')
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