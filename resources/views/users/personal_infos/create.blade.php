@extends('layouts.frontend_layout.front_design')
@section('js')
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
     $(function() {
      $( "#dob" ).datepicker({
        dateFormat:"yy-mm-dd",
        changeMonth: true,
        changeYear: true,
       yearRange: "-100:+0"
      });
      });
  </script> 
@endsection
@section('contents')
<section class="site-section" id="next-section">
       
      <div class="container">
      @include('includes.message')
       @include('includes.val_error')
       <h1>{{__('Add Personal Information')}}</h1>
        <div class="row">
       
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('personalinfos.store')}}" method="post">@csrf
    
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="fname">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" value="{{$names->first_name}}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="text-black" for="lname">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="{{$names->last_name}}" readonly>
                    </div>
              </div>
    

               <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Current Address*</label>
                  <input type="subject" id="current_address" name="current_address" class="form-control" value="{{old('current_address')}}" required>

                </div>
              </div>

                <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="permanent_address">Permanent Address*</label>
                  <input type="subject" id="permanent_address" name="permanent_address" class="form-control" value="{{old('permanent_address')}}" required>

                </div>
              </div>
              <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="dob">Date of Birth*</label>
                  <input type="text" id="dob" name="dob" class="form-control" value="{{old('dob')}}" required>

                </div>
              </div>
              
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="subject">Gender*</label>
                  
                      <select id="gender" class="form-control" name="gender">
                          <option>Male</option>
                          <option>Male</option>
                          <option>xxxx</option>
                      </select>
                </div>
              </div>

               <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="expected_salary">Marital Status*</label>
                      <select id="marital_status" class="form-control" name="marital_status">
                          <option>Single</option>
                          <option>Married</option>
                          <option>Divorced</option>
                          <option>Widowed</option>
                          <option>Annhuled</option>
                      </select>
                </div>
              </div>
               <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="subject">Nationality*</label>
                     <select id="nationality" class="form-control" name="nationality">
                      @foreach ($countries as $country)
                           <option>{{$country->country_name}}</option>
                      @endforeach
                         
                        
                      </select>
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
 
  