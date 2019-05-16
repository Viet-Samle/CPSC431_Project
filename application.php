<?php
	require('header.php');
?>

<div class="container">
	<h1>So you wanna become a boytoy.</h1>
	<p>This is your chance to show why you're the best man around.</p>

	<form action="/applicationForm.php" method="post">
		<div class="text-right">
			<button action="home.php" type="submit" class="btn btn-primary">Submit Application</button>
		</div>
		<div class="form-group">
			<label for="name">Your Name: </label>
			<input type="name" class="form-control" name="name" id="name" placeholder="Enter Name">
			<small>First and Last Name</small>
		</div>
		<div class="form-group">
			<label for="email">Your Email: </label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
		</div>
		<div class="form-group">
			<label for="height">What is your height?</label>
			<select class="form-control form-control-sm" name="height" id="height">
				<option value=5.0>Less than 5'</option>
				<option value=5.3>5-5.5 ft</option>
				<option value=5.7>5.5-6 ft</option>
				<option value=6.0>More than 6'</option>
			</select>
		</div>

		<div class="form-group">
			<label for="gender">Which sex are you (or can pretend to be) attracted to?</label>
			<select class="form-control form-control-sm" name="gender" id="gender">
				<option value="N/A">Prefer not to say</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select>
		</div>

		<div class="form-group">
			<label for="message">Describe your best qualities.</label>
			<textarea class="form-control" name="message" rows="8" cols="110"></textarea>
		</div>

	</form>
</div>

<?php
	require('footer.php');
 ?>
