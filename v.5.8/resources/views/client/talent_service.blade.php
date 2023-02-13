@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <form action="{{ route('client.talent.schedule', [$talentId,'online-date']) }}" method="get">
                        @csrf
                        <div class="card-body">
                            <select class="form-control" name="servicetalent_id" id="exampleFormControlSelect1">
                                @foreach($list_serviceTalent as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_service }} - Rp.{{ number_format ($data->price_service) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success float-right m-3" type="submit">
                                Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection