
@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
      <div class="container">
            @include('includes.val_error')
             @include('includes.message')
           
      <h1>{{__('Employeer Registration')}}</h1>
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <form action="{{url('/employeer-register')}}" method="post">@csrf
      
                <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                  </div>
                </div>
                 <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="email">Phone</label>
                    <input type="text" id="" name="phone" class="form-control" value="{{old('phone')}}">
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