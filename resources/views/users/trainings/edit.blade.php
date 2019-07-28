@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
      <div class="container">
       <h1>{{__('Edit Training Information')}}</h1>
        @include('includes.val_error')
        @include('includes.message')
        <div class="row">
      
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('trainings.update',[$train->id])}}" method="post">@csrf @method('patch')
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Training Course*</label>
                  <input type="text" id="course" name="course" class="form-control" value={{$train->course}}>
                </div>
              </div>
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Training Institute*</label>
                  <input type="text" id="institute" name="institute" class="form-control" value={{$train->institute}}>
                </div>
              </div>
    
            
    
                 <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Training Duration*</label>
                  <input type="text" id="months" name="months" class="form-control" value={{$train->months}}>
                </div>
              </div>
               <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Completion Year*</label>
                  <input type="text" id="year" name="year" class="form-control" value={{$train->year}}>
                </div>

              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update" class="btn btn-primary btn-md text-white">
                </div>
              </div>
    
    
            </form>
          </div>
        
        </div>
      </div>
    </section>