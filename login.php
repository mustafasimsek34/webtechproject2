<?php
// Kullanıcıdan gelen bilgileri al
$email = isset($_POST['email']) ? $_POST['email'] : '';
$parola = isset($_POST['parola']) ? $_POST['parola'] : '';

// Doğru bilgiler
$dogru_email = "b241210383@sakarya.edu.tr";
$dogru_parola = "b241210383";

// Giriş kontrolü
if ($email === $dogru_email && $parola === $dogru_parola) {
    // BAŞARILI GİRİŞ - Hoşgeldiniz mesajı
    echo '
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Hoşgeldiniz</title>
        <style>
            body { background: #333; color: #fff; font-family: "KoHo", Arial, sans-serif; }
            .welcome-box {
                max-width: 500px; margin: 100px auto; text-align: center; 
                padding: 3rem; background: rgba(0,0,0,0.7); border-radius: 15px;
                box-shadow: 0 0 20px #0006;
            }
            h1 { font-size: 2.3rem; margin-bottom: 1.5rem; }
            p { font-size: 1.5rem; }
            a { color: #4caf50; text-decoration: underline; }
        </style>
    </head>
    <body>
        <div class="welcome-box">
            <h1>Hoşgeldiniz <span style="color: #4caf50;">b241210383</span></h1>
            <p>Giriş başarılı!</p>
            <a href="index.html">Ana sayfaya dön</a>
        </div>
    </body>
    </html>
    ';
    exit;
} else {
    // BAŞARISIZ GİRİŞ - login.html'e geri yönlendir
    header("Location: login.html?error=1");
    exit;
}
?>
