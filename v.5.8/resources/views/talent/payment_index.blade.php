@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Payment Order Job Dating</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @if(!$list_payment->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_payment as $data)
                                        @if($data->rent->talent_id == $idTalent)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->rent->service_talent->name_service }}</td>
                                            <td>{{ $data->total_amount }}</td>
                                            <td>
                                                <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                            </td>
                                        </tr>
                                        @endif
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
                    <div class="card-header">Withdraw Uang</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @if(!$list_payment->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_payment as $data)
                                        @if($data->rent->talent_id == $idTalent)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->rent->service_talent->name_service }}</td>
                                            <td>{{ $data->total_amount }}</td>
                                            <td>
                                                <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                            </td>
                                        </tr>
                                        @endif
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