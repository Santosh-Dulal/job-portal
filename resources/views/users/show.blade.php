
@extends('layouts.frontend_layout.front_design')
@section('contents')
<br>
<div class="row user-detail" style="margin-left:50px;margin-top:50px;font-family:"arial-black;">
                <div class="col-md-9 pt-md-0 pt-2" style="align:center;">
                <h5 class="mt-0">
                    Mr. {{$user->first_name}} {{$user->last_name}}
                </h5>
                <div class="personal-info">
                    
                        <span>Address: {{$per->current_address}}</span><br>
                    
                    
                        <span>Phone: {{$user->phone}}</span><br>
                    
                    <span>Email: <a href="mailto:{{$user->email}}">{{$user->email}}</a></span><br>
                    
                        <span>Date of Birth: {{$per->DoB}}</span>
                    
                    <br>
                </div>
            </div>
              
                <div class="col-md-12 mt-3">
                    <h5><span class="icon-list mr-2"></span> Objective</h5>
                    <div class="dropdown-divider"></div>
                    <div class="container">
                        <p class="word-wrap">{{$obj->career_objective}}</p>
                </div>
                </div>
                
            
                <div class="col-md-12 mt-3">
                    <h5>
                        <span class="icon-building mr-2"></span> Work Experience
                    </h5>
                    <div class="dropdown-divider"></div>
                    
                        <div class="row pb-3">
                            <div class="col-md-3">
                                <span class="icon-calendar mr-2"></span>
                                        {{$exp->start}}
                                
                                    -<span> {{$exp->end}}</span>
                                
                            </div>
                            <div class="col-md-9">
                                <h6><span class="icon-user mr-2"></span>{{$exp->job_title}}
                                </h6>
                                
                                <div>
                                  <span class="icon-building mr-2"></span>
                                    {{$exp->office_name}}
                                </div>
                                
                                
                                <span class="icon-home mr-2"></span>
                                    {{$exp->office_location}}
                                
                              <div>{{$exp->duty_resp}}</div>
                            </div>
                        </div>
                    
                </div>
        
            
                <div class="col-md-12 mt-3">
                    <h5>
                        <span class="icon-graduation mr-2"></span> Education
                    </h5>
                    <div class="dropdown-divider"></div>
                    
                        <div class="row pb-3">
                            <div class="col-md-3">
                                <span class="icon-calendar mr-2"></span>
                                    {{$edu->year}}
                                
                            </div>
                            <div class="col-md-9">
                                <h6>
                                    <span class="icon-circle-check mr-2"></span>{{$edu->degree}} {{$edu->program}}
                                    
                                        
                                            {{$edu->grade}}<span>%</span>
                                        
                                    
                                </h6>
                                <div>
                                    <span class="icon-building mr-2"></span>
                                    {{$edu->institution}}<span>, {{$edu->board}} </span>
                                </div>
                            </div>
                        </div>
                    
 
                    
                </div>
            
                <div class="col-md-12 mt-3">
                    <h5>
                        <span class="icon-training mr-2"></span> Training/Certificates
                    </h5>
                    <div class="dropdown-divider"></div>
                    
                        <div class="row pb-3">
                            <div class="col-md-3">
                                <span class="icon-calendar mr-2"></span>
                                
                                  {{$train->year}}
                                
                                
                                
                                    ({{$train->months}} months
                                    )
                                
                            </div>
                            <div class="col-md-9">
                                <h6><span class="icon-circle-check mr-2"></span>{{$train->course}}
                                </h6>
                                <div>
                                    <span class="icon-building mr-2"></span>
                                   {{$train->institute}}
                                </div>
                            </div>
                        </div>
                    
                      
                    
                </div>
                
                    <div class="col-md-12 mt-3">
                        <h5>
                            <span class="icon-id-card mr-2"></span>
                            Job Preference
                        </h5>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            
                                <div class="offset-md-3 col-md-9">
                                    <span class="icon-circle-check mr-2"></span>
                                    Looking for: {{$obj->job_level}}
                                </div>
                            
                            
                                <div class="offset-md-3 col-md-9">
                                    <span class="icon-circle-check mr-2"></span>
                                    Job Categories:
                                    
                                        
                                           {{$obj->job_category}}
                                        
                                    
                                </div>
                            
                            
                                <div class="offset-md-3 col-md-9">
                                    <span class="icon-circle-check mr-2"></span>
                                    Available for: {{$obj->availability}}
                                </div>
                            
                            
                                <div class="offset-md-3 col-md-9">
                                    <span class="icon-circle-check mr-2"></span>
                                    Expected Salary: NRS {{$obj->expected_salary}}
                                    <span class="badge badge-secondary">Monthly</span>
                                </div>
                            
                            
                                <div class="offset-md-3 col-md-9">
                                    <span class="icon-circle-check mr-2"></span>
                                    Total Experience: 
                                </div>
                            
                            
                                <div class="offset-md-3 col-md-9">
                                    <span class="icon-circle-check mr-2"></span>
                                    Current Salary: (Above) NRs
                                    0.00
                                    <span class="badge badge-secondary ml-2">Monthly</span>
                                </div>
                            
                            
                              <div class="offset-md-3 col-md-9">
                                <span class="icon-circle-check mr-2"></span>
                                Job Preference Location:
                                
                                  <span class="badge badge-pill badge-secondary">{{$obj->location}}</span>
                                
                              </div>
                            
                        </div>
                    </div>
                
                    <div class="col-md-12 mt-3">
                        <h5>
                            <span class="icon-language mr-2"></span> Language
                        </h5>
                        <div class="dropdown-divider"></div>
                        <div class="icon col-md-12"></div>
                            
                            <div class="row pb-3">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
                                    <h6>
                                        {{$lang->language}} : {{$lang->proficiency}}
                                    </h6>
                                    
                                       
                            </div>
                            </div>
                        
                    </div>
                
                <div class="col-md-12 mt-3">
                    <h5>
                        <span class="icon-user mr-2"></span> References
                    </h5>
                    <div class="dropdown-divider"></div>
                    
                        <div class="row pb-3">
                            <div class="offset-md-3 col-md-9">
                                <address>
                                    <h6><span class="icon-user mr-2"></span>{{$ref->name}}</h6>
                                    <div>
                                        <span class="icon-folder mr-2"></span>
                                        {{$ref->post}}
                                    </div>
                                    <div>
                                        <span class="icon-building mr-2"></span>
                                       {{$ref->office}}
                                    </div>
                                    <div>
                                        <span class="icon-call mr-2"></span>
                                        {{$ref->phone}}
                                    </div>
                                </address>
                            </div>
                        </div>
                    
                </div>
            
                    <div class="col-md-12 mt-3">
                        <h5>
                            <span class="icon-idea mr-2"></span> Specializations and Skills
                        </h5>
                        <div class="dropdown-divider"></div>
                        
                            <div class="row pb-3">
                                <div class="offset-md-3 col-md-9">
                                    <h6><span class="icon-circle-check mr-2"></span>Specializations</h6>
                                    
                                        <span class="badge badge-secondary mr-1">{{$obj->specialization}}</span>
                                                                        

                                </div>
                            </div>
                        
                        
                            <div class="row">
                                <div class="offset-md-3 col-md-9">
                                    <h6><span class="icon-circle-check mr-2"></span>Skills</h6>
                                    
                                        <span title="Laravel" class="badge badge-secondary mr-1">{{$obj->skill}}</span>
                                    
                                    
                                </div>
                            </div>
                        
                    </div>
                
            <div class="col-md-12 mt-3">
                <h5>
                    <span class="icon-id-card mr-2"></span>
                    Personal Information
                </h5>
                <div class="dropdown-divider"></div>
                
                <div class="row">
                    
                      <div class="offset-md-3 col-md-9">
                        <span class="icon-circle-check mr-2"></span>
                        Gender: {{$per->gender}}
                      </div>
                    
                    
                        <div class="offset-md-3 col-md-9">
                            <span class="icon-circle-check mr-2"></span>
                            Permanent Address: {{$per->permanent_address}}
                        </div>
                    
                    
                        <div class="offset-md-3 col-md-9">
                            <span class="icon-circle-check mr-2"></span>
                            Current Address: {{$per->current_address}}
                        </div>
                    
                    
                        <div class="offset-md-3 col-md-9">
                            <span class="icon-circle-check mr-2"></span>
                            Marital Status: {{$per->marital_status}}
                        </div>
                    
                    
                        <div class="offset-md-3 col-md-9">
                            <span class="icon-circle-check mr-2"></span>
                            Religion: Hinduism
                        </div>
                    
                    
                        <div class="offset-md-3 col-md-9">
                            <span class="icon-circle-check mr-2"></span>
                            Nationality: {{$per->nationality}}
                    
                </div>
            </div>
            </div>
    </div>
@endsection
