@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Rating Talent') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.rating.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="rating_point" class="col-md-4 col-form-label text-md-right">{{ __('rating_point') }}</label>

                            <div class="col-md-6">
                                <input id="rating_point" type="text" class="form-control @error('rating_point') is-invalid @enderror" name="rating_point" value="{{ old('rating_point') }}" required autocomplete="name" autofocus>

                                @error('rating_point')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="description_rating" class="col-md-4 col-form-label text-md-right">{{ __('description_rating') }}</label>

                            <div class="col-md-6">
                                <input id="description_rating" type="text" class="form-control @error('description_rating') is-invalid @enderror" name="description_rating" value="{{ old('description_rating') }}" required autocomplete="name" autofocus>

                                @error('description_rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

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