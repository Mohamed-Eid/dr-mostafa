@extends('frontend.layouts.app')

@section('content')


	<!-- start course section -->
	<section class="course-det">
		<div class="container justify-content-center row">
            
            @foreach ($courses as $course)
            <div class="card-container col-12 col-md-6">

				<div class="card">
                    <img src="{{ $course->image_path }}" class="card-img-top" alt="...">
					<div class="card-body">

						<h3 class="card-title text-center p-b-25">{{ $course->name }}</h3>
						<h5 class="card-subtitle"> <a href="#"> Instructor Name: <span style="color: #555">{{ $course->instructor }} </span></a> </h5>

						<div class="card-text">
                            <span>About Instructor: </span> 

                                {!! $course->about_instructor !!}                            
                            <br><br>
                            <span>About course: </span> 
                            {!! $course->about_course!!}                            
                            
						</div>

						<button class="btn btn-primary" data-toggle="modal" data-target="#enroll-coures">Enroll Now !</button>

					</div>
				</div>

			</div>                
            @endforeach


		</div>
	</section>
	<!-- End course section --> 


@endsection
