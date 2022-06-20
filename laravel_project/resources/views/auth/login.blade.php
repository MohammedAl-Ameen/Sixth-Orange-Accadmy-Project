@extends('layouts.app')

@section('content')




<!-- Section: Design Block -->
<style> body{
background-image: url('https://d13kjxnqnhcmn2.cloudfront.net/AcuCustom/Sitename/DAM/055/Volunteers_-_Main.png');
background-repeat: no-repeat;  
background-attachment:fixed;
  background-size:cover;"
}
</style>
<section class="vh-100"  >
  <div class=""style="margin-top:2%">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-7">
            <div class="row g-0">
              {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://transmission-private.com/admin/resources/insights/family-philanthropy-w1300.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:640px;" />
              </div> --}}
           <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background: #2F8F9D; border-radius: 1rem; margin-left:20%">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-2 " style="color:white; margin-left:35%">Login</span>
                    </div>
  
                    
  
                    <div class="form-outline mb-4">
                      <label style="color:white;" class="form-label" for="email">{{ __('Email Address') }}</label>
                      <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                      @error('email')
                         <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                      @enderror
                     
                    </div>
  
                    <div class="form-outline mb-4">
                      <label style="color:white;" class="form-label" for="password">{{ __('Password') }}</label>
                      <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                      
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" style="background-color: #B3E8E5;border-color:white;color:#2F8F9D"    type="submit">{{ __('Login') }}</button>

                      @if (Route::has('password.request'))
                      <a class="btn btn-link" style="color:white;"  href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                     @endif
                    </div>

                   
                      
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" style="color:white;" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>
                      
                     <br>
                  
                    <p class="mb-5 pb-lg-2" style="color:white;">Don't have an account? <a href="{{ route('register') }}"
                      style="color:white;">{{ __('Register Here') }}</a></p>
                    

                    
                  </form>
                </div>
              </div>
           
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Section: Design Block -->
@endsection
