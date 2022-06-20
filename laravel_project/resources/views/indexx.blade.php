
   @extends('master') 
   @section('content')

    {{-- <div class="hero-wrap" style="background-image: url('https://jbmedical.com.au/wp-content/uploads/2021/07/mobility-aids2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing nothing is not an option of our life</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a href="#"></a></p>
          </div>
        </div>
      </div>
    </div> --}}
<style>

body {
  font: 14px/2 "Open sans",sans-serif;
  letter-spacing: 0.05em;
}

.btn {

}
.btn::before {

}
.btn::after {

}
.btn .btn-inner {

}
.btn:hover {

}
.btn:hover::before {

}
.btn:hover::after {

}

.slideshow {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100vh;
  z-index: 1;
}
.slideshow .slideshow-inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.slideshow .slides {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.slideshow .slide {
  display: none;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 85%;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.3s ease;
}
.slideshow .slide.is-active {
  display: block;
}
.slideshow .slide.is-loaded {
  opacity: 1;
}
.slideshow .slide .caption {
  padding: 0 100px;
}
.slideshow .slide .image-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center;
  z-index: 1;
  background-size: cover;
  image-rendering: optimizeQuality;
}
.slideshow .slide .image-container::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}
.slideshow .slide .image {
  width: 100%;
  width: 100%;
  object-fit: cover;
  height: 100%;
}
.slideshow .slide-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  color: #fff;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
}
.slideshow .slide .title {
  margin: 0 auto 15px;
  max-width: 1000px;
  font: 300 50px/1.2 "Oswald", sans-serif;
  letter-spacing: 0.35em;
  text-transform: uppercase;
}
.slideshow .slide .text {
  margin: 0 auto;
  max-width: 1000px;
  font-size: 18px;
  line-height: 1.4;
}
.slideshow .slide .btn {
  margin: 15px 0 0;
  border-color: #fff;
}
.slideshow .slide .btn::before {
  background: #fff;
}
.slideshow .pagination {
  position: absolute;
  bottom: 35px;
  left: 0;
  width: 100%;
  height: 12px;
  cursor: default;
  z-index: 2;
  text-align: center;
}
.slideshow .pagination .item {
  display: inline-block;
  padding: 15px 5px;
  position: relative;
  width: 46px;
  height: 32px;
  cursor: pointer;
  text-indent: -999em;
  z-index: 1;
}
.slideshow .pagination .item + .page {
  margin-left: -2px;
}
.slideshow .pagination .item::before {
  content: "";
  display: block;
  position: absolute;
  top: 15px;
  left: 5px;
  width: 36px;
  height: 2px;
  background: rgba(255, 255, 255, 0.5);
  transition: background 0.2s ease;
}
.slideshow .pagination .item::after {
  width: 0;
  background: #fff;
  z-index: 2;
  transition: width 0.2s ease;
}
.slideshow .pagination .item:hover::before, .slideshow .pagination .item.is-active::before {
  background-color: #fff;
}
.slideshow .arrows .arrow {
  margin: -33px 0 0;
  padding: 20px;
  position: absolute;
  top: 50%;
  cursor: pointer;
  z-index: 3;
}
.slideshow .arrows .prev {
  left: 30px;
}
.slideshow .arrows .prev:hover .svg {
  left: -10px;
}
.slideshow .arrows .next {
  right: 30px;
}
.slideshow .arrows .next:hover .svg {
  left: 10px;
}
.slideshow .arrows .svg {
  position: relative;
  left: 0;
  width: 14px;
  height: 26px;
  fill: #fff;
  transition: left 0.2s ease;
}
	</style>




