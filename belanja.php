<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tiket Kereta</title>
</head>
<body>
    <section class="main">
    <nav>
        <ul style="list-style-type: none;">
            <li><a href="home.php">Home</a></li>
            <li><a href="belanja.php">Pesan Tiket</a></li>
            <li><a href="about.php">About Me</a></li>
            <li><a href="login_form.php">Account</a></li>
        </ul>
    </nav>
    </section>
    <div class="container">
        <div class="formTitle">Pemesanan Tiket Kereta Api</div>
            <form method="POST" action="">
                <label for="stasiunAsal">Stasiun Asal</label>
                    <div class="input-group">
                        <select name="stasiunAsal" id="stasiunAsal" required>
                            <option disabled selected>Pilih stasiun</option>
                            <option>Stasiun 1</option>
                            <option>Stasiun 2</option>
                        </select>
                    </div>                       
                <label for="tujuan">Stasiun Tujuan</label>
                    <div class="input-group">
                        <select name="tujuan" id="tujuan" required>
                            <option disabled selected>Pilih stasiun</option>
                            <option>Stasiun 1</option>
                            <option>Stasiun 2</option>
                        </select>
                    </div>
                <label for="tanggal">Tanggal Keberangkatan</label>
                    <div class="input-group">
                        <input type="date" name="tanggal" required>
                    </div>
                <label for="dewasa">Dewasa</label>
                    <div class="input-group">
                        <input name="adult" min="1" max="10" id="dewasa" type="number" value="1">
                    </div>
                <label for="baby">Bayi</label>
                    <div class="input-group">
                        <input name="baby" min="0" max="10" id="baby" type="number" value="0">
                    </div>
                <input name="submit" id="submit" type="submit">
        </div>
            </form>
</body>
</html>