<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="css/register.css" type="text/css" />
    <link 
    href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Roboto+Condensed&display=swap" 
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="container">
    <div class="wrapper">
        <h2>Form Register</h2>
        <form action="action.php?action=insert_user" method="post">
            <div class="field">
                <div class="input-area">
                    <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
                    <i class="icon fa-solid fa-user"></i>
                </div>
            </div>
            <div class="field">
                <div class="input-area">
                    <input type="email" name="email" id="email" placeholder="Masukan Email" required>
                    <i class="icon fas fa-envelope"></i>
                </div>
            </div>
            <div class="field">
                <div class="input-area">
                    <input type="password" name="password" id="password" placeholder="Masukan Password" required>
                    <i class="icon fas fa-lock"></i>
                </div>
            </div>
            <div class="field">
                <div class="input-area">
                    <input type="password" name="password-repeat" id="password-repeat" placeholder="Ulangi Password" required>
                    <i class="icon fa-solid fa-repeat"></i>                </div>
            </div>
            <input type="submit" name="Register">
        </form>
        <div class="sign-txt">Sudah Punya Akun? <a href="login_form.php">Login Mas Bro</a></div>
    </div>
</div>
</body>
</html>