<section>
	<main class="main-content">
		<section class="slideshow">
		  <div class="slideshow-inner">
			<div class="slides">
			  <div class="slide is-active ">
				<div class="slide-content">
				  <div class="caption">
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
						  <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
							<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing nothing is not an option of our life</h1>
							<p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a href="#"></a></p>
						  </div>
						</div>
					  </div>
				</div>
			</div>
				<div class="image-container"> 
				  <img src="https://jbmedical.com.au/wp-content/uploads/2021/07/mobility-aids2.jpg" alt="" class="image" />
				</div>
			  </div>
			  <div class="slide">
				<div class="slide-content">
				  <div class="caption">
					
						<div class="container">
							<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
							  <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
								<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing nothing is not an option of our life</h1>
								<p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a href="#"></a></p>
							  </div>
							</div>
						  </div>
				  </div>
				</div>
				<div class="image-container">
				  <img src="https://d1w4rdyew1npvx.cloudfront.net/app/uploads/2021/07/Oxygen-scaled.jpg" alt="" class="image" />
				</div>
			  </div>
			  <div class="slide">
				<div class="slide-content">
					<div class="caption">
						<div class="container">
							<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
							  <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
								<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing nothing is not an option of our life</h1>
								<p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a href="#"></a></p>
							  </div>
							</div>
						  </div>
				</div> 
			</div>
				<div class="image-container">
				  <img src="https://media.istockphoto.com/photos/hope-my-blood-pressure-came-down-picture-id1152140468?k=20&m=1152140468&s=612x612&w=0&h=9b2Yuuj8XAI4jT6y3kpXHlTLgeHAVg9uct1Ycq3F3Vo=" alt="" class="image" />
				</div>
			  </div>
			  <div class="slide">
				<div class="slide-content">
				  <div class="caption">
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
						  <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
							<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing nothing is not an option of our life</h1>
							<p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a href="#"></a></p>
						  </div>
						</div>
					  </div>

	
				  </div>
				</div>
				<div class="image-container"> 
				  <img src="https://i0.wp.com/post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/05/GettyImages-1184019336_header-1024x575.jpg?w=1155&h=1528" alt="" class="image" />
				</div>
			  </div>
			</div>
			{{-- <div class="pagination">
			  <div class="item is-active"> 
				<span class="icon">1</span>
			  </div>
			  <div class="item">
				<span class="icon">2</span>
			  </div>
			  <div class="item">
				<span class="icon">3</span>
			  </div>
			  <div class="item">
				<span class="icon">4</span>
			  </div>
			</div> --}}
			<div class="arrows">
			  <div class="arrow prev">
				<span class="svg svg-arrow-left">
				  <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
				  <span class="alt sr-only"></span>
				</span>
			  </div>
			  <div class="arrow next">
				<span class="svg svg-arrow-right">
				  <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
				  <span class="alt sr-only"></span>
				</span>
			  </div>
			</div>
		  </div> 
		</section>
	  </main>
	  <!-- partial -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script><script  src="./script.js"></script>
</section>
    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="12805">0</strong>
                <span>Person in the country</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donate</h3>
              	<p>By donating a medical equiment you can change someone's life.</p>
              	<p><a href="{{url('addprofile')}}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>Register in delivery volunteering , a small gesture can work wonders.</p>
              	<p><a href="{{url('delivery')}}" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>
{{--  --}}
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Donation categories</h2>
			</div>
		</div>
	
		<div class="row d-flex">
			@foreach ($categories as $category)
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch"   >
					<a href="blog-single.html" class="block-20" style="background-image: url('{{asset('public/adminImage/'.$category->category_image);}}'); ">
					</a>
					<div class="text p-4 d-block">
						<div class="meta mb-3" >
							<div><a style="color:white" href="#">*********************************</a>
							</div>
					
							<div><a href="#" class="meta-chat"><span class=""></span> </a>
							</div>
						</div>
						<h1 class="heading mt-3"><a href="#">

								{{ $category->category_name }}</a></h1>
						<p>

							{{ $category->category_description }}

						</p>

					</div>
				
				</div>
			
			</div>
			

		@endforeach
	</div>
</section>
{{--  --}}
<section class="ftco-gallery">
	<div class="d-md-flex">
		<a href="https://athomeseniorservices.com/wp-content/uploads/2019/06/DME.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('https://athomeseniorservices.com/wp-content/uploads/2019/06/DME.png');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
		<a href="https://www.healthcareitnews.com/sites/hitn/files/medical-devices-bp-gettystocks-712.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('https://www.healthcareitnews.com/sites/hitn/files/medical-devices-bp-gettystocks-712.jpg');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
		<a href="https://www.ubuy.com.jo/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvOTFmTFcwWG1TMlMuX1NMMTUwMF8uanBn.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('https://www.ubuy.com.jo/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvOTFmTFcwWG1TMlMuX1NMMTUwMF8uanBn.jpg');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
		<a href="http://sc04.alicdn.com/kf/Hb9cfd367ad3e4c19a4e743e6353b1252f.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('http://sc04.alicdn.com/kf/Hb9cfd367ad3e4c19a4e743e6353b1252f.jpg');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
	</div>
