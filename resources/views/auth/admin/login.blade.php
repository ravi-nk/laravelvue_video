@extends('layouts.adminApp')
@section('content')
<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="POST" action="{{ route('login') }}" class="sign__form">
                        @csrf
							<a href="#" class="sign__logo">
								<img src="{{asset('img/logo.svg')}}" alt="">
							</a>

							<div class="sign__group">
								<input type="email" class="sign__input @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            

							<div class="sign__group">
								<input type="password" class="sign__input @error('password') is-invalid @enderror " placeholder="Password" name="password" required autocomplete="current-password">
							
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" type="Submit">Sign in</button>

							<!-- <span class="sign__text">Don't have an account? <a href="signup.html">Sign up!</a></span> -->
                            @if (Route::has('password.request'))
							<span class="sign__text"><a href="{{ route('password.request') }}">Forgot password?</a></span>
                            @endif
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection