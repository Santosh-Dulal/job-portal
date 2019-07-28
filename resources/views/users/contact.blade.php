@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
        @include('includes.val_error')
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{url('/contact')}}" method="post">@csrf
    
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
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                </div>
              </div>
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" id="subject" name="subject" class="form-control" value="{{old('subject')}}">
                </div>
              </div>
    
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                    placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>
    
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>
    
    
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
    
              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
    
              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>
    
            </div>
          </div>
        </div>
      </div>
    </section>