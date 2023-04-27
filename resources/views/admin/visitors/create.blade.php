<!DOCTYPE html>
<html>
<head>
	<style>
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			background-color: #f9f9f9;
		}

		label {
			display: inline-block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		input[type="text"],
		input[type="date"],
		input[type="tel"],
		select {
			display: block;
			width: 100%;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 16px;
			margin-bottom: 10px;
		}

		select {
			height: 40px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form>
	  <label for="name">Name:</label>
	  <input type="text" id="name" name="name">

	  <label for="dob">Date of Birth:</label>
	  <input type="date" id="dob" name="dob">

	  <label for="gender">Gender:</label>
	  <select id="gender" name="gender">
	    <option value="male">Male</option>
	    <option value="female">Female</option>
	    <option value="other">Other</option>
	  </select>

	  <label for="mobile">Mobile Number:</label>
	  <input type="tel" id="mobile" name="mobile">

	  <label for="city">City/Region:</label>
	  <input type="text" id="city" name="city">

	  <input type="submit" value="Submit">
	</form>
</body>
</html>