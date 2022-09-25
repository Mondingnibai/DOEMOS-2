@extends('layouts.app')

@section('pageTitle', 'Login')
@section('page-title', 'Login')
@section('page_desc', 'Please enter login credentials below.')
@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <img src="{{ asset('images/page_logo.png') }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-left">
                            <p class="font-weight-bold">Please login to your account</p>
                            </div>

                            <div class="row"> 
                                <form method="POST" action="{{ route('login') }}">
                                @csrf 

                                <div class="form-outline mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                        required autocomplete="email" autofocus placeholder="Enter Email Address">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                                    required autocomplete="current-password" placeholder="Enter Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                                    in</button>
                                </div>  

                                </form>
                            </div>
                            

                        </div>
                    </div>                    
                </div>
            </div>
      </div>
    </div>
  </div>
</section>
@endsection
