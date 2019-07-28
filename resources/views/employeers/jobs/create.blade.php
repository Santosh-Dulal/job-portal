
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
                    <label class="text-black" for="fname">Job Title</label>
                    <input type="text" id="job_title" name="job_title" class="form-control" value={{old('job_title')}}>
                  </div>
                  
                </div>
                <div class="row form-group">
      
                  <div class="col-md-12">
                       
                            <label for="job_desc">Job Description</label>
                            <textarea id="job_desc" class="form-control" name="job_desc" rows="3"></textarea>
                        
                  </div>
                </div>
      
                <div class="row form-group">
      
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="my-select">Job Category</label>
                        <select id="job_category" class="form-control" name="job_category">
                            <option>Text</option>
                        </select>
                    </div>
                  </div>
                </div>
      
      
                <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="job_type">Job Type</label>
                    <input type="texr" id="job_type" name="job_type" class="form-control" >
                  </div>
                </div>
                  <div class="row form-group">
      
                  <div class="col-md-12">
                    <label class="text-black" for="job_location">Job Location</label>
                    <input type="text" id="job_location" name="job_location" class="form-control" >
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