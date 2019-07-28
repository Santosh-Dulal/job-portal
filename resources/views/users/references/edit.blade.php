@extends('layouts.frontend_layout.front_design')

@section('contents')
<section class="site-section" id="next-section">
       
      <div class="container">
      @include('includes.message')
       @include('includes.val_error')
       <h1>{{__('Edit Reference Information')}}</h1>
        <div class="row">
       
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('references.update',[$ref->id])}}" method="post">@csrf @method('patch')

               <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Reference Name*</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{$ref->name}}" required>

                </div>
              </div>
              
            

                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Office Name*</label>
                  <input type="text" id="office" name="office" class="form-control" value="{{$ref->office}}" required>

                </div>
              </div>
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Post*</label>
                  <input type="text" id="post" name="post" class="form-control" value="{{$ref->post}}" required>

                </div>
              </div>
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email*</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{$ref->email}}" required>

                </div>
              </div>

                <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="phone">Phone*</label>
                  <input type="text" id="phone" name="phone" class="form-control" value="{{$ref->phone}}" required>


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
 
  