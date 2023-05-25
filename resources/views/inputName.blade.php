<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])

	<title>Name</title>
</head>
<body>
    <center><br><br><br><br><br><br><br>
	    <form method ="POST" action="/name">
	      @csrf
	      <label for="inputName">  NAME: </label>
	      <input type="text" id="Firstname"  name="Name" required > <br><br><br>
	

		
		  <input type="submit" name="submit" style="color:#5D6D7E; font-family:Arial"> <br><br><br>
		  
       </form>
       <br>
         <h4> Name: <text style="color:#E9967A"> {{$Fname}} </text></h4>
    </center>
</body>
</html>