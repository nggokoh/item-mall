<?php
$platform = "RenderON";
$section = "ITEM MALL";
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $section ?> | <?= $platform ?> - Solusi Digital Modern</title>
    <meta name="description" content="<?= $platform ?> ITEM MALL: Tempat terbaik untuk menjual dan membeli item digital seperti plugin, template, akun premium, dan layanan web.">
    <meta name="keywords" content="item mall, renderon, marketplace digital, jual beli item digital, plugin, template, akun premium">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2b6cb0;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        h1, h2 {
            margin: 0;
        }
        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .section {
            margin-bottom: 40px;
        }
        .cta {
            display: inline-block;
            background-color: #2b6cb0;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 20px;
        }
        .item-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .item {
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .item h3 {
            font-size: 18px;
            margin-top: 0;
        }
        .item p {
            font-size: 14px;
        }
        footer {
            text-align: center;
            padding: 30px 0;
            background-color: #e9ecef;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <h1><?= $platform ?> - <?= $section ?></h1>
    <p>Marketplace Item Digital Terlengkap & Terpercaya</p>
</header>

<div class="container">

    <div class="section">
        <h2>Tentang ITEM MALL</h2>
        <p>
            ITEM MALL dari <strong><?= $platform ?></strong> adalah pusat jual beli digital untuk berbagai kebutuhan seperti plugin, template web, akun premium, tool developer, dan layanan digital lainnya. Dibuat khusus untuk developer, kreator, dan pengguna teknologi, ITEM MALL menghadirkan sistem yang cepat, aman, dan efisien.
        </p>
    </div>

    <div class="section">
        <h2>Kategori Item Populer</h2>
        <div class="item-grid">
            <div class="item">
                <h3>Plugin WordPress</h3>
                <p>SEO, keamanan, toko online, dan lainnya untuk optimalkan situs kamu.</p>
            </div>
            <div class="item">
                <h3>Template Web</h3>
                <p>Desain HTML, landing page, admin dashboard siap pakai.</p>
            </div>
            <div class="item">
                <h3>Akun Premium</h3>
                <p>Spotify, Canva, Netflix, dan tools berlangganan lainnya dengan harga terjangkau.</p>
            </div>
            <div class="item">
                <h3>Jasa Desain</h3>
                <p>Logo, banner, UI/UX design, dan kebutuhan visual digital lainnya.</p>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>Kenapa Pilih <?= $platform ?> ITEM MALL?</h2>
        <ul>
            <li>✅ Sistem pembayaran mudah (Dana, Qris, Bank, E-Wallet)</li>
            <li>✅ Barang dikirim otomatis dan instan</li>
            <li>✅ Komisi penjual rendah – untung maksimal</li>
            <li>✅ Dukungan support aktif 24 jam</li>
            <li>✅ Review & rating transparan dari pembeli asli</li>
        </ul>
        <a class="cta" href="#">Jelajahi ITEM MALL Sekarang</a>
    </div>

</div>

<footer>
    &copy; <?= $year ?> <?= $platform ?> ITEM MALL. All rights reserved.
</footer>

</body>
</html>
