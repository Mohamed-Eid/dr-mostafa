@extends('frontend.layouts.app')

@section('content')


<section class="imgServ">
    <div class="container-fluid ">

        @foreach ($services as $index => $service)
        <div id="service-{{$service->id}}" class="row align-items-center">

            @if ($index%2 == 0)
            <div class="img-box col-sm-12 col-md-6 "
                style="background-image: url('{{$service->image_path}}');">
            </div>                
            @endif

            <div class="info-box col-sm-12 col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="feature-desc">
                    <h2>{{$service->title}}</h2>
                    <div>
                        {!! strip_tags($service->description) !!}
                        {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur perspiciatis dignissimos velit temporibus dolore. 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur perspiciatis dignissimos velit temporibus dolore. --}}
                    </div>
                </div>
            </div>
            
            @if ($index%2 != 0)
            <div class="img-box col-sm-12 col-md-6 "
                style="background-image: url('{{$service->image_path}}');">
            </div>                
            @endif

        </div>            
        @endforeach

        {{-- <div id="implement" class="row align-items-center">

            <div class="img-box col-sm-12 col-md-6 "
                style="background-image: url('Technomasr/img/services/serv01.jpg');">

            </div>
            <div class="info-box col-sm-12 col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="feature-desc">
                    <h2>Dental Implant</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore. <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore.
                    </div>
                </div>
            </div>
        </div>

        <div id="root" class="row">
            <div class="info-box col-sm-12 col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="2s"
                data-wow-delay="1s">
                <div class="feature-desc">
                    <h2>Root canal treatment</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore. <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore.
                    </div>
                </div>
            </div>
            <div class="img-box col-sm-12 col-md-6 order-1 order-md-2"
                style="background-image: url('Technomasr/img/services/serv02.jpg');">

            </div>
        </div>

        <div id="orth" class="row">
            <div class="img-box col-sm-12 col-md-6"
                style="background-image: url('Technomasr/img/services/serv03.jpg');">

            </div>
            <div class="info-box col-sm-12 col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
                <div class="feature-desc">
                    <h2>Orthodontic treatment</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore. <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                    </div>
                </div>
            </div>
        </div>

        <div id="veneers" class="row">
            <div class="info-box col-sm-12 col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="2s"
                data-wow-delay="1s">
                <div class="feature-desc">
                    <h2>Veneers & cosmetics</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore! <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                    </div>
                </div>
            </div>
            <div class="img-box col-sm-12 col-md-6 order-1 order-md-2"
                style="background-image: url('Technomasr/img/services/serv04.jpg');">

            </div>
        </div>

        <div id="bleach" class="row">
            <div class="img-box col-sm-12 col-md-6"
                style="background-image: url('Technomasr/img/services/serv05.jpg');">

            </div>
            <div class="info-box col-sm-12 col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
                <div class="feature-desc">
                    <h2>Bleaching</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore. <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                    </div>
                </div>
            </div>
        </div>

        <div id="pediatric" class="row">
            <div class="info-box col-sm-12 col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="2s"
                data-wow-delay="1s">
                <div class="feature-desc">
                    <h2>Pediatric</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore. <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                    </div>
                </div>
            </div>
            <div class="img-box col-sm-12 col-md-6 order-1 order-md-2"
                style="background-image: url('Technomasr/img/services/serv06.jpg');">

            </div>
        </div>

        <div id="crowns" class="row">
            <div class="img-box col-sm-12 col-md-6"
                style="background-image: url('Technomasr/img/services/serv07.jpg');  background-size: auto">

            </div>
            <div class="info-box col-sm-12 col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
                <div class="feature-desc">
                    <h2>Crowns & Bridges</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore. <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem atque odio! Rem, saepe
                        enim quod nam facere doloribus consectetur voluptate. Corrupti nesciunt voluptatibus pariatur
                        perspiciatis dignissimos velit temporibus dolore! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</section>


@endsection
