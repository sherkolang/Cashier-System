<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Banking System</title>
    
</head>
<body>
    <div class="container" id="signup" style="display:none;">
        <h2> <center> Sign Up </center> </h2>
        <form action="signup.php" method="post">
            <div class="input">
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname" required><br><br>
            </div>
            <div class="input">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
            </div>
            <div class="input">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
            </div>
            <div class="btnarea">
                 <input class="btn" type="submit" value="Sign Up" name="signUp">
            </div>
            <div class="link">
                <p><small>Already have an account></small></p>
                <button id="loginButton">Log In</button>
            </div>
           
        </form>
    </div>

    <!-- log in -->
    <div class="container" id="login">
        <h2> <center> Log In </center> </h2>
        <form action="login.php" method="post">
            <div class="input">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
            </div>
            <div class="input">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
            </div>
            <div class="btnarea">
                <input class="btn" type="submit" value="Log in" name="logIn">
            </div>
            <div class="link">
                <p><small>Don't have an account?</small></p>
                <button id="signUpButton">Sign Up</button>
            </div>
            
        </form>
    </div>
<script>
    
    const signUpButton=document.getElementById('signUpButton');
    const signInButton=document.getElementById('loginButton');
    const loginForm=document.getElementById('login');
    const signUpForm=document.getElementById('signup');

    signUpButton.addEventListener('click',function(){
        loginForm.style.display="none";
        signUpForm.style.display="block";
    })

    signInButton.addEventListener('click', function(){
        loginForm.style.display="block";
        signUpForm.style.display="none";
    })

</script>
</body>
</html>