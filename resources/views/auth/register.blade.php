@extends('layout.app')
@section('title', 'Register')
@section('register', 'active')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-lg bg-transparent">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="green-lumut mb-4 pb-2">Registration Form</h3>

                        <form action="{{ route('PostRegister') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="firstName"
                                            class="form-control  @error('nama_depan') is-invalid @enderror "
                                            name="nama_depan" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>
                                    @error('nama_depan')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="lastName"
                                            class="form-control @error('nama_belakang') is-invalid @enderror "
                                            name="nama_belakang" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                    </div>
                                    @error('nama_belakang')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline datepicker">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="Email" name="email" />
                                        <label for="Email" class="form-label">Email</label>
                                    </div>
                                    @error('email')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1 green-lumut ">Gender: </h6>

                                    <div data-mdb-input-init class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                            name="gender" id="femaleGender" value="F" />
                                        <label class="form-check-label green-lumut " for="femaleGender">Female</label>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div data-mdb-input-init class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                            name="gender" id="maleGender" value="M" />
                                        <label class="form-check-label green-lumut " for="maleGender">Male</label>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="password" id="Password"
                                            class="form-control @error('password') is-invalid @enderror" name="password" />
                                        <label class="form-label" for="Password">Password</label>
                                    </div>
                                    @error('password')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="Alamat"
                                            class="form-control @error('alamat') is-invalid @enderror" name="alamat" />
                                        <label class="form-label" for="Alamat">Alamat</label>
                                    </div>
                                    @error('alamat')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" name="no_telp" id="NoTelp"
                                            class="form-control @error('no_telp') is-invalid @enderror">
                                        <label for="NoTelp" class="form-label">No Telp</label>
                                    </div>
                                    @error('no_telp')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg" data-mdb-ripple-color="#ffffff"
                                        style="background-color:#12372a">Daftar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
