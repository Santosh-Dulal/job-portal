@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
       
      <div class="container">
       @include('includes.val_error')
       <h1>{{__('Add Preferences')}}</h1>
        <div class="row">
       
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('preferences.store')}}" method="post">@csrf
    
              <div class="row form-group">
                  <label class="text-black" for="job_category">Select Job Category*</label>
                <div class="col-md-12">
                       <select style="width:450px;height:40px;" name="job_category" required>
                        @foreach ($job_categories as $job)
                            <option value="{{$job->job_category}}">{{$job->job_category}}</option>
                         @endforeach
                  </select> 
                 </div>
              </div>

               <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Looking for*</label>
                  <input type="subject" id="job_level" name="job_level" class="form-control" value="{{old('job_level')}}" required>
                  <span class="text-muted">eg:Top Level,Mid Level,Entry Level,Senior Level</span>

                </div>
              </div>

                <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Available for*</label>
                  <input type="subject" id="availability" name="availability" class="form-control" value="{{old('availability')}}" required>
                  <span class="text-muted">eg:Full Time,Part Time,Contract Basis</span>

                </div>
              </div>
              <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="subject">Specialiazation*</label>
                  <input type="subject" id="specialization " name="specialization" class="form-control" value="{{old('specialization')}}" required>
                  <span class="text-muted">eg:Major course you have taken at university.</span>

                </div>
              </div>
              
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Skills*</label>
                  <input type="subject" id="skill" name="skill" class="form-control" value="{{old('skill')}}" required>
                   <span class="text-muted">eg:Php,Java,Python,Oracle etc</span>
                </div>
              </div>

               <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="expected_salary">Exptected Salary*</label>
                  <input type="text" id="expected_salary" name="expected_salary" class="form-control" value="{{old('expected_salary')}}" required>

                </div>
              </div>
               <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="subject">Preferred Location*</label>
                  <input type="subject" id="location" name="location" class="form-control" value="{{old('location')}}" required>

                </div>
              </div>
    
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="career_objective ">Career Objective*</label>
                  <textarea name="career_objective" id="career_objective" cols="20" rows="7" class="form-control"
                    placeholder="Write your career objectives in short." required></textarea>
                </div>
              </div>
    
              <div class="row form-group">
                <div class="col-md-6">
                  <input type="submit" value="Save" class="btn btn-primary btn-md text-white">
                </div>
              </div>
    
    
            </form>
          </div>
        </div>
      </div>
    </section>