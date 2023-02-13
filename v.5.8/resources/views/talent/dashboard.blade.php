<div class="row justify-content-center mt-4">
    <div class="col-6 col-sm-3 col-md-2">
        <div class="card shadow-lg rounde mt-4">
            <div class="card-header bg-uwu text-white">Order</div>
            <div class="card-body">
                <a href="{{ route('talent.rent.index', ['order']) }}">
                    <img src="{{ asset('web/icon-heart.png') }}" class="w-100" alt="...">
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-3 col-md-2">
        <div class="card shadow-lg rounde mt-4">
            <div class="card-header bg-uwu text-white">Review</div>
            <div class="card-body">
                <a href="{{ route('talent.rating.index', ['review'] ) }}">
                    <img src="{{ asset('web/icon-review.png') }}" class="w-100" alt="...">
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-3 col-md-2">
        <div class="card shadow-lg rounde mt-4">
            <div class="card-header bg-uwu text-white">Payment</div>
            <div class="card-body">
                <a href="{{ route('talent.payment.index',['review']) }}">
                    <img src="{{ asset('web/icon-pay.png') }}" class="w-100" alt="...">
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-3 col-md-2">
        <div class="card shadow-lg rounde mt-4">
            <div class="card-header bg-uwu text-white">Jadwal</div>
            <div class="card-body">
                <a href="{{ route('talent.schedule.create',['day-off']) }}">
                    <img src="{{ asset('web/icon-schedule.png') }}" class="w-100" alt="...">
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="col-6 col-sm-3 col-md-2">
        <div class="card shadow-lg rounde mt-4">
            <div class="card-header bg-uwu text-white">Cutomer Service</div>
            <div class="card-body">
                <a href="{{ route('client.customer.service') }}">
                    <img src="{{ asset('web/icon-cs.png') }}" class="w-100" alt="...">
                </a>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-6 col-sm-3 col-md-2">
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
            <div class="card-header bg-uwu text-white">Cutomer Service</div>
            <div class="card-body">
                <a href="{{ route('client.customer.service') }}">
                    <img src="{{ asset('web/icon-cs.png') }}" class="w-100" alt="...">
                </a>
            </div>
        </div>
    </div> -->
</div>

