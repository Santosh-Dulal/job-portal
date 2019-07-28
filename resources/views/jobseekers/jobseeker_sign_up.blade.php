
@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
      <div class="container">
      <h1>{{__('JobSeeker Registration')}}</h1>
        <div class="row">
           
           @include('includes.val_error')
           @include('includes.message')
          <div class="col-lg-6 mb-5 mb-lg-0">
              <form action="{{url('/jobseeker-register')}}" method="post">@csrf
      
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value={{old('first_name')}}>
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{old('last_name')}}">
                  </div>
                </div>
                <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="phone">Phone</label>
                    <input type="phone" id="phone" name="phone" class="form-control" value="{{old('phone')}}">
                  </div>
                </div>
      
                <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                  </div>
                </div>
      
      
                <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" >
                  </div>
                </div>
                  <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" >
                  </div>
                </div>
                
                  <div class="row form-group">
                  <div class="col-md-12">
                     <label class="text-black" for="captcha">Prove you're human.</label>
                     
                       {!! app('captcha')->display() !!}
                         @include('includes.gcap')
                  </div>
                </div>
                 
      
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Sign Up" class="btn btn-primary btn-md text-white">
                  </div>
                </div>
      
      
              </form>
          </div>
        
        </div>
      </div>
    </section>