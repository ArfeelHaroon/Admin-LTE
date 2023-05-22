<x-guest-layout>
    {{-- <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div> --}}
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="input-group mb-3">
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" placeholder="Full name" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <!-- Email Address -->
                <div class="input-group mb-3">
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autocomplete="username" placeholder="Email" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <!-- Password -->
                <div class="input-group mb-3">
                    <x-text-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" placeholder="Password" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2 " />

                <!-- Confirm Password -->
                <div class="input-group mb-3">
                    <x-text-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Retype password" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <br>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <x-primary-button type="submit" class="btn btn-primary btn-block bg-primary">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                  <i class="fab fa-facebook mr-2"></i>
                  Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                  <i class="fab fa-google-plus mr-2"></i>
                  Sign up using Google+
                </a>
              </div>

              <a href="{{route('login')}}" class="text-center text-primary">I already have a membership</a>              
        </div>
    </div>
</x-guest-layout>
