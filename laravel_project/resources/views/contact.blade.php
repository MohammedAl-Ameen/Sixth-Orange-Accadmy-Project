
   @extends('master') 
   @section('content')
    
    <div class="hero-wrap" style="background-image: url('https://www.lifeofpix.com/wp-content/uploads/2018/07/308-name071951-jj-1600x1196.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p> --}}
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      
        <h1 class="mb-4">Do you have any questions?</h1>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          
            <form action="{{route('contact.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control"name="message_name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="message_email"  placeholder="Email" required>
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" name="message"  placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id=""> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20450.48280677248!2d35.83756342532964!3d32.5436578196297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e65dbad58997cec!2zMzLCsDMzJzA5LjgiTiAzNcKwNTAnNTkuMyJF!5e0!3m2!1sen!2sjo!4v1655148472730!5m2!1sen!2sjo" width="600" height="360" ></iframe>
      </div>
    </section>
    @endsection