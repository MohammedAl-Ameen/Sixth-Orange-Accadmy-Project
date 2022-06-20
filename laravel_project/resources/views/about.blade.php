@extends('master') 
@section('content')
    
    <div class="hero-wrap" style="background-image: url('https://persiangulfcharity.com/wp-content/uploads/2018/10/adult-3435775_1280.jpg'); " data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex ftco-animate">
    				<div class="img img-about align-self-stretch" style="background-image: url(images/bg_3.jpg); width: 100%;"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate">
    				<h2 class="mb-4">Welcome to GiftHand Stablished in 2022</h2>
    				<p>We are a humanitarian aid organization dedicated to improving the quality of life of people, communities and our planet by sourcing and directly delivering surplus medical supplies and equipment to communities in need around the world.</p>
    				<p>We work with hospitals, distributors and manufacturers to collect and redistribute medical products to qualified healthcare facilities in medically underserved communities.</p>
    			</div>
    		</div>
    	</div>
    </section>

    {{-- <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="1432805">0</strong>
                <span>Children in 190 countries in the world</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donate Money</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section> --}}

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Members</h2>
            <p>Alone we can do so little; together we can do so much.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ghaida'a Obeidat</a></h3>
        					<span class="position">Project Owner</span>
        					<div class="text">
		        				<p>Our <span>humble </span> manager,full-stack developer.</p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/assma.jfif);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Assma Ibdawi</a></h3>
        					<span class="position">Developer</span>
        					<div class="text">
		        				<p>The very <span>supportive</span> full-stack developer.</p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Marah Al-Khateeb</a></h3>
        					<span class="position">Scrum Master</span>
        					<div class="text">
		        				<p>Our <span>kind</span> leader assistant, full-stack developer.</p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
			<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Mohammed Ababneh</a></h3>
        					<span class="position">Developer</span>
        					<div class="text">
		        				<p>The very  <span>talented </span> full-stack developer.</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
			<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ashraf Abueraq</a></h3>
        					<span class="position">Developer</span>
        					<div class="text">
		        				<p>The <span>creative </span>full-stack developer. </p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
			<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/leenpic.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Leen Abu El-hijaa</a></h3>
        					<span class="position">Developer</span>
        					<div class="text">
		        				<p>The <span>sweet</span> full-stack developer.</p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
		
    @endsection