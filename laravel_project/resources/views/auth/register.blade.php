@extends('layouts.app')

@section('content')

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
     body{ background-image: url('https://d13kjxnqnhcmn2.cloudfront.net/AcuCustom/Sitename/DAM/055/Volunteers_-_Main.png');
background-repeat: no-repeat;  
background-attachment:fixed;
  background-size:cover;"
}
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0" style="margin-left: 20%">
          <div class="" style="background: #2F8F9D; border-radius: 1rem;margin-left:20%">
            <div class=" p-5 text-center" >
              <h2 class="fw-bold mb-5" style="color:white;">Sign up now</h2>
              <form  method="POST" action="{{ route('register') }}">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="form-outline mb-4">
                    <label style="color:white;" class="form-label" for="name">{{ __('Name') }}</label>
                    <input  type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label style="color:white;" class="form-label" for="email">{{ __('Email Address') }}</label>
                    <input  type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                 
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label style="color:white;"class="form-label" for="password">{{ __('Password') }}</label>
                  <input  type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password"required autocomplete="new-password"/>


                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>


                <div class="form-outline mb-4">
                    <label style="color:white;" class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                  <input  type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password"/>

                </div>
  
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked style="background-color:rgb(178, 178, 185)"/>
                  <label style="color:white;" class="form-check-label" for="form2Example33">
                    Subscribe to our Donations
                  </label>
                </div>
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 200px; background-color: #B3E8E5;border-color:white;color:#2F8F9D">
                    {{ __('Register') }}
                </button>
  
                
               
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Jumbotron -->
  </section>

  
@endsection
