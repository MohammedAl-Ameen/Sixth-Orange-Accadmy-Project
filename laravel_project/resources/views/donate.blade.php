
   @extends('master') 
   @section('content')
    
    <div class="hero-wrap" style="background-image: url('https://transmission-private.com/admin/resources/insights/family-philanthropy-w1300.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Donate</span></p> --}}
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
			@foreach ($users as $user)
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">{{ $user->name }}</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
		@endforeach
      </div>
	  
    </section>



    @endsection
