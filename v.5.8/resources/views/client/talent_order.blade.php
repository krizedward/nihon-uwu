@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <form action="{{ route('client.rent.store') }}" method="post">
                        @csrf
                        <div class="card-body">

                            <input type="hidden" name="talent_id" value="{{ $getTalent[0]->id }}">
                            <input type="hidden" name="servicetalent_id" value="{{ $getService[0]->id }}">
                            <input type="hidden" name="date" value="{{ $getSchedule }}">
                            <input type="hidden" name="time" value="{{ $getTime }}">
                            
                            <ul class="list-group">
                                <li class="list-group-item list-group-item">Nama Talent : {{ $getTalent[0]->nickname }}</li>
                                <li class="list-group-item list-group-item">Service : {{ $getService[0]->name_service }}</li>
                                <li class="list-group-item list-group-item">Tanggal : {{ $getSchedule }}</li>
                                <li class="list-group-item list-group-item">Waktu : {{ $getTime }}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success float-right m-3" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection