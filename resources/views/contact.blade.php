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
            background-color: #ffe9d6;
        }

        /* Header Utama Website */
        header {
            background-color: #FF8C00;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Warna Jingga */
            flex-wrap: nowrap; /* Prevents the items from jumping to a new line */
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

        header nav ul {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s;
            white-space: nowrap; /* Forces all links to stay on one line */
        }

        .nav-links {
            display: flex;
            gap: 20px;
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

    <main>
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
    </main>
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>

</html>
