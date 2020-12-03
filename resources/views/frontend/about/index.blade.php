@extends('frontend.layouts.app')

@section('content')

<!-- start about section -->
<section class="aboutUs">
    <div class="container ">
        <div class="row">
            <div class="col-md-7 col-sm-12 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.3s">

                <h2>{{ get_setting_by_key('about_page_title')->translated_value ?? '' }}</h2>
                <h4>{{ get_setting_by_key('about_page_title_2')->translated_value ?? '' }}</h4>
                <div class="text-container">
                    {{ get_setting_by_key('about_page_desc')->translated_value ?? '' }}
                </div>



            </div>

            <div class="col-md-5 col-sm-12 ">
                <div class="img-wrab abImg wow rotateInDownRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="{{ get_setting_by_key('about_page_img')->image_path }}">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end about section -->

@endsection
