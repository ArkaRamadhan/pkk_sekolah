<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Pika</title>
</head>
<body>
    <div class="login-reg-panel">
        <form action="cek_login.php" method="post">
            <div class="login-info-box">
                <h2>Have an account?</h2>
                <p>ONE SPIRIT</p>
                <label id="label-register" for="log-reg-show">Login</label>
                <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
            </div>
            <div class="register-info-box">                   
                <h2>Don't have an account?</h2>
                <p>ONE TEAM</p>
                <label id="label-login" for="log-login-show">Register</label>
                <input type="radio" name="active-log-panel" id="log-login-show">
            </div>
                                
            <div class="white-panel">
                <div class="login-show">
                    <h2>LOGIN PIKA</h2>
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <input type="submit" value="Login">
                    <a href="">Forgot password?</a>
                </div>
                <div class="register-show">
                    <h2>REGISTER</h2>
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm Password">
                    <input type="button" value="Register">
                </div>
            </div>
        </div>
    </form>
       
    <script>
        $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});



    </script>
</body>
</html>