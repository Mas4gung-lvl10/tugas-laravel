<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #007bff; color: #fff; padding: 20px 0; text-align: center; }
        nav { background: #333; padding: 10px 0; }
        nav a { color: #fff; margin: 0 15px; text-decoration: none; }
        .container { max-width: 900px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        footer { background: #222; color: #fff; text-align: center; padding: 15px 0; position: fixed; width: 100%; bottom: 0;}
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Homepage</h1>
        <p>Website Laravel Sederhana</p>
    </header>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
    </nav>
    <div class="container">
        <h2>Halo, Selamat Datang!</h2>
        <p>Ini adalah halaman utama dari website Laravel Anda. Silakan eksplorasi menu di atas untuk melihat fitur lainnya.</p>
    </div>
    <footer>
        &copy; {{ date('Y') }} Tugas Laravel. All rights reserved.
    </footer>
</body>
</html>