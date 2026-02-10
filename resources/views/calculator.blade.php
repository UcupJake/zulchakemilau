<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diffuser Calculator - PT. Zulcha Kemilau Advertindo</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #FF8C00;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            letter-spacing: 2px;
            font-size: 24px;
        }

        header nav {
            font-size: 15px;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #fff9f2;
        }

        .container {
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
        }

        .form-section {
            background-color: white;
            padding: 40px;
            border-radius: 4px;
            margin-bottom: 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .form-section h2 {
            font-size: 32px;
            font-weight: 300;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
            font-size: 15px;
        }

        .form-group select,
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 15px;
            background-color: #f9f9f9;
            color: #333;
            transition: border-color 0.3s;
        }

        .form-group select:focus,
        .form-group input:focus {
            outline: none;
            border-color: #FF8C00;
            background-color: white;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-row-full {
            display: grid;
            grid-template-columns: 1fr;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #FF8C00;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #ffb55a;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        /* Supaya hasil terlihat jelas */
        #hasil,
        #hasilAC {
            background-color: #f0f0f0;
            /* abu-abu muda */
            font-weight: bold;
            color: #333;
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
        <!-- Section 1: Oil Consumption Calculator -->
        <form class="form-section" id="oilConsumptionForm">
            <h2>Kalkulator Oil Consumption – Scent Diffuser Machine</h2>

            <div class="form-group">
                <label for="unitMesin">Pilih Unit Mesin:</label>
                <select id="unitMesin" name="unitMesin" required>
                    <option>Smart Scent Diffuser 4000m3 - The Royal</option>
                </select>
            </div>

            <div class="form-group">
                <label for="modeSetting">Pilih Mode Setting:</label>
                <select id="modeSetting" name="modeSetting" required>
                    <option value="">-- Pilih Mode --</option>
                    <option value="rendah">Mode Rendah</option>
                    <option value="sedang">Mode Sedang</option>
                    <option value="tinggi">Mode Tinggi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jamNyala">Berapa Jam Mesin Menyala per Hari?</label>
                <input type="number" id="jamMenyala" name="jamMenyala" placeholder="Contoh: 8">

            </div>

            <div class="form-group">
                <label for="hariMenyala">Berapa Hari Mesin Menyala per Minggu?</label>
                <input type="number" id="hariMenyala" name="hariMenyala" placeholder="Contoh: 5">
            </div>

            <div class="form-group">
                <label for="jenisOil">Pilih Jenis Oil:</label>
                <select id="jenisOil" name="jenisOil" required>
                    <option>Fragrance Oil – Rp 614.400 / 500ml</option>
                </select>
            </div>

            <button type="submit" class="submit-btn" onclick="hitungBiaya()">Hasil Konsumsi & Biaya: </button>
            {{-- <label for="hasil">Hasil Konsumsi & Biaya:</label> --}}
            <input type="text" id="hasil" readonly>

        </form>

        <!-- Section 2: Unit Recommendation -->
        <form class="form-section" id="recommendationForm">
            <h2>Rekomendasi Unit Scent Diffuser<br>(berdasarkan kondisi ruangan)</h2>

            <div class="form-row">
                <div class="form-group">
                    <label for="panjangRuangan">Panjang Ruangan (meter)</label>
                    <input type="number" id="panjangRuangan" name="panjangRuangan" placeholder="Contoh: 10">
                </div>

                <div class="form-group">
                    <label for="lebarRuangan">Lebar Ruangan (meter)</label>
                    <input type="number" id="lebarRuangan" name="lebarRuangan" placeholder="Contoh: 8">
                </div>
            </div>

            <div class="form-row-full">
                <div class="form-group">
                    <label for="tinggiRuangan">Tinggi Ruangan (meter)</label>
                    <input type="number" id="tinggiRuangan" name="tinggiRuangan" placeholder="Contoh: 3">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="jenisRuangan">Jenis Ruangan</label>
                    <select id="jenisRuangan" name="jenisRuangan" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="open-space">Open space</option>
                        <option value="office">Office</option>
                        <option value="retail">Retail</option>
                        <option value="hotel">Hotel</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="acCentral">AC Central Tersedia?</label>
                    <select id="acCentral" name="acCentral" required>
                        <option value="">-- Pilih --</option>
                        <option value="yes">Ya</option>
                        <option value="no">Tidak</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="submit-btn" onclick="hitungAC()">Hasil Rekomendasikan Unit: </button>
            {{-- <label for="hasilAC">Hasil Rekomendasi Unit:</label> --}}
            <input type="text" id="hasilAC" readonly>
        </form>
    </div>

    <script>
        // Script Diffuser
        function hitungBiaya() {
            const jamNyala = parseFloat(document.getElementById('jamMenyala').value) || 0;
            const hariMinggu = parseFloat(document.getElementById('hariMenyala').value) || 0;
            const hargaOil = parseFloat(document.getElementById('jenisOil').value);
            const mode = document.getElementById('modeSetting').value;

            let konsumsiPerJam = 0;
            if (mode === "rendah") konsumsiPerJam = 0.5;
            if (mode === "sedang") konsumsiPerJam = 1;
            if (mode === "tinggi") konsumsiPerJam = 2;

            const totalKonsumsi = jamNyala * hariMinggu * konsumsiPerJam;
            const hargaPerMl = hargaOil / 500;
            const totalBiaya = totalKonsumsi * hargaPerMl;

            document.getElementById('hasil').value =
                `Konsumsi: ${totalKonsumsi.toFixed(2)} ml, Biaya: Rp ${totalBiaya.toLocaleString()}`;
        }

        // Script AC
        function hitungAC() {
            const panjang = parseFloat(document.getElementById('panjang').value) || 0;
            const lebar = parseFloat(document.getElementById('lebar').value) || 0;
            const tinggi = parseFloat(document.getElementById('tinggi').value) || 0;
            const jenisRuangan = document.getElementById('jenisRuangan').value;
            const acCentral = document.getElementById('acCentral').value;

            const volume = panjang * lebar * tinggi; // m3
            let kebutuhanBTU = volume * 500; // asumsi 500 BTU per m3

            if (jenisRuangan === "restoran") kebutuhanBTU *= 1.2;
            if (jenisRuangan === "kantor") kebutuhanBTU *= 1.1;

            let rekomendasi = "";
            if (acCentral === "ya") {
                rekomendasi = `Gunakan sistem AC Central dengan kapasitas sekitar ${Math.round(kebutuhanBTU)} BTU.`;
            } else {
                rekomendasi = `Gunakan AC split dengan kapasitas sekitar ${Math.round(kebutuhanBTU)} BTU.`;
            }

            document.getElementById('hasilAC').value = rekomendasi;
        }
    </script>

</body>

</html>
