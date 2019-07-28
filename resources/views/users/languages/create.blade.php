@extends('layouts.frontend_layout.front_design')

@section('contents')
<section class="site-section" id="next-section">
       
      <div class="container">
      @include('includes.message')
       @include('includes.val_error')
       <h1>{{__('Add Language Information')}}</h1>
        <div class="row">
       
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('languages.store')}}" method="post">@csrf
    
             

               <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Language*</label>
                  <input type="text" id="language" name="language" class="form-control" value="{{old('language')}}" required>

                </div>
              </div>

                <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="permanent_address">Proficiency*</label>
                  <input type="text" id="proficiency" name="proficiency" class="form-control" value="{{old('proficiency')}}" required>
                  <span class="text-muted">eg:Average,Fluent,Native Speaker</span>


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
 
@endsection
 
  