<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registrations Form</h1>

		<form action="index.php" method="POST">
		<div class="row-type">
			<p>
				This form validates user input and then displays "Thank You" page.
			</p>
			
			<hr />
			
			<h2>Please, fill below fields correctly</h2>
			
			<dl>

				<dt>Full Name</dt>
				<dd>
					<input id="name" type="text" name="name" value="" placeholder="Enter your full name">
				</dd>

				<dt>Email</dt>
				<dd>
					<input id="email" type="text" name="email" value="" placeholder="Enter your email" >
				</dd>

				<dt>Username</dt>
				<dd>
					<input id="username" type="text" name="username" value="" placeholder="Enter your username" >
				</dd>

				<dt>Password</dt>
				<dd>
					<input id="password" type="password" name="password" value="" placeholder="Enter your password" >
				</dd>

				<dt>Confirm password</dt>
				<dd>
					<input id="confirm_password" type="password" name="confirm_password" value="" placeholder="Repeat your password" >
				</dd>

				<dt>Date of Birth</dt>
				<dd>
					<input id="date_of_birth" type="date" name="date_of_birth" value="">
				</dd>

				<dt>Gender</dt>
				<dd>
					<select name="gender" value="">
						<option value="">Select one...</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</dd>

				<dt>Marital Status</dt>
				<dd>
					<select name="marital_status" value="">
						<option value="">Select one...</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorced">Divorced</option>
						<option value="Widowed">Widowed</option>
					</select>
				</dd>

				<dt>Address</dt>
				<dd>
					<input id="address" type="text" name="address" value="" placeholder="Enter your address" >
				</dd>

				<dt>City</dt>
				<dd>
					<input id="city" type="text" name="city" value="" placeholder="Enter your city" >
				</dd>

				<dt>Postal Code</dt>
				<dd>
					<input id="postal_code" type="text" name="postal_code" value="" placeholder="Enter your postal code" >
				</dd>

				<dt>Home Phone</dt>
				<dd>
					<input id="home_phone" type="text" name="home_phone" value="" placeholder="Enter your home phone" >
				</dd>

				<dt>Mobile Phone</dt>
				<dd>
					<input id="mobile_phone" type="text" name="mobile_phone" value="" placeholder="Enter your mobile phone" >
				</dd>

				<dt>Credit Card Number</dt>
				<dd>
					<input id="credit_card_number" type="text" name="credit_card_number" value="" placeholder="Enter your credit card number" >
				</dd>

				<dt>Credit Card Expiry Date</dt>
				<dd>
					<input id="credit_card_expiry_date" type="date" name="credit_card_expiry_date" value="" >
				</dd>

				<dt>Monthly Salary</dt>
				<dd>
					<input id="monthly_salary" type="text" name="monthly_salary" value="" placeholder="Enter your monthly salary" >
				</dd>

				<dt>Web Site URL</dt>
				<dd>
					<input id="web_site_url" type="text" name="web_site_url" value="" placeholder="Enter your web site URL" >
				</dd>

				<dt>Overall GPA</dt>
				<dd>
					<input id="gpa" type="text" name="gpa" value="" placeholder="Enter your overall GPA" >
				</dd>

			</dl>
			
			<div>
				<button type="submit">Register</button>
			</div>
</div>
		</form>
	</body>
</html>