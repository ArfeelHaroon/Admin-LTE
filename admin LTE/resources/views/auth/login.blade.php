<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <!-- Email Address -->
                    <x-text-input id="email" class="block form-control" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" placeholder="Email" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>  
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <div class="input-group mb-3">
                    <x-text-input id="password" class="block form-control" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Remember Me -->
                <div class="row">
                    <div class="col-8">
                            <input id="remember" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember" checked>
                            <label for="remember">{{ __('Remember me') }}
                            </label>
                    </div>
                    <div class="col-4">
                        <x-primary-button type="submit" class="btn btn-primary bg-primary btn-block">
                            {{ __('Sign In') }}
                        </x-primary-button>
                    </div>  
                </div>
                
            </form>

        <div class="social-auth-links text-center mb-3">
            <p style="margin: inherit;">- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            {{-- <a href="forgot-password.html">I forgot my password</a> --}}
            @if (Route::has('password.request'))
            <a class="text-primary"
                href="{{ route('password.request') }}">
                {{ __('I forgot my password') }}
            </a>
        @endif
        </p>
        <p class="mb-0">
            <a href="register" class="text-center text-primary">Register a new membership</a>
        </p>
    </div>

    <div class="flex items-center justify-end mt-4">
        {{-- @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif --}}

        {{-- <x-primary-button class="ml-3">
            {{ __('Log in') }}
        </x-primary-button> --}}
    </div>
    </form>
</x-guest-layout>
