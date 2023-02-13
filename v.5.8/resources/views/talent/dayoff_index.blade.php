@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <a href="{{ route('talent.schedule.create',['day-off']) }}">
                            Hari Libur
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>jumlah</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>50 ribu</td>
                                    <td>dating</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Jadwal Libur Talent {{ Auth::user()->talent->nickname }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tanggal Service</th>
                                    <th>Keterangan</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=0;
                                    $total=0;
                                @endphp
                                @while (strtotime($startDate) <= strtotime($endDate))
                                @php
                                    $no++;
                                    $date = $startDate;
                                    $startDate = date('Y-m-d', strtotime("+1 day", strtotime($startDate)));
                                    $hari = date('l', strtotime($date));
                                @endphp
                                    <tr>
                                        <td>{{ date('d M Y', strtotime($date)) }}</td>
                                        @if (in_array($hari, $libur))
                                            <td class="text-danger">Libur</td>
                                        @else
                                            <td>Kerja</td>
                                        @endif
                                        <td class="hidden-480">
                                            <a href="#" class="label label-warning">Details</a>
                                        </td>
                                    </tr>
                                @endwhile
                                <!-- <tr>
                                    <td>asd</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Rating Client</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>jumlah</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>50 ribu</td>
                                    <td>dating</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection