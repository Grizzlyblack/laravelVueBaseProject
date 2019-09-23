<div >
    <div >{{ $formType[0] }}</div>
    <div >
        <form method="POST" action="{{$formType[0] == 'Register' ? route('register') : route('login')}}">
            @csrf
            @if($formType[0] == 'Register')
                <div >
                    <label for="name" >{{ __('Name') }}</label>

                    <div >
                        <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endif

            <div>
                <label for="email" >{{ __('E-Mail Address') }}</label>

                <div>
                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password" >{{ __('Password') }}</label>

                <div>
                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required>

                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            @if($formType[0] == 'Register')
                <div >
                    <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                    <div >
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            @endif

            <div>
                <div>
                    <button type="submit">
                        {{ $formType[0] }}
                    </button>
                </div>

                @if($formType[0] == 'Login' && Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>