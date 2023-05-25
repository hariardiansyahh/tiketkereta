<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/belanja.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <div class="wrapper">
            <h2>Pemesanan Tiket Kereta Api</h2>
            <form method="POST" action="">
                <div class="field asal">
                    <div class="input-area">
                        <label for="asal">Stasiun Asal</label>
                        
                        <select class="input" name="asal" id="asal" required>
                            <option disabled selected>Pilih stasiun</option>
                            <option>Stasiun 1</option>
                            <option>Stasiun 2</option>
                        </select>
                    </div>
                </div>
                <div class="field tujuan">
                    <div class="input-area">
                        <label for="tujuan">Stasiun Tujuan</label>
                        <select class="input" name="tujuan" id="tujuan" required>
                            <option disabled selected>Pilih stasiun</option>
                            <option>Stasiun 1</option>
                            <option>Stasiun 2</option>
                        </select>
                    </div>
                </div>
                <div class="field tanggal">
                    <div class="input-area">
                        <label for="tanggal">Tanggal Keberangkatan</label>
                        <input type="date" name="tanggal" id="tanggal" required>
                    </div>
                </div>
                <div class="field dewasa">
                    <div class="input-area">
                        <label for="dewasa">Dewasa</label>
                        <i class="icon fa-solid fa-user"></i>
                        <input name="adult" min="1" max="10" id="dewasa" type="number" value="1">
                    </div>
                </div>
                <div class="field bayi">
                    <div class="input-area">
                        <label for="baby">Bayi</label>
                        <i class="icon fa-solid fa-baby"></i>
                        <input name="baby" min="0" max="10" id="baby" type="number" value="0">
                    </div>
                </div>
                <input name="submit" id="submit" type="submit">
        </div>
    </div>
    </form>
    <p>Lu harus lanjutin ri atau gw tusuk lu.</p>
</body>

</html>