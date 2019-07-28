@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
      <div class="container">
       <h1>{{__('Add Work Experiences Information')}}</h1>
        @include('includes.val_error')
        @include('includes.message')
        <div class="row">
      
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('experiences.store')}}" method="post">@csrf
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Office name*</label>
                  <input type="text" id="office_name" name="office_name" class="form-control" value="{{old('course')}}">
                </div>
              </div>
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Office type*</label>
                      <select id="office_type" class="custom-select" name="office_type">
                      @foreach ($offices as $office)
                           <option value="{{$office->job_category}}">{{$office->job_category}}</option>
                      @endforeach
                         
                      </select>
                 
                </div>
              </div>
    
            
    
                 <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Office Location*</label>
                  <input type="text" id="office_location" name="office_location" class="form-control" value="{{old('office_location')}}">
                </div>
              </div>
               <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Job Title*</label>
                  <input type="text" id="job_title" name="job_title" class="form-control" value="{{old('job_title')}}">
                </div>

              </div>
                <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Job Level*</label>
                  <input type="text" id="job_level" name="job_level" class="form-control" value="{{old('job_level')}}">
                </div>

              </div>

                <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Job Start Date*</label>
                  <input type="text" id="start" name="start" class="form-control" value="{{old('start')}}">
                </div>

              </div>
               <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Job End Date*</label>
                  <input type="text" id="end" name="end" class="form-control" value="{{old('end')}}">
                </div>

              </div>
                <div class="row form-group">
                  
                        <label for="duty_resp">Duities and Responsibilities*</label>
                        <textarea id="duty_resp" class="form-control" name="duty_resp" rows="3"></textarea>
                   
                </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Save" class="btn btn-primary btn-md text-white">
                </div>
              </div>
    
    
            </form>
          </div>
        
        </div>
      </div>
    </section>