</section>

{{--  --}}
<section class="ftco-section">
	<div class="container">
		<div class="row">
	  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
		<div class="media block-6 d-flex services p-3 py-4 d-block">
		  <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
		  <div class="media-body pl-4">
			<h3 class="heading">Make Donation</h3>
			<p>The donations can be used to help someone in need, promoting recyclable products to save a life.</p>
		  </div>
		</div>      
	  </div>
	  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
		<div class="media block-6 d-flex services p-3 py-4 d-block">
		  <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
		  <div class="media-body pl-4">
			<h3 class="heading">Become A Volunteer</h3>
			<p>Make a difference by try something new and build a real sense of achievement.</p>
		  </div>
		</div>      
	  </div>
	  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
		<div class="media block-6 d-flex services p-3 py-4 d-block">
		  <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
		  <div class="media-body pl-4">
			<h3 class="heading">Credibility</h3>
			<p>Every product is checked before add it in our webpage</p>
		  </div>
		</div>    
	  </div>
	</div>
	</div>
</section>
{{--  --}}


    <section class="ftco-section bg-light">
<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Latest Donations</h2>
			</div>
		</div>
		
		<div class="row">
			@foreach ($data as $product)
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('storage/images/' .$product->item_image) }}');">
					</a>
					<div class="text p-4 d-block">
						<div class="meta mb-3">
							<div><a style="color:white" href="#" >**********************</a></div>
							<div><a href="#"></a></div>
							<div><a href="#" class="meta-chat"><span class=""></span> </a></div>
						</div>
						<h3 class="heading mb-4"><a href="#">{{ $product->item_name}}</a></h3>
						<p class="time-loc"><span class="mr-2"></i> {{$product->category_name}}</span></p>
						<p>{{ $product->item_description }}</p>
						<p><a href="/Causes-product/{{$product->id}}">See more <i class="ion-ios-arrow-forward"></i></a></p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	
		
	</div>
</div> 
    </section>
		
	
<script>
	var slideshowDuration = 4000;
var slideshow=$('.main-content .slideshow');

