<html>
<head>
	<title>Day1</title>
</head>

<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h2>
<form action="/welcome" method="POST">
	@csrf
	<label for="first_name">First name:</label>
	<br><br>
	<input type="text" id="first_name" name="first_name">
	<br>
	<p>
	<label for="last_name">Last name:</label>
	<br><br>
	<input type="text" id="last_name" name="last_name"></p>

	<label>Gender:</label><br><br>
	<input type="radio" name="gender" value="0"> Male <br>
	<input type="radio" name="gender" value="1"> Female <br>
	<input type="radio" name="gender" value="2"> Other

	<br><br>
	<label>Nationality:</label><br><br>
	<select>
		<option value="indoneian">Indonesian</option>
		<option value="korean">Korean</option>
		<option value="japanese">Japanese</option>
	</select>

	<br><br>
	<label>Language Spoken:</label><br><br>
	<input type="checkbox" name="bahasa_user" value="0"> Bahasa Indonesia <br>
	<input type="checkbox" name="bahasa_user" value="1"> English <br>
	<input type="checkbox" name="bahasa_user" value="2"> Other

	<br><br>
	<label>Bio:</label><br><br>
	<textarea cols="30" rows="10"></textarea>
	<p><input type="submit" value="Sign Up"></p>
</form>
</body>
</html>