<html>
    <head>
        <link rel="stylesheet" href="CSS/register.css">
    </head>
    <body class="hero">
        <div>
            <div class="form-box">
               <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
               </div>
               <form id="login" class="input-group" method="POST" action="{{url('post-login')}}">
               @csrf
                <input type="email" class="input-field" name="email" placeholder="Email" required>
                <input type="password" class="input-field" name="password" placeholder="PASSWORD" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
                <a href="forgotpassword.php" id="forgot-password-link">Forgot Password?</a>
               </form>
               <form id="register" class="input-group" method="POST" action="post-registration">
               @csrf
                <input type="text" class="input-field" name="username" placeholder="USERNAME" required>
                <input type="email" class="input-field" name="email" placeholder="EMAIL-ID" required>
                <input type="password" class="input-field" name="password" placeholder="PASSWORD" required>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <button type="submit" name="rsubmit" class="submit-btn">Register</button>
               </form>
            </div>
            @if($errors->any())
                <p style="text-align: center;">{{$errors->first()}}</p>
            @endif
                <ul>
                    <li><a href="/index">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/logout">Logout</a></li>

                </ul>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
}


  
        </script>
    </body>
</html>