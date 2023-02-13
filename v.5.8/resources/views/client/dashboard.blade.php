        <div class="row justify-content-center mt-4">
            <div class="col-6 col-sm-3 col-md-2">
                <div class="card shadow-lg rounde mt-4">
                    <div class="card-header bg-uwu text-white">Talent</div>
                    <div class="card-body">
                        <a href="{{ route('client.talent.index') }}">
                            <img src="{{ asset('web/icon-heart.png') }}" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-2">
                <div class="card shadow-lg rounde mt-4">
                    <div class="card-header bg-uwu text-white">Promo</div>
                    <div class="card-body">
                        <a href="{{ route('client.promo.service') }}">
                            <img src="{{ asset('web/icon-promo.png') }}" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-2">
                <div class="card shadow-lg rounde mt-4">
                    <div class="card-header bg-uwu text-white">Order</div>
                    <div class="card-body">
                        <a href="{{ route('client.rent.create') }}">
                            <img src="{{ asset('web/icon-client.png') }}" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-2">
                <div class="card shadow-lg rounde mt-4">
                    <div class="card-header bg-uwu text-white">CS</div>
                    <div class="card-body">
                        <a href="{{ route('client.customer.service') }}">
                            <img src="{{ asset('web/icon-cs.png') }}" class="w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--  form profile -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="nav nav-tabs" id="nav-tab">
                        <a class="nav-item nav-link active" id="nav-profil-tab" data-toggle="tab" href="#nav-home" role="tab">Profil</a>
                        <!-- <a class="nav-item nav-link" id="nav-registrasi-tab" data-toggle="tab" href="#nav-registrasi" role="tab">Registrasi</a>
                        <a class="nav-item nav-link" id="nav-dompet-tab" data-toggle="tab" href="#nav-dompet" role="tab">Dompet</a>
                        <a class="nav-item nav-link" id="nav-riwayat-tab" data-toggle="tab" href="#nav-riwayat" role="tab">Riwayat</a> -->
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- untuk label -->
                            <div class="tab-pane fade {{ $errors->isEmpty() ? 'show active' : '' }}" id="nav-home" role="tabpanel">
                            
                                <h4>SELAMAT DATANG,</h4>
                                <p>Profil akun nihon uwu </p>
                                @php
                                    $var = Auth::user()->client;
                                @endphp
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-info">Nickname : {{ $var->nickname != NULL ? $var->nickname : "belum ada" }} </li>
                                    <li class="list-group-item list-group-item-info">Email : {{ Auth::user()->email != NULL ? Auth::user()->email : "belum ada" }} </li>
                                    <li class="list-group-item list-group-item-info">Status : {{ $var->status != NULL ? $var->status : "belum ada" }} </li>
                                    
                                    <!-- <li class="list-group-item list-group-item-info">Tanggal Lahir : {{ $var->birthdate != NULL ? date('d M Y ', strtotime($var->birthdate)) : "belum ada" }} </li> -->
                                    <!-- <li class="list-group-item list-group-item-info">Biodata : {{ $var->short_description != NULL ? $var->short_description : "belum ada" }} </li> -->
                                    <!-- <li class="list-group-item list-group-item-info">No WA : {{ $var != NULL ? Auth::user()->client->number_wa : "belum ada" }} </li> -->
                                    <!-- <li class="list-group-item list-group-item-info">No Rek : {{ $var != NULL ? "Hi" : "belum ada" }} </li>
                                    <li class="list-group-item list-group-item-info">Photo Profile : </li>
                                    <li class="list-group-item list-group-item-info">Nickname : </li>
                                    <li class="list-group-item list-group-item-info">Biodata : </li>
                                    <li class="list-group-item list-group-item-info">Alamat : </li> -->
                                </ul>
                            </div>
                            <!-- untuk registrasi -->
                            <!-- <div class="tab-pane fade {{ $errors->isEmpty() ? '' : 'show active' }}" id="nav-registrasi" role="tabpanel">
                                <form method="POST" action="{{ route('talent.register.profile',[Auth::user()->client->id]) }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nickname" class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

                                        <div class="col-md-8">
                                            <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ Auth::user()->client->nickname }}" required autocomplete="nickname" autofocus>

                                            @error('nickname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-2">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                            <!-- untuk dompet -->
                            <!-- <div class="tab-pane fade" id="nav-dompet" role="tabpanel">
                            
                                <h4>Dompet,</h4>
                                <p>List Uwu Coin</p>
                                @php
                                    $var = Auth::user()->client;
                                @endphp
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">30 UC = Rp.4.300</li>
                                    <li class="list-group-item list-group-item-success">105 UC = Rp.15.000</li>
                                    <li class="list-group-item list-group-item-success">203 UC = Rp.29.000</li>
                                    <li class="list-group-item list-group-item-success">301 UC = Rp.43.000</li>
                                    <li class="list-group-item list-group-item-success">525 UC = Rp.75.000</li>
                                    <li class="list-group-item list-group-item-success">1043 UC = Rp.149.000</li>
                                    <li class="list-group-item list-group-item-success">2093 UC = Rp.229.000</li>
                                    <li class="list-group-item list-group-item-success">4193 UC = Rp.599.000</li>
                                </ul>
                            </div> -->
                            <!-- untuk riwayat -->
                            <!-- <div class="tab-pane fade" id="nav-riwayat" role="tabpanel">
                            
                                <h4>Riwayat,</h4>
                                <div class="table-responsive">
                                    <p>Komplain</p>
                                    <table class="table table-bordered">
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

                                <div class="table-responsive">
                                    <p>Rating</p>
                                    <table class="table table-bordered">
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

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card shadow-lg rounded mt-5">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3">
                            <img src="https://placeimg.com/150/150/nature" class="p-3" alt="...">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-9">
                            <div class="card-body">
                                <h5 class="card-title">Nana</h5>
                                <hr>
                                <p>Rental Sekarang <a href="{{ route('talent.register') }}" class="card-text">Klik Disini.</a></p>
                                <p class="card-text"><small class="text-muted">Rating 5 / 5 </small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Info Client</div>

                    <div class="card-body">
                        <h5>Mohon dilengkapi biodatanya</h5>
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
        </div> -->