<!-- form profile -->
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="nav nav-tabs" id="nav-tab">
                <a class="nav-item nav-link active" id="nav-profil-tab" data-toggle="tab" href="#nav-home" role="tab">Profil</a>
                <a class="nav-item nav-link" id="nav-registrasi-tab" data-toggle="tab" href="#nav-registrasi" role="tab">Registrasi</a>
                <!-- <a class="nav-item nav-link" id="nav-registrasi-tab" data-toggle="tab" href="#nav-card-talent" role="tab">Card Talent</a> -->
            </div>
            <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade {{ $errors->isEmpty() ? 'show active' : '' }}" id="nav-home" role="tabpanel">
                    
                        <h4>SELAMAT DATANG,</h4>
                        <p>Profil akun nihon uwu </p>
                        @php
                            $var = Auth::user()->talent->nickname;
                        @endphp
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">ID : {{ $var != NULL ? Auth::user()->talent->id_account : "belum ada" }} </li>
                            <li class="list-group-item list-group-item-info">Nama Asli : {{ $var != NULL ? Auth::user()->talent->nickname : "belum ada" }} </li>
                            <li class="list-group-item list-group-item-info">Nama Talent : {{ $var != NULL ? Auth::user()->name : "belum ada" }} </li>
                            <li class="list-group-item list-group-item-info">Whatsapp Business : {{ $var != "NULL" ? Auth::user()->talent->number_wa : "belum ada" }} </li>
                            <li class="list-group-item list-group-item-info">Social Media Instagram : {{ $var != NULL ? Auth::user()->talent->talent_bio->sosmed_ig : "belum ada" }} </li>
                            <li class="list-group-item list-group-item-info">Status Akun : {{ $var != NULL ? Auth::user()->talent->status : "belum ada" }} </li>
                            
                            <!-- <li class="list-group-item list-group-item-info">Upload KTP : {{ $var != NULL ? Auth::user()->talent->photo_profile : "belum ada" }} </li> -->
                            <!-- <li class="list-group-item list-group-item-info">No Rek : {{ $var != NULL ? "Hi" : "belum ada" }} </li>
                            <li class="list-group-item list-group-item-info">Photo Profile : </li>
                            <li class="list-group-item list-group-item-info">Nickname : </li>
                            <li class="list-group-item list-group-item-info">Biodata : </li>
                            <li class="list-group-item list-group-item-info">Alamat : </li> -->
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ $errors->isEmpty() ? '' : 'show active' }}" id="nav-registrasi" role="tabpanel">
                        <form method="POST" action="{{ route('talent.register.profile',[Auth::user()->talent->id]) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="fullname" class="col-md-2 col-form-label text-md-right">{{ __('Nama Asli') }}</label>

                                <div class="col-md-8">
                                    <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ Auth::user()->talent->nickname }}" required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nickname" class="col-md-2 col-form-label text-md-right">{{ __('Nama Talent') }}</label>

                                <div class="col-md-8">
                                    <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ Auth::user()->talent->nickname }}" required autocomplete="nickname" autofocus>

                                    @error('nickname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="number_wa" class="col-md-2 col-form-label text-md-right">{{ __('Whatsapp Business') }}</label>

                                <div class="col-md-8">
                                    <input id="number_wa" type="text" class="form-control @error('number_wa') is-invalid @enderror" name="number_wa" value="{{ Auth::user()->talent->number_wa }}" required autocomplete="number_wa" autofocus>

                                    @error('number_wa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sosmed_ig" class="col-md-2 col-form-label text-md-right">{{ __('Social Media Instagram') }}</label>

                                <div class="col-md-8">
                                    <input id="sosmed_ig" type="text" class="form-control @error('sosmed_ig') is-invalid @enderror" name="sosmed_ig" value="{{ Auth::user()->talent->talent_bio->sosmed_ig }}" required autocomplete="sosmed_ig" autofocus>

                                    @error('sosmed_ig')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="number_wa" class="col-md-2 col-form-label text-md-right">{{ __('Upload KTP') }}</label>

                                <div class="col-md-8">
                                    <input id="number_wa" type="text" class="form-control @error('number_wa') is-invalid @enderror" name="number_wa" value="{{ Auth::user()->talent->number_wa }}" required autocomplete="number_wa" autofocus>

                                    @error('number_wa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="tab-pane fade {{ $errors->isEmpty() ? '' : 'show active' }}" id="nav-card-talent" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <div class="card shadow-lg rounded mt-4">
                                    <div class="row">
                                        <div class="col-4 col-sm-4 col-md-4 col-lg-3">
                                            <img src="{{ asset('web/talent_nana.jpg') }}" class="w-100" alt="...">
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-9">
                                            <div class="card-body">
                                                <h5 class="card-title">Talent Name : </h5>
                                                <hr>
                                                <p>Klik Untuk <a href="#" class="card-text">Details.</a></p>
                                                <p class="card-text"><small class="text-muted">Rating 5 / 5 </small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Orderan Client</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>service</th>
                            <th>detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Budi</td>
                            <td>Video Call ( 30 Menit )</td>
                            <td>
                                <a href="#" class="badge badge-pill badge-warning">Info</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>Video Call ( 30 Menit )</td>
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

<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Rating Service</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>Rating</th>
                            <th>detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Budi</td>
                            <td>4.0</td>
                            <td>
                                <a href="#" class="badge badge-pill badge-warning">Info</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>4.0</td>
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

<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Payment</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>200 ribu</td>
                            <td>Success</td>
                            <td>
                                <a href="#" class="badge badge-pill badge-warning">Info</a>
                            </td>
                        </tr>
                        <tr>
                            <td>200 ribu</td>
                            <td>Pending</td>
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

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div> -->
