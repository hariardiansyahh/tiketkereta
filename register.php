<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link 
    href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Roboto+Condensed&display=swap" 
    rel="stylesheet"
    />
</head>
<body>
    <div class="container-login">
        <h2 style="margin-top: 100px">Form Register</h2>
        <form action="insert_user.php" method="post">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <label for="password-repeat">Ulangi Password:</label>
            <input type="password" name="password-repeat" id="password-repeat">
            <input type="submit" name="Register">
        </form>
        <p> Sudah Punya akun? <a href="form_login.php" target="blank">Login</a></p>
    </div>
</body>
</html>