function slideshowSwitch(slideshow,index,auto){
  if(slideshow.data('wait')) return;

  var slides = slideshow.find('.slide');
  var pages = slideshow.find('.pagination');
  var activeSlide = slides.filter('.is-active');
  var activeSlideImage = activeSlide.find('.image-container');
  var newSlide = slides.eq(index);
  var newSlideImage = newSlide.find('.image-container');
  var newSlideContent = newSlide.find('.slide-content');
  var newSlideElements=newSlide.find('.caption > *');
  if(newSlide.is(activeSlide))return;

  newSlide.addClass('is-new');
  var timeout=slideshow.data('timeout');
  clearTimeout(timeout);
  slideshow.data('wait',true);
  var transition=slideshow.attr('data-transition');
  if(transition=='fade'){
    newSlide.css({
      display:'block',
      zIndex:2
    });
    newSlideImage.css({
      opacity:0
    });

    TweenMax.to(newSlideImage,1,{
      alpha:1,
      onComplete:function(){
        newSlide.addClass('is-active').removeClass('is-new');
        activeSlide.removeClass('is-active');
        newSlide.css({display:'',zIndex:''});
        newSlideImage.css({opacity:''});
        slideshow.find('.pagination').trigger('check');
        slideshow.data('wait',false);
        if(auto){
          timeout=setTimeout(function(){
            slideshowNext(slideshow,false,true);
          },slideshowDuration);
          slideshow.data('timeout',timeout);}}});
  } else {
    if(newSlide.index()>activeSlide.index()){
      var newSlideRight=0;
      var newSlideLeft='auto';
      var newSlideImageRight=-slideshow.width()/8;
      var newSlideImageLeft='auto';
      var newSlideImageToRight=0;
      var newSlideImageToLeft='auto';
      var newSlideContentLeft='auto';
      var newSlideContentRight=0;
      var activeSlideImageLeft=-slideshow.width()/4;
    } else {
      var newSlideRight='';
      var newSlideLeft=0;
      var newSlideImageRight='auto';
      var newSlideImageLeft=-slideshow.width()/8;
      var newSlideImageToRight='';
      var newSlideImageToLeft=0;
      var newSlideContentLeft=0;
      var newSlideContentRight='auto';
      var activeSlideImageLeft=slideshow.width()/4;
    }

    newSlide.css({
      display:'block',
      width:0,
      right:newSlideRight,
      left:newSlideLeft
      ,zIndex:2
    });

    newSlideImage.css({
      width:slideshow.width(),
      right:newSlideImageRight,
      left:newSlideImageLeft
    });

    newSlideContent.css({
      width:slideshow.width(),
      left:newSlideContentLeft,
      right:newSlideContentRight
    });

    activeSlideImage.css({
      left:0
    });

    TweenMax.set(newSlideElements,{y:20,force3D:true});
    TweenMax.to(activeSlideImage,1,{
      left:activeSlideImageLeft,
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlide,1,{
      width:slideshow.width(),
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlideImage,1,{
      right:newSlideImageToRight,
      left:newSlideImageToLeft,
      ease:Power3.easeInOut
    });

    TweenMax.staggerFromTo(newSlideElements,0.8,{alpha:0,y:60},{alpha:1,y:0,ease:Power3.easeOut,force3D:true,delay:0.6},0.1,function(){
      newSlide.addClass('is-active').removeClass('is-new');
      activeSlide.removeClass('is-active');
      newSlide.css({
        display:'',
        width:'',
        left:'',
        zIndex:''
      });

      newSlideImage.css({
        width:'',
        right:'',
        left:''
      });

      newSlideContent.css({
        width:'',
        left:''
      });

      newSlideElements.css({
        opacity:'',
        transform:''
      });

      activeSlideImage.css({
        left:''
      });

      slideshow.find('.pagination').trigger('check');
      slideshow.data('wait',false);
      if(auto){
        timeout=setTimeout(function(){
          slideshowNext(slideshow,false,true);
        },slideshowDuration);
        slideshow.data('timeout',timeout);
      }
    });
  }
}

function slideshowNext(slideshow,previous,auto){
  var slides=slideshow.find('.slide');
  var activeSlide=slides.filter('.is-active');
  var newSlide=null;
  if(previous){
    newSlide=activeSlide.prev('.slide');
    if(newSlide.length === 0) {
      newSlide=slides.last();
    }
  } else {
    newSlide=activeSlide.next('.slide');
    if(newSlide.length==0)
      newSlide=slides.filter('.slide').first();
  }

  slideshowSwitch(slideshow,newSlide.index(),auto);
}

function homeSlideshowParallax(){
  var scrollTop=$(window).scrollTop();
  if(scrollTop>windowHeight) return;
  var inner=slideshow.find('.slideshow-inner');
  var newHeight=windowHeight-(scrollTop/2);
  var newTop=scrollTop*0.8;

  inner.css({
    transform:'translateY('+newTop+'px)',height:newHeight
  });
}

$(document).ready(function() {
 $('.slide').addClass('is-loaded');

 $('.slideshow .arrows .arrow').on('click',function(){
  slideshowNext($(this).closest('.slideshow'),$(this).hasClass('prev'));
});

 $('.slideshow .pagination .item').on('click',function(){
  slideshowSwitch($(this).closest('.slideshow'),$(this).index());
});

 $('.slideshow .pagination').on('check',function(){
  var slideshow=$(this).closest('.slideshow');
  var pages=$(this).find('.item');
  var index=slideshow.find('.slides .is-active').index();
  pages.removeClass('is-active');
  pages.eq(index).addClass('is-active');
});

/* Lazyloading
$('.slideshow').each(function(){
  var slideshow=$(this);
  var images=slideshow.find('.image').not('.is-loaded');
  images.on('loaded',function(){
    var image=$(this);
    var slide=image.closest('.slide');
    slide.addClass('is-loaded');
  });
*/

var timeout=setTimeout(function(){
  slideshowNext(slideshow,false,true);
},slideshowDuration);

slideshow.data('timeout',timeout);
});

if($('.main-content .slideshow').length > 1) {
  $(window).on('scroll',homeSlideshowParallax);
}
	</script>
    @endsection

