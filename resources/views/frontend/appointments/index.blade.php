@extends('frontend.layouts.app')

@section('content')


<div class="form-container">
	<div class="box">

		<form method="POST" action="{{ route('frontend.save_appointment') }}">
            @csrf
			<div class=row>

				<div class="col-12 col-lg-6 m-b-20">
					<h4> What is the best way to reach you? </h4>
					<label for="phone"> <input id="phone" type="radio" value="0" name="contact_method"> Phone </label>
					<label for="email"> <input id="email" type="radio" value="1" name="contact_method"> Email </label>
				</div>

				<div class="col-12 col-lg-6 m-b-20">
					<h4> Best time of day for your appointment: </h4>
					<label for="morning"> <input id="morning" type="radio" value="0" name="visit_time"> Morning </label>
					<label for="afternoon"> <input id="afternoon" type="radio" value="1" name="visit_time"> Afternoon </label>
				</div>

				<div class="col-12 col-lg-12 m-b-20">
                    <h4> Days of the week you are available for appointment: </h4>
                    
                    @php
                        $days = ['Saturday','Sunday','Monday','Tuesday','Wednsday','Thursday'];
                    @endphp

                    @for ($i = 0; $i < 6; $i++)
                    <label for="{{$days[$i]}}"> <input id="{{$days[$i]}}" value="{{ $i }}" type="checkbox" name="days[]"> {{$days[$i]}} </label>
                    @endfor
				</div>

				<div class="col-12 col-lg-12">
					<input class="input-field" type="text" name="name" placeholder="Your Name">
					<input class="input-field" type="email" name="email" placeholder="Your Email">
					<input class="input-field" type="text" name="phone" placeholder="Your Phone Number">
					<textarea class="input-field" rows="5" name="message"></textarea>
					<button type="submit"> Save </button>
				</div>
			</div>
		</form>

	</div>
</div>





@endsection
