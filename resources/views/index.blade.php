@extends('layouts.frontend_layout.front_design')
@section('contents')
<div id ="body_container">
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/front_images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">A Powerful Career Website Template</h1>
              <p>Find your dream jobs in our powerful career website template.</p>
            </div>
            <form method="post" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Job title, keywords...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="form-control">
                    <option>Anywhere</option>
                    <option>San Francisco</option>
                    <option>Palo Alto</option>
                    <option>New York</option>
                    <option>Manhattan</option>
                    <option>Ontario</option>
                    <option>Toronto</option>
                    <option>Kansas</option>
                    <option>Mountain View</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="form-control">
                    <option>Part Time</option>
                    <option>Full Time</option>
                    <option>Freelancer</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      
    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Careers Statistics</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="1930">0</strong>
            </div>
            <span class="caption">Candidates</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="54">0</strong>
            </div>
            <span class="caption">Jobs Posted</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="120">0</strong>
            </div>
            <span class="caption">Jobs Filled</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="550">0</strong>
            </div>
            <span class="caption">Companies</span>
          </div>

            
        </div>
      </div>
    </section>

    

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">109,234 Job Listed</h2>
          </div>
        </div>
        

        <div class="mb-5">
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-1.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Freelancer</span>
              <h2><a href="job-single.html">Dropbox Product Designer</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Melbourn</h3>
              <span class="meta">Australia</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-2.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.html">Creative Director in Intercom</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-3.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.html">FullStack Developer in Shopify</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-4.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Freelancer</span>
              <h2><a href="job-single.html">Dropbox Product Designer</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Melbourn</h3>
              <span class="meta">Australia</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>
          
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-5.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.html">Creative Director in Intercom</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>
          
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-4.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.html">FullStack Developer in Shopify</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.html"><img src="{{asset('images/frontend_images/featured-listing-3.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.html">FullStack Developer in Shopify</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

        </div>
        
        <div class="row pagination-wrap">
          
          <div class="col-md-6 text-center text-md-left">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Previous</a>
              <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    

    
    <section class="site-section py-4 mb-5 border-top">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Our Candidates Work In Company</h2>
                <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
              </div>
            </div>
            
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="{{asset('images/frontend_images/logo_mailchimp.svg')}}" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="{{asset('images/frontend_images/logo_paypal.svg')}}" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="{{asset('images/frontend_images/logo_stripe.svg')}}" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="{{asset('images/frontend_images/logo_visa.svg')}}" alt="Image" class="img-fluid logo-4">
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light pt-5 testimony-full">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <img class="img-fluid mx-auto" src="images/person_1.jpg')}}" alt="Image">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Richard Anderson</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <img class="img-fluid mx-auto" src="images/person_2.jpg')}}" alt="Image">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Chris Peters</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

      </div>

    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
              impedit.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection