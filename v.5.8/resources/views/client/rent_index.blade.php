@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Order Service</div>
                    <form action="{{ route('client.rent.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- <div class="row">
                            <div class="col">
                                <form action="" method="post">
                                    <input type="text" name="text" id="text">
                                </form>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" name="start_date" placeholder="Tanggal Mulai" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" name="end_date"  placeholder="Tanggal Berakhir" aria-label="Last name">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" name="a" placeholder="Nama Talent" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="b" placeholder="Service Talent" aria-label="Last name">
                            </div>
                        </div>
                        
                        <!-- <h5>Halaman Ini Masih Dalam Tahap Pengembangan</h5> -->
                        <!-- <table class="table">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Info</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
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

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">List Order Dating</div>

                    <div class="card-body">
                        <!-- <h5>Halaman Ini Masih Dalam Tahap Pengembangan</h5> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Info</a>
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