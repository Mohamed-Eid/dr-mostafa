@extends('frontend.layouts.app')

@section('content')


<!-- START INDEX PAGE -->

<!-- start Image Carousel -->
<section>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel Content -->
        <div class="carousel-inner">

            @foreach (get_settings_by_class('slider') as $index => $slider)
            <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                <div class="carousel-overlay"></div>
                <img src="{{ $slider->image_path }}" class="img-fluid d-block imgCarousel" role="listbox" alt="">
            </div>                
            @endforeach

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <!-- End Carousel Content -->

        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
        </ol>
        <!-- End Carousel Indicators -->
    </div>
</section>
<!-- End Image Carousel -->

<!-- start welcome  -->
<section class="welcome_section">
    <div class="container mt-3 mb-3">
        <div class="row py-4">
            <div class="col-lg-8 mb-4 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                <h1 class="font-weight-bold mb-4 welc-h">{{ get_setting_by_key('about_us_section_title')->translated_value }}</h1>
                <p class="mb-4 welc-p text-justify">{{ get_setting_by_key('about_us_section_desc')->translated_value }}</p>
                <a href="{{ route('frontend.about_us') }}" class="btn btn-primary btn-md">View More</a>
            </div>
            <div class="col-lg-4 wow slideInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="card-1"><img src="{{ get_setting_by_key('about_us_section_image')->image_path }}" class="img-fluid img-card"></div>
            </div>
        </div>
</section>
<!-- End welcome  -->

<!-- start Services -->
<section>
    <div class="section-1 box ">
        <div class="p-0 clearfix services text-center">
            <div class="container  wow slideInDown" data-wow-duration="2s" data-wow-offset="30" data-wow-delay="0.3s">
                <div class="headerServ">
                    <h2 class="custom-header">Our Services</h2>
                </div>
                <div class="row justify-content-center">

                    @foreach ($services as $service)
                    <div class="col-md-4 col-lg-3">
                        <div id="bgCard">
                            <img src="{{$service->icon_path}}" class="img-fluid">
                            <h3>{{$service->title}}</h3>
                            <p style="word-wrap: break-word;">{!! get_snippts($service->description , 10) !!}</p>
                        </div>
                    </div>                        
                    @endforeach


                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('frontend.services.index') }}" class="btn bg-primary-color text-whitev">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- end Services -->



<!-- start our team -->
<section id="team">
    <div class="container  wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
        <div class="section-header">
            <h2 class="custom-header">Our Team</h2>
        </div>
        <div class="row">
            @foreach ($team as $member)
            <div class="col-lg-3 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
				<div class="member" style="height: 250px; width:250px"> 
                    <img src="{{$member->image_path}}"
                        class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{$member->name}}</h4>
                            <span>{{$member->job}}</span>
                            <div class="social">
                                <a href="{{$member->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{$member->facebook}}">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="{{$member->linked_in}}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
            @endforeach


        </div>
        <div class="text-center">
            <a href="{{ route('frontend.team.index') }}" class="btn bg-primary-color text-whitev">View More</a>
        </div>
    </div>
</section>
<!-- end our team -->

<!-- start course section -->
<div class="container-fluid courses">
    <div class="row">
        <div class="courses-title col-12">
            <h2 class="custom-header">Educational Courses</h2>
        </div>

        <div class="clearfix"></div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="owl-carousel">

                @foreach ($courses as $course)
                <div class="item">
                    <img src="{{ $course->image_path }}" alt="image" class="img-fluidhei" height="320px" />
                    <span class="course-price">{{ $course->cost }} $</span>

                    <div class="course-item-text">
                        <div class="course-meta">
                            <span class="course-category bold-font"><a href="#">{{ $course->name }}</a></span>
                            <span class="course-author bold-font">
                                <a href="#">{{ $course->instructor }}</a></span>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('frontend.courses.show',$course) }}" class="btn btn-block btn-primary text-white "> COURSE DETAIL </a>
                    </div>
                </div>                    
                @endforeach


            </div>
        </div>

    </div>
</div>
<!-- End course section -->


<!-- start contact us -->
<section>
    <div class="container-contact">
        <div class="form wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.3s">

            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text"> Contact us with the following details. and fillup the form with the details. </p>

                <div class="info" id="info">
                    <ul>
                        <li class="">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <span class="ml-3">Mansoura,Dakhlia,Egypt</span>
                        </li>
                        <li class="">
                            <i class="fas fa-envelope"></i>
                            <span class="ml-3">contact@email.com</span>
                        </li>
                        <li class="">
                            <i class="fab fa-whatsapp fa-lg"></i>
                            <span class="ml-3">+20 100 125 0344 </span>
                        </li>
                    </ul>
                </div>

                <div class="social-media">
                    <p>Connect with us </p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
                <form action="{{ route('frontend.send_contact_message') }}"  method="post">
                    @csrf
                    <h3 class="title-2">Contact us</h3>
                    <div class="social-input-containers">
                        <input type="text" name="name" class="input" placeholder="Name" required/>
                    </div>
                    <div class="social-input-containers">
                        <input type="email" name="email" class="input" placeholder="Email" required/>
                    </div>
                    <div class="social-input-containers">
                        <input type="tel" name="phone" class="input" placeholder="Phone" required/>
                    </div>
                    <div class="social-input-containers textarea">
                        <textarea name="message" class="input" placeholder="Message" required></textarea>
                    </div>
                    <input type="submit" value="Send" class="btn-2" />
                </form>
            </div>

        </div>
    </div>



</section>
<!-- end contact us -->

<!-- END INDEX PAGE -->
@endsection
