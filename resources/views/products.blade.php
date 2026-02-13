<!-- products.php -->
<?php
$products = [['name' => 'Smart Scent Diffuser RoyalMist', 'price' => 4799655, 'volume' => '4000m³', 'type' => 'Commercial'], ['name' => 'Mini Scent Diffuser & LCD Display', 'price' => 18000000, 'volume' => '300m³', 'type' => 'Commercial'], ['name' => 'Refill Oil 100ml', 'price' => 252000, 'type' => 'Personal'], ['name' => 'Reed Diffuser 150ml', 'price' => 158886, 'type' => 'Personal']];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Zulcha Kemilau Advertindo</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffe9d6;
        }

        /* Header Utama Website */
        header {
            background-color: #FF8C00;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Warna Jingga */
            color: white;
            padding: 20px;
            text-align: left;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header h1 {
            margin: 0;
            letter-spacing: 2px;
            font-size: 24px;
        }

        header nav {
            font-size: 15px
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s;
        }

        .container {
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }

        .sub-title {
            text-align: center;
            text-decoration: underline;
            margin-bottom: 30px;
            color: #333;
        }

        /* Desain Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }

        /* Header di dalam Tabel */
        th {
            background-color: #333;
            color: white;
            text-align: center;
            text-transform: uppercase;
            font-size: 14px;
        }

        .category-cell {
            font-weight: bold;
            background-color: #f9f9f9;
            width: 30%;
        }

        .tools-cell {
            width: 25%;
        }

        .roman-number {
            text-align: center;
        }

        ul {
            margin: 5px 0;
            padding-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }

        tr:hover {
            background-color: #fff9f2;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem 4rem;
        }

        .section-title {
            margin: 3rem 0 1rem;
            text-align: center;
        }

        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 2rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .card {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 1.5rem;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
        }

        .card h3 {
            margin-bottom: .5rem;
        }

        .badge {
            display: inline-block;
            padding: .2rem .6rem;
            border-radius: 999px;
            font-size: .75rem;
            background: #ffe9d6;
            color: #b85b00;
            margin-bottom: .75rem;
        }

        .spec-list {
            list-style: none;
            padding: 0;
            margin: .5rem 0 0;
        }

        .spec-list li {
            margin-bottom: .25rem;
            font-size: .9rem;
        }

        .category-anchor {
            scroll-margin-top: 100px;
        }

        .hero {
            text-align: center;
            padding: 3rem 1rem 1rem;
        }

        .hero h1 {
            font-size: 2rem;
            margin-bottom: .5rem;
            text-transform: uppercase;
        }

        .hero p {
            max-width: 700px;
            margin: 0.5rem auto;
            color: #555;
        }

        .breadcrumbs {
            font-size: .85rem;
            color: #888;
            margin-bottom: 1rem;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="{{ url('/') }}">
            <h1>ZULCHA KEMILAU ADVERTINDO</h1>
        </a>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('products') }}">Catalogue</a>
            <a href="{{ route('calculator') }}">Calculator</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    {{-- Hero / Intro --}}
    <main>
        <section class="hero">
            <div class="breadcrumbs">
                Home &raquo; Catalogue
            </div>
            <h1>Catalogue Zulcha Kemilau</h1>
            <p><strong>Crafting gentle scents for Beautiful Spaces</strong></p>
            <p>
                Zulcha Fragrance adalah distributor room fragrance premium yang menghadirkan aroma elegan
                untuk menciptakan suasana ruang yang berkelas dan berkesan. Setiap fragrance dipilih dengan
                cermat untuk menghadirkan keseimbangan antara kenyamanan, ketenangan, dan karakter, dengan
                kualitas aroma yang halus serta tahan lama.
            </p>
        </section>
    </main>

    <div style="width:100%; height:90vh; margin-top:20px;">
        <iframe src="{{ asset('catalogue/CATALOGUE-ZULCHA-KEMILAU-PROJECT.pdf') }}" width="100%" height="100%"
            style="border:none;">
        </iframe>
    </div>

    <div class="container">
        <h2 class="sub-title">Produk Kami</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Coverage</th>
                    <th>Tipe</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['name'] ?></td>
                    <td>Rp <?= number_format($p['price'], 0, ',', '.') ?></td>
                    <td><?= isset($p['volume']) ? $p['volume'] : '-' ?></td>
                    <td><?= $p['type'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
