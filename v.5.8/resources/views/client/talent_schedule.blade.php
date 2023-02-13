@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <form action="{{ route('client.talent.order', [$getTalent]) }}" method="get">
                        @csrf
                        <input type="hidden" name="serviceId" value="{{$getService}}">
                        <div class="card-body">
                            <label for="date">Tanggal Dating</label>
                            <div class="row">
                                <div class="col">
                                    <input type="date" class="form-control" name="schedule" placeholder="Tanggal Mulai">
                                </div>
                                <div class="col">
                                    <input type="time" class="form-control" name="time"  placeholder="Tanggal Berakhir">
                                </div>
                            </div>
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