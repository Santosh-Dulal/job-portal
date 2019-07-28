
@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
       
      <div class="container">
      <h1>{{__('JobSeeker Login')}}</h1>
        @include('includes.val_error')
        @include('includes.message')
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <form action="{{url('/jobseeker-login')}}" method="post">@csrf
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
                    <input type="submit" value="Login" class="btn btn-primary btn-md text-white">
                  </div>
                </div>
      
      
              </form>
          </div>
        
        </div>
      </div>
    </section>