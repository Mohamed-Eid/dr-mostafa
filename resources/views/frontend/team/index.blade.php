@extends('frontend.layouts.app')

@section('content')


<!-- start our team -->
<section id="team">
	<div class="container">
		<h1 class="custom-header">Our Team</h1>
		<div class="row">

            @foreach ($team as $index => $member)
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{$index+1}}s" style="visibility: visible; animation-delay: 0.{{$index+1}}s; animation-name: fadeInUp;">
				<div class="member" style="height: 250px; width:250px"> 
					<img src="{{$member->image_path}}" class="img-fluid" alt="" >
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
	</div>
</section>
<!-- end our team -->



@endsection
