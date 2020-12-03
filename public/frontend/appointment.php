
<?php include("layouts/header.php") ?>


<div class="form-container">
	<div class="box">

		<form>
			<div class=row>

				<div class="col-12 col-lg-6 m-b-20">
					<h4> What is the best way to reach you? </h4>
					<label for="phone"> <input id="phone" type="radio" name="contact-way"> Phone </label>
					<label for="email"> <input id="email" type="radio" name="contact-way"> Email </label>
				</div>

				<div class="col-12 col-lg-6 m-b-20">
					<h4> Best time of day for your appointment: </h4>
					<label for="morning"> <input id="morning" type="checkbox" name="appointment-time"> Morning </label>
					<label for="afternoon"> <input id="afternoon" type="checkbox" name="appointment-time"> Afternoon </label>
				</div>

				<div class="col-12 col-lg-12 m-b-20">
					<h4> Days of the week you are available for appointment: </h4>
					<label for="sat"> <input id="sat" type="checkbox" name="days"> Saturday </label>
					<label for="sun"> <input id="sun" type="checkbox" name="days"> Sunday </label>
					<label for="mon"> <input id="mon" type="checkbox" name="days"> Monday </label>
					<label for="tue"> <input id="tue" type="checkbox" name="days"> Tuesday </label>
					<label for="wed"> <input id="wed" type="checkbox" name="days"> Wednsday </label>
					<label for="thu"> <input id="thu" type="checkbox" name="days"> Thursday </label>
				</div>

				<div class="col-12 col-lg-12">
					<input class="input-field" type="text" placeholder="Your Name">
					<input class="input-field" type="email" placeholder="Your Email">
					<input class="input-field" type="text" placeholder="Your Phone Number">
					<textarea class="input-field" rows="5"></textarea>
					<button type="submit"> Save </button>
				</div>
			</div>
		</form>

	</div>
</div>

<?php include("layouts/footer.php") ?>
