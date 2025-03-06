@extends('layouts.auth')

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-4 p-6 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box shadow"
                style="position: relative; overflow: hidden;">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/9dd05a0c-1c75-4e76-950e-ce7b08d1ed02/Oluo5B17R5.lottie"
                    background="transparent" speed="1"
                    style="position: absolute; width: 100vmax; height: fit-content; top: 0; left: 0; z-index: 0; object-fit: cover"
                    loop autoplay>
                </dotlottie-player>

                <!-- Konten left box di sini -->

                <div style="position: relative; z-index: 1; width: 100%; height: 100%">
                    <div class="d-flex justify-content-center align-items-center featured-image mb-3">
                        <img src="" class="img-fluid" style="width: 300px" />
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="text-white  fs-2" style="font-family: 'Poppins', monospace; font-weight: bold">
                            Whistleblowing System</p>
                    </div>
                </div>
            </div>

            <!-------------------- ------ Right Box ---------------------------->
            <form method="POST" action="{{ route('login') }}" class="col-md-6 right-box">
                @csrf

                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2></h2>
                        <p></p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                            placeholder="Alamat Email" value="{{ old('email') }}" required autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                            placeholder="Kata Sandi" required />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="formCheck" />
                            <label for="formCheck" class="form-check-label text-secondary"><small>Ingat Saya</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="{{ route('password.request') }}">Lupa Kata Sandi?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
