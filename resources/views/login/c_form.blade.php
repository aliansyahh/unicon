<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" method="POST" action="{{ route('login') }}">
                    <h3 class="text-center mb-4">Login</h3>
                    @csrf
                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Ketikkan Alamat Email" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- Form Group (password)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="password">Password</label>
                        <input class="form-control @error('password') @enderror" id="password" type="password" placeholder="Ketikkan Password" required name="password" autocomplete="current-password" />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- Form Group (remember password checkbox)-->
                    <!-- <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Ingat Akun') }}
                            </label>
                        </div>
                    </div> -->
                    <!-- Form Group (login box)-->
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <!-- <a class="small" href="#">Lupa Password?</a> -->
                        <button type="submit" id="login" name="login" class="btn btn-warning">Login</button>
                    </div>
                </form>
            </div>
        </div>
</section>