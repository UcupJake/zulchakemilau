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
            background-color: white;
        }

        .container {
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }

        /* Header Utama Website */
        header {
            background-color: #FF8C00;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            /* Prevents the items from jumping to a new line */
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

        .nav-links {
            display: flex;
            gap: 20px;
        }

        header nav ul {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s;
            white-space: nowrap; /* Forces all links to stay on one line */            
        }

        /* Hide hamburger on desktop */
        .hamburger {
            display: none;
        }

        /* End Header */

        .container {
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }

        .sub-title {
            text-align: center;
            /* text-decoration: underline; */
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
            background-color: #ffe9d6;
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
            header nav {
                position: relative;
            }

            header h1 {
                font-size: 18px;
                /* smaller logo text */
                line-height: 1.2;
            }

            .nav-links li {
                margin: 10px 0;
                /* vertical spacing for mobile menu */
            }

            .nav-links {
                display: none;
                /* hide menu */
                flex-direction: column;
                background: #FF8C00;
                position: absolute;
                top: 60px;
                right: 0;
                width: 200px;
                padding: 10px;
                gap: 8px;
                /* tighter spacing */
            }

            .nav-links.active {
                display: flex;
            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

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
            <div class="hamburger">☰</div>
            <ul class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ route('products') }}">Catalogue</a>
                <a href="{{ route('calculator') }}">Calculator</a>
                <a href="{{ route('contact') }}">Contact</a>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2 class="sub-title">WELCOME TO ZULCHA KEMILAU ADVERTINDO</h2>
        <p style="text-align: center; font-size: 18px; color: #555;">
            Mitra terpercaya Anda dalam menyediakan solusi pengharum ruangan berkualitas tinggi untuk rumah dan kantor.
            <br>
            Jelajahi rangkaian produk kami dan temukan aroma yang sempurna untuk meningkatkan suasana ruangan Anda.
        </p>
    </div>

    <main>
        <section class="hero">
            <div class="breadcrumbs">
                Home &raquo; Products
            </div>
            <h1>Produk Zulcha Kemilau</h1>
        </section>
        {{-- Smart Diffuser --}}
        <section id="smart-diffuser" class="category-anchor">
            <h2 class="section-title">Smart Diffuser</h2>
            <p class="section-subtitle">
                Diffuser pintar dengan konektivitas modern untuk mengatur aroma ruangan secara praktis dan presisi.
            </p>

            <div class="grid">
                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Wi‑Fi Diffuser</span>
                    <img src="{{ asset('images/6-Bardi-Smart-Aroma-Diffuser.jpg') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Bardi Aroma Diffuser</h3>
                    <p itemprop="description">
                        Smart diffuser dengan koneksi Wi‑Fi untuk pengaturan aroma ruangan yang fleksibel dan modern.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Fitur:</strong> Wi‑Fi</li>
                        <li><strong>Kapasitas:</strong> 50 ml (min) – 200 ml (max)</li>
                        <li><strong>Cakupan:</strong> 15–20 m²</li>
                        <li><strong>Timer:</strong> 1, 3, 5 jam</li>
                    </ul>
                </article>

                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Bluetooth Diffuser</span>
                    <img src="{{ asset('images/Bardi.png') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Bardi BT Aroma Diffuser</h3>
                    <p itemprop="description">
                        Diffuser dengan koneksi Bluetooth untuk kontrol aroma yang mudah dari perangkat Anda.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Fitur:</strong> Bluetooth</li>
                        <li><strong>Kapasitas:</strong> 50 ml (min) – 350 ml (max)</li>
                        <li><strong>Cakupan:</strong> 25–30 m²</li>
                        <li><strong>Timer:</strong> 1, 3, 6 jam</li>
                    </ul>
                </article>

                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">App‑Controlled Diffuser</span>
                    <img src="{{ asset('images/Krisbow.webp') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Krisbow Sync Smart Ultrasonic Diffuser</h3>
                    <p itemprop="description">
                        Diffuser ultrasonik dengan kontrol melalui remote dan aplikasi smartphone untuk pengalaman aroma
                        yang praktis.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Kontrol:</strong> Remote &amp; aplikasi iOS/Android</li>
                        <li><strong>Kapasitas:</strong> 50 ml (min) – 350 ml (max)</li>
                        <li><strong>Keamanan:</strong> Auto shut off ketika habis</li>
                        <li><strong>Timer:</strong> 2, 4, 8 jam</li>
                    </ul>
                </article>
            </div>
        </section>

        {{-- Essential Oil Diffuser --}}
        <section id="essential-oil-diffuser" class="category-anchor">
            <h2 class="section-title">Essential Oil Diffuser</h2>
            <p class="section-subtitle">
                Mengubah essential oil menjadi kabut halus sekaligus melembapkan udara, seringkali dengan lampu LED
                dekoratif.
            </p>

            <div class="grid">
                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Waterless &amp; Wireless</span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="{{ asset('images/Bathaholic-2.png') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 itemprop="name">Bathaholic Waterless Aromatherapy</h3>
                    <p itemprop="description">
                        Diffuser aromaterapi tanpa air dan nirkabel, ideal untuk penggunaan praktis di berbagai sudut
                        ruangan.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Tipe:</strong> Waterless, Wireless</li>
                        <li><strong>Kapasitas:</strong> 10 ml</li>
                        <li><strong>Durasi:</strong> hingga 6 jam</li>
                    </ul>
                </article>

                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">LED Sleeping Light</span>
                    <img src="{{ asset('images/Ultransmit-Vivi-Diffuser.webp') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Ultransmit Vivi Diffuser</h3>
                    <p itemprop="description">
                        Diffuser dengan lampu tidur LED dan kapasitas air yang cukup untuk menemani istirahat Anda.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Fitur:</strong> LED sleeping light</li>
                        <li><strong>Kapasitas:</strong> 200 ml (water)</li>
                        <li><strong>Keamanan:</strong> Auto shut off ketika habis</li>
                        <li><strong>Durasi:</strong> 8–10 jam</li>
                    </ul>
                </article>

                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">7-Color LED</span>
                    <img src="{{ asset('images/Olaif-Essential.jpg') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Olaif Essential Oil Diffuser</h3>
                    <p itemprop="description">
                        Diffuser dengan 7 warna lampu LED untuk suasana yang menenangkan dan estetis.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Fitur:</strong> 7 warna lampu LED</li>
                        <li><strong>Kapasitas:</strong> 200 ml (water)</li>
                        <li><strong>Keamanan:</strong> Auto shut off ketika habis</li>
                        <li><strong>Durasi:</strong> 8–10 jam</li>
                    </ul>
                </article>
            </div>
        </section>

        {{-- Reed Diffuser --}}
        <section id="reed-diffuser" class="category-anchor">
            <h2 class="section-title">Reed Diffuser</h2>
            <p class="section-subtitle">
                Menggunakan batang rotan untuk menyerap minyak wangi dan menyebarkan aroma secara pasif dan elegan.
            </p>

            <div class="grid">
                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Botanical Series</span>
                    <img src="{{ asset('images/Botanical-Essentials.jpg') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Botanical Essentials Reed Diffuser</h3>
                    <p itemprop="description">
                        Reed diffuser dengan sentuhan botanical untuk menghadirkan aroma alami di dalam ruangan.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Volume:</strong> 100 ml</li>
                        <li><strong>Ketahanan aroma:</strong> hingga 3 bulan (tergantung penggunaan &amp; suhu ruangan)
                        </li>
                    </ul>
                </article>

                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Home Fragrance</span>
                    <img src="{{ asset('images/AMBLR-4.webp') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">HOME of HUMANS Reed Diffuser</h3>
                    <p itemprop="description">
                        Reed diffuser untuk menciptakan suasana ruang yang lebih nyaman dan berkarakter.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Volume:</strong> 140 ml</li>
                        <li><strong>Ketahanan aroma:</strong> hingga 3 bulan</li>
                        <li><strong>Cakupan:</strong> hingga 20 m²</li>
                    </ul>
                </article>
            </div>
        </section>

        {{-- Automatic Spray --}}
        <section id="automatic-spray" class="category-anchor">
            <h2 class="section-title">Automatic Spray</h2>
            <p class="section-subtitle">
                Menyemprotkan parfum secara berkala sesuai timer, dengan desain minimalis dan pengaturan pintar.
            </p>

            <div class="grid">
                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Smart Schedule</span>
                    <img src="{{ asset('images/Godrej-Stella-Mini-Matic.jpeg') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Godrej Stella Mini Matic</h3>
                    <p itemprop="description">
                        Automatic spray dengan jadwal pintar untuk menjaga ruangan tetap segar sepanjang hari.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Smart schedule:</strong> 10, 20, 40 menit</li>
                        <li><strong>Fitur:</strong> Instant spray</li>
                        <li><strong>Status:</strong> Battery &amp; refill status</li>
                    </ul>
                </article>

                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Glade Automatic</span>
                    <img src="{{ asset('images/Glade_Spray.jpg') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <br>
                    <br>
                    <h3 itemprop="name">Glade Automatic Spray Holder</h3>
                    <p itemprop="description">
                        Pengharum ruangan otomatis dengan pengaturan interval semprot yang fleksibel.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Smart schedule:</strong> 9, 18, 36 menit</li>
                        <li><strong>Fitur:</strong> Instant spray</li>
                        <li><strong>Status:</strong> Battery &amp; refill status</li>
                    </ul>
                </article>
            </div>
        </section>

        {{-- Nebulizing Diffuser --}}
        <section id="nebulizing-diffuser" class="category-anchor">
            <h2 class="section-title">Nebulizing Diffuser</h2>
            <p class="section-subtitle">
                Teknologi canggih yang mengubah essential oil menjadi nanopartikel tanpa air, menghasilkan aroma lebih
                kuat dan merata.
            </p>

            <div class="grid">
                <article class="card" itemscope itemtype="https://schema.org/Product">
                    <span class="badge">Nanotechnology</span>
                    <img src="{{ asset('images/Elenscent-2.png') }}" alt="Bardi Aroma Diffuser"
                        style="width:100%; border-radius:8px; margin-bottom:1rem;" itemprop="image">
                    <h3 itemprop="name">Elenscent Diffuser</h3>
                    <p itemprop="description">
                        Nebulizing diffuser dengan jangkauan luas dan kontrol pintar, ideal untuk ruangan rapat dan area
                        besar.
                    </p>
                    <ul class="spec-list">
                        <li><strong>Jangkauan:</strong> hingga 4000 m³</li>
                        <li><strong>Kontrol:</strong> Touch screen &amp; aplikasi smartphone</li>
                        <li><strong>Teknologi:</strong> Nanotechnology partikel, aroma menyebar cepat hingga ke sudut
                            ruangan</li>
                        <li><strong>Kecocokan:</strong> Ruangan rapat &amp; ruangan luas, berbagai seri sesuai kebutuhan
                        </li>
                    </ul>
                </article>
            </div>
        </section>

        {{-- Contact / CTA --}}
        <section id="contact" class="category-anchor">
            <h2 class="section-title">Hubungi Kami</h2>
            <p class="section-subtitle">
                PT. Zulcha Kemilau Advertindo &mdash; untuk informasi lebih lanjut mengenai produk dan kerja sama.
            </p>
            <p style="text-align:center;">
                WhatsApp: <a href="https://wa.me/6282157141470" rel="nofollow">0821-5714-1470</a>
            </p>
        </section>
    </main>


    {{-- <div class="container">
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
    </div> --}}
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
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
