@extends('layouts.frontend_layout.front_design')
<section class="site-section" id="next-section">
      <div class="container">
       <h1>{{__('Edit Educational Information')}}</h1>
       <h5>{{__(' Highest educational information only.')}}</h5>
         @include('includes.val_error')
        @include('includes.message')
        <div class="row">
      
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('educations.update',[$edu->id])}}" method="post">@method('patch') @csrf
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Academic Degree*</label>
                  <input type="text" id="degree" name="degree" class="form-control" value="{{$edu->degree}}" >
                </div>
              </div>
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Academic Program*</label>
                  <input type="text" id="program" name="program" class="form-control" value={{$edu->program}} >
                </div>
              </div>
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Board*</label>
                  <input type="text" id="board" name="board" class="form-control" value="{{$edu->board}}" >
                </div>
              </div>
    
                 <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Institution*</label>
                  <input type="text" id="institution" name="institution" class="form-control" value={{$edu->institution}}>
                </div>
              </div>
               <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Grading Sytem*</label>
                  <input type="text" id="system" name="system" class="form-control" value={{$edu->system}}>
                </div>

              </div>
               <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">GPA/Percent*</label>
                  <input type="text" id="grade" name="grade" class="form-control" value={{$edu->grade}} >
                </div>
              </div>
               <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Year of Completion*</label>
                  <input type="text" id="year" name="year" class="form-control" value={{$edu->year}}>
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