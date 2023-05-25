<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h2>Form Login</h2>
            <form action="action.php?action=login_user" method="post">
                <div class="field email">
                    <div class="input-area">
                        <input type="email" name="email" id="email" placeholder="Masukan Email" required>
                        <i class="icon fas fa-envelope"></i>
                    </div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" name="password" id="password" placeholder="Masukan Password" required>
                        <i class="icon fas fa-lock"></i>
                    </div>
                </div>
                <div class="pass-txt"><a href="#">Forgot password?</a></div>
                <input type="submit" name="Login">
            </form>
            <div class="sign-txt">Belum Punya Akun? <a href="register.php">Register Mas Bro</a></div>
        </div>
    </div>
</body>

</html>