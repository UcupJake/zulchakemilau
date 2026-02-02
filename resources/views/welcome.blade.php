<!-- index.php -->
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

    <div class="container">
        <h2 class="sub-title">PENGHARUM RUANGAN (ROOM PARFUM)</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Ruangan</th>
                    <th>Luas</th>
                    <th>Jenis Alat</th>
                    <th>Pengharum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="roman-number">I</td>
                    <td class="category-cell">
                        RUMAH
                        <ul>
                            <li>Ruang Keluarga</li>
                            <li>Ruang Makan</li>
                            <li>Kamar</li>
                            <li>Toilet</li>
                            <li>Dapur</li>
                        </ul>
                    </td>
                    <td></td>
                    <td class="tools-cell">
                        <ol>
                            <li>Cling Pembersih Kaca</li>
                            <li>Sunlight</li>
                            <li>Karbol</li>
                            <li>Pengharum Gantung Stella</li>
                            <li>Tissue WC Lembaran</li>
                        </ol>
                    </td>
                    <td class="tools-cell">
                        <ol>
                            <li>Spray</li>
                            <li>Gel pengharum</li>
                            <li>Lilin Aromaterapi</li>
                            <li>Diffuser elektrik</li>
                            <li>Reed Diffuser</li>
                            <li>Plug-in Diffuser</li>
                            <li>Potpourri</li>
                        </ol>
                    </td>
                </tr>

                <tr>
                    <td class="roman-number">II</td>
                    <td class="category-cell">
                        KANTOR SWASTA
                        <ul>
                            <li>Lobby / Ruang Tamu</li>
                            <li>Ruang Rapat</li>
                            <li>Ruang Pimpinan</li>
                            <li>Ruang Karyawan</li>
                            <li>Toilet</li>
                        </ul>
                    </td>
                    <td></td>
                    <td class="tools-cell">
                        <!-- <ol>
                            <li>Spray</li>
                            <li>Gel pengharum</li>
                            <li>Lilin Aromaterapi</li>
                            <li>Diffuser elektrik</li>
                            <li>Reed Diffuser</li>
                            <li>Plug-in Diffuser</li>
                            <li>Potpourri</li>
                        </ol> -->
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td class="roman-number">III</td>
                    <td class="category-cell">
                        KANTOR INSTANSI
                        <ul>
                            <li>Lobby Besar</li>
                            <li>Ruang Koridor</li>
                            <li>Ruang Rapat</li>
                            <li>Ruang Pimpinan</li>
                            <li>Ruang Karyawan</li>
                            <li>Toilet</li>
                        </ul>
                    </td>
                    <td></td>
                    <td class="tools-cell">
                        <!-- <ol>
                            <li>Spray</li>
                            <li>Gel pengharum</li>
                            <li>Lilin Aromaterapi</li>
                            <li>Diffuser elektrik</li>
                            <li>Reed Diffuser</li>
                            <li>Plug-in Diffuser</li>
                            <li>Potpourri</li>
                        </ol> -->
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>

{{-- <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Elenscent Indonesia</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Elenscent Indonesia</h1>
    <p>Your Signature Scent, Your Story</p>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('calculator') }}">Calculator</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
  </header>

  <section>
    <h2>Selamat Datang</h2>
    <p>Buat pelanggan mengingat Anda, bahkan setelah mereka pergi. Dengan Elenscent, aroma Anda berbicara - dan setiap sudut ruang menjadi bagian dari kisah brand Anda.</p>
    <a href="{{ route('products') }}" class="btn">Shop Now</a>
  </section>
</body>
</html> --}}

{{-- <html lang="id">

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
            /* Warna Jingga */
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            letter-spacing: 2px;
            font-size: 24px;
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
        <h1>PT. ZULCHA KEMILAU ADVERTINDO</h1>
    </header>

    <div class="container">
        <h2 class="sub-title">PENGHARUM RUANGAN (ROOM PARFUM)</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Ruangan</th>
                    <th>Luas</th>
                    <th>Jenis Alat</th>
                    <th>Pengharum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="roman-number">I</td>
                    <td class="category-cell">
                        RUMAH
                        <ul>
                            <li>Ruang Keluarga</li>
                            <li>Ruang Makan</li>
                            <li>Kamar</li>
                            <li>Toilet</li>
                            <li>Dapur</li>
                        </ul>
                    </td>
                    <td></td>
                    <td class="tools-cell">
                        <ol>
                            <li>Cling Pembersih Kaca</li>
                            <li>Sunlight</li>
                            <li>Karbol</li>
                            <li>Pengharum Gantung Stella</li>
                            <li>Tissue WC Lembaran</li>
                        </ol>
                    </td>
                    <td class="tools-cell">
                        <ol>
                            <li>Spray</li>
                            <li>Gel pengharum</li>
                            <li>Lilin Aromaterapi</li>
                            <li>Diffuser elektrik</li>
                            <li>Reed Diffuser</li>
                            <li>Plug-in Diffuser</li>
                            <li>Potpourri</li>
                        </ol>
                    </td>
                </tr>

                <tr>
                    <td class="roman-number">II</td>
                    <td class="category-cell">
                        KANTOR SWASTA
                        <ul>
                            <li>Lobby / Ruang Tamu</li>
                            <li>Ruang Rapat</li>
                            <li>Ruang Pimpinan</li>
                            <li>Ruang Karyawan</li>
                            <li>Toilet</li>
                        </ul>
                    </td>
                    <td></td>
                    <td class="tools-cell">
                        <!-- <ol>
                            <li>Spray</li>
                            <li>Gel pengharum</li>
                            <li>Lilin Aromaterapi</li>
                            <li>Diffuser elektrik</li>
                            <li>Reed Diffuser</li>
                            <li>Plug-in Diffuser</li>
                            <li>Potpourri</li>
                        </ol> -->
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td class="roman-number">III</td>
                    <td class="category-cell">
                        KANTOR INSTANSI
                        <ul>
                            <li>Lobby Besar</li>
                            <li>Ruang Koridor</li>
                            <li>Ruang Rapat</li>
                            <li>Ruang Pimpinan</li>
                            <li>Ruang Karyawan</li>
                            <li>Toilet</li>
                        </ul>
                    </td>
                    <td></td>
                    <td class="tools-cell">
                        <!-- <ol>
                            <li>Spray</li>
                            <li>Gel pengharum</li>
                            <li>Lilin Aromaterapi</li>
                            <li>Diffuser elektrik</li>
                            <li>Reed Diffuser</li>
                            <li>Plug-in Diffuser</li>
                            <li>Potpourri</li>
                        </ol> -->
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html> --}}
