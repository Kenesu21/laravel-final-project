<html>
    <head>
    	<title> Conditional Page</title>
    	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

<center><body>
	<h1> This is the conditional page</h1>
	@if(strlen($name)> 0)
		True: The length of Kenneth Escabarte > 0
	@else 
		False:
	@endif
</body></center>
</html>
