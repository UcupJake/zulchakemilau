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
            background-color: #f4f4f4;
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
    </style>
</head>

<body>
    <header>
        <h1>ZULCHA KEMILAU ADVERTINDO</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('calculator') }}">Calculator</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <h2>Produk Kami</h2>
    <ul>
        <?php foreach ($products as $p): ?>
        <li>
            <strong><?= $p['name'] ?></strong><br>
            Harga: Rp <?= number_format($p['price'], 0, ',', '.') ?><br>
            <?= isset($p['volume']) ? 'Coverage: ' . $p['volume'] . '<br>' : '' ?>
            Tipe: <?= $p['type'] ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
