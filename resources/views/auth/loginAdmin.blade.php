@extends('layout.appAdmin')
@section('title', 'Login')

@section('content')
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-lg bg-transparent">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="green-lumut mb-4 pb-2">Login Form Admin</h3>
                        <form action="{{ route('admin.PostLogin') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    @include('layout.iconAdmin')
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" name="email" id="Email" autocomplete="off"
                                            class="form-control @error('email') is-invalid @enderror">
                                        <label for="Email" class="form-label">Email</label>
                                    </div>
                                    @error('email')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div data-mdb-input-init class="form-outline mt-4">
                                        <input type="password" name="password" id="Password"
                                            class="form-control @error('password') is-invalid @enderror" autocomplete="off">
                                        <label for="Password" class="form-label">Password</label>
                                    </div>
                                    @error('password')
                                        <span class="text-danger m-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg"
                                            data-mdb-ripple-color="#ffffff" style="background-color:#12372a">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
@endsection
