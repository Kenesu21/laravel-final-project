<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login Page</title>

</head>
<body>
	
    <center>
       <h1 style = "color:#2C3E50;font-family: Arial;"> LOGIN </h1>
	    <form method ="POST">
		  <label> USERNAME: </label>
		  <input type="text" id = "username"name="admin" style = "color:#5D6D7E; font-family:Arial"> <br><br><br>

		  <label> PASSWORD: </label>
		  <input type="password" id="password" name="password" style="color:#5D6D7E; font-family:Arial"> <br><br><br>
		  <button type ="submit" name="submit_button" style = "color:#873600"> Log In </button>
       </form>
    </center>
</body>
</html>