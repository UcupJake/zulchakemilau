<!-- contact.php -->
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
            <a href="{{ route('products') }}">Catalogue</a>
            <a href="{{ route('calculator') }}">Calculator</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <h2>Hubungi Kami</h2>
    <p>Jadwalkan Trial Hari Ini bersama Mbak Ellen!</p>
    <p>WhatsApp: <a href="https://wa.me/6285183119345">+62 851 8311 9345</a></p>
    <form method="POST" action="">
        <label>Nama:</label><input type="text" name="nama">
        <label>Email:</label><input type="email" name="email">
        <label>Pesan:</label>
        <textarea name="pesan"></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>
