<html>
    <head>
        <title>LOGIN FORM</title>
    </head>
    <body>
        <center>
            <form method="POST" action="{{ route('loginform') }}">
            @csrf
            <h3 style= "font-family: Arial; font-size:40; color:#804674"> LOGIN FORM </h3><br>
            <label for="username" style= "font-family: Arial; font-size:15; color:#804674"> Username: </label>
            <input type="text" id="username" name="username" required/><br><br>
            <label for="password" style= "font-family: Arial; font-size:15; color:#804674"> Password: </label>
            <input type="password" name="password" id="password" required/><br><br>
            
            <br><input type="submit" value="Login" style= "font-family:Arial; font-size:17;color:#804674"/><br><br>
            </form>

            @if($errors->any())
            <div style="color:red;">
            {{ $errors->first() }}
            </div>
            @endif

   
        </center>
       
    </body>
     </html>