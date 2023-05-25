<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])

	<title>AGE VERIFIER</title>
</head>
<body>
    <center><br><br><br><br><br><br><br>
	    <form method ="POST" action="/age">
	      @csrf
	      <label for="Age">  ELECTION AGE VERIFIER: </label>
	      <input type="number" min ="1" max = "100" id="Age"  name="Age" required > <br><br><br>
	      <input type="submit" name="submit" value = "Check Age" style="color:#5D6D7E; font-family:Arial"> <br><br><br>
	      <h4> Age: <text style="color:#FE0228"> {{$age}} </text></h4> <br><br>


	      <h1> 
         	@if($age == 0)
		           <h3 style="color:#FE0228"> Put a number first </h3>
	          @elseif($age < 15)
		           <h3 style="color:#FE0228"> You are not eligible to vote</h3>
		        @elseif($age>17 )
		          <h3 style="color:#FE0228"> You are eligible to vote</h3>
		        @else
		           <h3 style="color:#FE0228"> You are eligible to vote in Sk election </h3>
        	@endif
        </h1>
         
		
		  
		  
       </form>
       <br>
         
    </center>
</body>
</html>